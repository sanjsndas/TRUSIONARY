class BsCartEngine {
  constructor() {
    this.bsStorageKey = 'basket_f934db';
    this.bsItems = this.bsLoad();
  }
  bsLoad() {
    try {
      const bsRaw = localStorage.getItem(this.bsStorageKey);
      return bsRaw ? JSON.parse(bsRaw) : [];
    } catch (bsErr) {
      return [];
    }
  }
  bsSave() {
    try {
      localStorage.setItem(this.bsStorageKey, JSON.stringify(this.bsItems));
    } catch (bsErr) {}
    this.bsDispatch();
  }
  bsDispatch() {
    document.dispatchEvent(new CustomEvent('cart_update'));
  }
  resolve(bsPath) {
    if (!bsPath || typeof bsPath !== 'string') return '';
    if (/^(https?:\/\/|data:)/i.test(bsPath)) return bsPath;
    return bsPath.replace(/^(\.\/|\.\.\/|\/)+/, '');
  }
  add(bsProduct) {
    if (!bsProduct || !bsProduct.id) return;
    const bsExisting = this.bsItems.find(bsIt => String(bsIt.id) === String(bsProduct.id));
    const bsQty = Number(bsProduct.quantity) > 0 ? Number(bsProduct.quantity) : 1;
    const bsPrice = Number(bsProduct.price) || 0;
    const bsCleanImg = this.resolve(bsProduct.image || '');
    const bsCleanUrl = this.resolve(bsProduct.url || '');
    if (bsExisting) {
      bsExisting.quantity = Number(bsExisting.quantity) + bsQty;
    } else {
      this.bsItems.push({
        id: String(bsProduct.id),
        name: String(bsProduct.name || 'Product'),
        price: bsPrice,
        image: bsCleanImg,
        url: bsCleanUrl,
        quantity: bsQty
      });
    }
    this.bsSave();
  }
  remove(bsId) {
    this.bsItems = this.bsItems.filter(bsIt => String(bsIt.id) !== String(bsId));
    this.bsSave();
  }
  update(bsId, bsQuantity) {
    const bsQty = Number(bsQuantity);
    if (bsQty < 1) {
      this.remove(bsId);
      return;
    }
    const bsExisting = this.bsItems.find(bsIt => String(bsIt.id) === String(bsId));
    if (bsExisting) {
      bsExisting.quantity = bsQty;
      this.bsSave();
    }
  }
  get() {
    return [...this.bsItems];
  }
  count() {
    return this.bsItems.reduce((bsSum, bsIt) => bsSum + Number(bsIt.quantity || 0), 0);
  }
  total() {
    return this.bsItems.reduce((bsSum, bsIt) => bsSum + (Number(bsIt.price || 0) * Number(bsIt.quantity || 0)), 0);
  }
  clear() {
    this.bsItems = [];
    this.bsSave();
  }
}
window.ShopCart = new BsCartEngine();

function bsFormatMoney(bsAmount) {
  return '$' + Number(bsAmount).toFixed(2);
}
function bsGetShippingRate() {
  const bsSelected = document.querySelector('input[name="shipping_method"]:checked');
  return bsSelected ? Number(bsSelected.value) || 0 : 15;
}
function bsRenderCartUI() {
  const bsCounterElements = document.querySelectorAll('[data-basket-count]');
  const bsTotalCount = window.ShopCart.count();
  bsCounterElements.forEach(bsEl => {
    bsEl.textContent = bsTotalCount;
  });
  const bsItemsContainer = document.querySelector('[data-cart-items]');
  const bsPriceTotalEl = document.querySelector('[data-cart-price-total]');
  const bsShippingTotalEl = document.querySelector('[data-cart-shipping-total]');
  const bsGrandTotalEl = document.querySelector('[data-cart-grand-total]');
  const bsEmptyStateEl = document.getElementById('bsCartEmpty');
  const bsFilledStateEl = document.getElementById('bsCartFilled');
  const bsItems = window.ShopCart.get();
  const bsSubtotal = window.ShopCart.total();
  const bsShipping = bsItems.length > 0 ? bsGetShippingRate() : 0;
  const bsGrand = bsSubtotal + bsShipping;
  if (bsPriceTotalEl) bsPriceTotalEl.textContent = bsFormatMoney(bsSubtotal);
  if (bsShippingTotalEl) bsShippingTotalEl.textContent = bsFormatMoney(bsShipping);
  if (bsGrandTotalEl) bsGrandTotalEl.textContent = bsFormatMoney(bsGrand);
  if (bsEmptyStateEl && bsFilledStateEl) {
    if (bsItems.length === 0) {
      bsEmptyStateEl.classList.remove('hidden');
      bsFilledStateEl.classList.add('hidden');
    } else {
      bsEmptyStateEl.classList.add('hidden');
      bsFilledStateEl.classList.remove('hidden');
    }
  }
  if (!bsItemsContainer) return;
  if (bsItems.length === 0) {
    bsItemsContainer.innerHTML = '';
    return;
  }
  let bsHtml = '';
  bsItems.forEach(bsItem => {
    const bsLineTotal = bsFormatMoney(Number(bsItem.price) * Number(bsItem.quantity));
    const bsSinglePrice = bsFormatMoney(bsItem.price);
    bsHtml += `<div class="bs-cart-item bg-white border border-[#E2E8F0] rounded-xl p-3 md:p-4 flex flex-col md:flex-row md:items-center justify-between gap-3 shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]" data-item-row="${bsItem.id}"><div class="flex items-center gap-3 md:gap-4 flex-1 min-w-0"><div class="w-16 h-16 md:w-20 md:h-20 bg-[#F1F5F9] rounded-lg border border-[#E2E8F0] overflow-hidden flex-shrink-0 flex items-center justify-center"><img src="${ShopCart.resolve(bsItem.image)}" alt="${bsItem.name}" class="w-full h-full object-cover" loading="lazy"></div><div class="min-w-0 flex-1"><h4 class="text-[#0F172A] font-semibold text-sm md:text-base truncate">${bsItem.name}</h4><div class="text-[#64748B] text-xs md:text-sm mt-0.5">Unit: <span class="font-medium text-[#1E293B]">${bsSinglePrice}</span></div></div></div><div class="flex items-center justify-between md:justify-end gap-3 md:gap-4 w-full md:w-auto pt-2 md:pt-0 border-t md:border-t-0 border-[#F1F5F9]"><div class="flex items-center border border-[#CBD5E1] rounded-lg bg-[#F8FAFC] overflow-hidden"><button type="button" class="w-8 h-8 flex items-center justify-center text-[#475569] hover:text-[#0F172A] hover:bg-[#E2E8F0] transition-colors focus:outline-none" data-qty-action="decrease" data-id="${bsItem.id}" aria-label="Decrease">&minus;</button><input type="number" min="1" value="${bsItem.quantity}" class="w-12 h-8 text-center text-xs md:text-sm font-semibold text-[#0F172A] bg-transparent border-0 focus:ring-0 focus:outline-none" data-qty-input="${bsItem.id}"><button type="button" class="w-8 h-8 flex items-center justify-center text-[#475569] hover:text-[#0F172A] hover:bg-[#E2E8F0] transition-colors focus:outline-none" data-qty-action="increase" data-id="${bsItem.id}" aria-label="Increase">&#43;</button></div><div class="text-right min-w-[70px]"><div class="text-sm md:text-base font-bold text-[#0F172A]">${bsLineTotal}</div></div><button type="button" class="p-2 text-[#94A3B8] hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-colors focus:outline-none" data-remove-id="${bsItem.id}" aria-label="Remove item"><svg class="w-5 h-5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button></div></div>`;
  });
  bsItemsContainer.innerHTML = bsHtml;
}
document.addEventListener('DOMContentLoaded', () => {
  bsRenderCartUI();
  ShopCart.bsDispatch();
});
document.addEventListener('cart_update', () => {
  bsRenderCartUI();
});

document.addEventListener('click', (bsEvent) => {
  const bsBtn = bsEvent.target.closest('.buyNowBtn');
  if (!bsBtn) return;
  bsEvent.preventDefault();
  const bsId = bsBtn.getAttribute('data-cart-id');
  if (!bsId) return;
  const bsTitle = bsBtn.getAttribute('data-product-title') || 'Product';
  const bsPrice = bsBtn.getAttribute('data-product-price') || '0';
  const bsThumb = bsBtn.getAttribute('data-thumb') || '';
  const bsUrl = bsBtn.getAttribute('data-url') || '';
  window.ShopCart.add({
    id: bsId,
    name: bsTitle,
    price: Number(bsPrice),
    image: bsThumb,
    url: bsUrl,
    quantity: 1
  });
  if (typeof bsOpenCartModal === 'function') {
    bsOpenCartModal();
  }
  if (typeof bsShowToastNotice === 'function') {
    bsShowToastNotice(`Added ${bsTitle} to cart`);
  }
});

function bsOpenCartModal() {
  const bsDialog = document.getElementById('cartDialog');
  if (!bsDialog) return;
  bsDialog.classList.remove('opacity-0', 'pointer-events-none');
  bsDialog.classList.add('opacity-100', 'pointer-events-auto');
  bsDialog.setAttribute('aria-hidden', 'false');
  document.body.style.overflow = 'hidden';
}
function bsCloseCartModal() {
  const bsDialog = document.getElementById('cartDialog');
  if (!bsDialog) return;
  bsDialog.classList.add('opacity-0', 'pointer-events-none');
  bsDialog.classList.remove('opacity-100', 'pointer-events-auto');
  bsDialog.setAttribute('aria-hidden', 'true');
  document.body.style.overflow = '';
}
function bsShowToastNotice(bsMessage) {
  const bsContainer = document.getElementById('bsToastContainer');
  if (!bsContainer) return;
  const bsToast = document.createElement('div');
  bsToast.className = 'bs-toast flex items-center gap-2 bg-[#1E293B] text-white text-xs md:text-sm px-4 py-3 rounded-lg shadow-[0_10px_15px_-3px_rgba(15,23,42,0.15)] border border-[#334155] transform transition-all duration-300 translate-y-4 opacity-0';
  bsToast.innerHTML = `<svg class="w-4 h-4 text-[#0284C7] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg><span class="truncate max-w-[220px]">${bsMessage}</span>`;
  bsContainer.appendChild(bsToast);
  requestAnimationFrame(() => {
    bsToast.classList.remove('translate-y-4', 'opacity-0');
    bsToast.classList.add('translate-y-0', 'opacity-100');
  });
  setTimeout(() => {
    bsToast.classList.add('opacity-0', 'translate-y-2');
    setTimeout(() => {
      if (bsToast.parentNode) bsToast.parentNode.removeChild(bsToast);
    }, 300);
  }, 2500);
}
document.addEventListener('click', (bsEvent) => {
  const bsOpenTrigger = bsEvent.target.closest('[data-basket-open]');
  if (bsOpenTrigger) {
    bsEvent.preventDefault();
    bsOpenCartModal();
    return;
  }
  const bsCloseTrigger = bsEvent.target.closest('[data-basket-close]');
  if (bsCloseTrigger) {
    bsEvent.preventDefault();
    bsCloseCartModal();
    return;
  }
  const bsRemoveBtn = bsEvent.target.closest('[data-remove-id]');
  if (bsRemoveBtn) {
    bsEvent.preventDefault();
    const bsId = bsRemoveBtn.getAttribute('data-remove-id');
    window.ShopCart.remove(bsId);
    return;
  }
  const bsQtyBtn = bsEvent.target.closest('[data-qty-action]');
  if (bsQtyBtn) {
    bsEvent.preventDefault();
    const bsId = bsQtyBtn.getAttribute('data-id');
    const bsAction = bsQtyBtn.getAttribute('data-qty-action');
    const bsExisting = window.ShopCart.get().find(bsIt => String(bsIt.id) === String(bsId));
    if (bsExisting) {
      const bsCurQty = Number(bsExisting.quantity) || 1;
      const bsNewQty = bsAction === 'increase' ? bsCurQty + 1 : bsCurQty - 1;
      window.ShopCart.update(bsId, bsNewQty);
    }
    return;
  }
  const bsShippingInput = bsEvent.target.closest('input[name="shipping_method"]');
  if (bsShippingInput) {
    bsRenderCartUI();
  }
});
document.addEventListener('change', (bsEvent) => {
  const bsInput = bsEvent.target.closest('[data-qty-input]');
  if (bsInput) {
    const bsId = bsInput.getAttribute('data-qty-input');
    const bsVal = parseInt(bsInput.value, 10);
    window.ShopCart.update(bsId, isNaN(bsVal) ? 1 : bsVal);
  }
});
document.addEventListener('keydown', (bsEvent) => {
  if (bsEvent.key === 'Escape') {
    bsCloseCartModal();
  }
});

document.addEventListener('submit', (bsEvent) => {
  const bsForm = bsEvent.target.closest('#bsCheckoutForm');
  if (!bsForm) return;
  const bsItems = window.ShopCart.get();
  if (bsItems.length === 0) {
    bsEvent.preventDefault();
    return;
  }
  const bsOrderId = String(Math.floor(100000 + Math.random() * 900000));
  const bsSubtotal = window.ShopCart.total();
  const bsShipping = bsGetShippingRate();
  const bsGrandTotal = bsSubtotal + bsShipping;
  const bsItemsField = document.getElementById('bsCartItemsField');
  const bsTotalField = document.getElementById('bsCartTotalField');
  const bsOrderField = document.getElementById('bsOrderIdField');
  if (bsItemsField) bsItemsField.value = JSON.stringify(bsItems);
  if (bsTotalField) bsTotalField.value = bsGrandTotal.toFixed(2);
  if (bsOrderField) bsOrderField.value = bsOrderId;
  window.ShopCart.clear();
});