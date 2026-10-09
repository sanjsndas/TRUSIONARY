<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, follow">
    <meta name="theme-color" content="#0284C7">
    <title>Subscription Confirmed - Trusionary</title>
    <meta name="description" content="Thank you for subscribing to the Trusionary newsletter. You are now set to receive exclusive updates, trend reports, and seasonal promotions.">
    <meta property="og:title" content="Subscription Confirmed - Trusionary">
    <meta property="og:description" content="Thank you for subscribing to the Trusionary newsletter. You are now set to receive exclusive updates, trend reports, and seasonal promotions.">
    <meta property="og:image" content="public/assets/pics/trusionary-brand-logo.webp">
    <meta property="og:type" content="website">
    <link rel="icon" href="public/assets/pics/trusionary-brand-logo.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inclusive+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="public/app.css" rel="stylesheet">
</head>

<body class="flex flex-col min-h-screen bg-[#F8FAFC] text-[#0F172A]">
<div id="cookieConsentServiceWrapper" class="cookieConsentServiceHidden" style="display: none;">
  <div id="cookieConsentServiceBackdrop" style="position: fixed; inset: 0; background-color: rgba(15, 23, 42, 0.6); backdrop-filter: blur(4px); z-index: 99998;"></div>
  <div id="cookieConsentServiceModal" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: calc(100% - 2rem); max-width: 540px; max-height: 90vh; overflow-y: auto; background-color: #FFFFFF; border: 1px solid #E2E8F0; border-radius: 0.75rem; box-shadow: 0 20px 25px -5px rgba(15, 23, 42, 0.15), 0 8px 10px -6px rgba(15, 23, 42, 0.08); z-index: 99999; padding: 1.5rem; font-family: 'Inclusive Sans', sans-serif; color: #0F172A;">
    <div style="display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 1rem;">
      <div>
        <h3 style="margin: 0 0 0.25rem 0; font-size: 1.25rem; font-weight: 700; color: #1E293B;">Cookie Preferences</h3>
        <p style="margin: 0; font-size: 0.875rem; color: #64748B;">We use cookies to enhance your shopping experience and optimize our store.</p>
      </div>
    </div>
    <p style="margin: 0 0 1rem 0; font-size: 0.875rem; color: #475569; line-height: 1.5;">
      You can customize your preferences or read our detailed <a href="cookie-policy.html" style="color: #0284C7; text-decoration: underline; font-weight: 500;">Cookie Policy</a>.
    </p>
    <div id="cookieConsentServiceSettingsPanel" style="display: none; margin-bottom: 1.25rem; padding: 1rem; background-color: #F8FAFC; border: 1px solid #E2E8F0; border-radius: 0.5rem;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem; padding-bottom: 0.75rem; border-bottom: 1px solid #E2E8F0;">
        <div>
          <div style="font-size: 0.875rem; font-weight: 600; color: #1E293B;">Essential Cookies</div>
          <div style="font-size: 0.75rem; color: #64748B;">Required for basic store navigation and security</div>
        </div>
        <input type="checkbox" id="cookieConsentServiceInputNecessary" checked disabled style="accent-color: #1E293B; width: 1.125rem; height: 1.125rem; cursor: not-allowed;">
      </div>
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem; padding-bottom: 0.75rem; border-bottom: 1px solid #E2E8F0;">
        <div>
          <div style="font-size: 0.875rem; font-weight: 600; color: #1E293B;">Analytics Cookies</div>
          <div style="font-size: 0.75rem; color: #64748B;">Help us improve product layout and browsing speeds</div>
        </div>
        <input type="checkbox" id="cookieConsentServiceInputAnalytics" style="accent-color: #1E293B; width: 1.125rem; height: 1.125rem; cursor: pointer;">
      </div>
      <div style="display: flex; justify-content: space-between; align-items: center;">
        <div>
          <div style="font-size: 0.875rem; font-weight: 600; color: #1E293B;">Marketing Cookies</div>
          <div style="font-size: 0.75rem; color: #64748B;">Provide tailored discounts and seasonal offers</div>
        </div>
        <input type="checkbox" id="cookieConsentServiceInputMarketing" style="accent-color: #1E293B; width: 1.125rem; height: 1.125rem; cursor: pointer;">
      </div>
    </div>
    <div style="display: flex; flex-wrap: wrap; gap: 0.5rem; justify-content: flex-end;">
      <button type="button" id="cookieConsentServiceBtnReject" style="padding: 0.5rem 1rem; font-size: 0.875rem; font-weight: 600; border-radius: 0.5rem; border: 1px solid #CBD5E1; background-color: #FFFFFF; color: #475569; cursor: pointer; transition: all 0.2s;">Reject</button>
      <button type="button" id="cookieConsentServiceBtnCustomize" style="padding: 0.5rem 1rem; font-size: 0.875rem; font-weight: 600; border-radius: 0.5rem; border: 1px solid #CBD5E1; background-color: #F8FAFC; color: #1E293B; cursor: pointer; transition: all 0.2s;">Customize</button>
      <button type="button" id="cookieConsentServiceBtnSave" style="display: none; padding: 0.5rem 1rem; font-size: 0.875rem; font-weight: 600; border-radius: 0.5rem; border: 1px solid #0369A1; background-color: #0284C7; color: #FFFFFF; cursor: pointer; transition: all 0.2s;">Save Preferences</button>
      <button type="button" id="cookieConsentServiceBtnAccept" style="padding: 0.5rem 1rem; font-size: 0.875rem; font-weight: 600; border-radius: 0.5rem; border: 1px solid #0F172A; background-color: #1E293B; color: #FFFFFF; cursor: pointer; transition: all 0.2s;">Accept All</button>
    </div>
  </div>
</div>
<script>
(function() {
  var cookieConsentServiceKey = 'cookieConsentService';
  function cookieConsentServiceGetCookie(name) {
    try {
      var matches = document.cookie.match(new RegExp('(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'));
      return matches ? decodeURIComponent(matches[1]) : null;
    } catch (e) {
      return null;
    }
  }
  function cookieConsentServiceSetCookie(name, value, days) {
    try {
      var expires = '';
      if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toUTCString();
      }
      document.cookie = name + '=' + encodeURIComponent(value) + expires + '; path=/; SameSite=Lax';
    } catch (e) {}
  }
  function cookieConsentServiceCheckConsent() {
    var storedData = null;
    try {
      if (window.localStorage) {
        storedData = window.localStorage.getItem(cookieConsentServiceKey);
      }
    } catch (e) {}
    if (!storedData) {
      storedData = cookieConsentServiceGetCookie(cookieConsentServiceKey);
    }
    if (storedData) {
      try {
        var parsed = JSON.parse(storedData);
        if (parsed && typeof parsed === 'object' && parsed.necessary === true) {
          return parsed;
        }
      } catch (e) {}
    }
    return null;
  }
  function cookieConsentServiceSaveConsent(consentObj) {
    consentObj.necessary = true;
    var serialized = JSON.stringify(consentObj);
    try {
      if (window.localStorage) {
        window.localStorage.setItem(cookieConsentServiceKey, serialized);
      }
    } catch (e) {}
    cookieConsentServiceSetCookie(cookieConsentServiceKey, serialized, 180);
    cookieConsentServiceHide();
  }
  function cookieConsentServiceHide() {
    var wrapper = document.getElementById('cookieConsentServiceWrapper');
    if (wrapper) {
      wrapper.style.display = 'none';
      if (wrapper.parentNode) {
        wrapper.parentNode.removeChild(wrapper);
      }
    }
    document.body.style.overflow = '';
  }
  function cookieConsentServiceShow() {
    var wrapper = document.getElementById('cookieConsentServiceWrapper');
    if (wrapper) {
      wrapper.style.display = 'block';
      document.body.style.overflow = 'hidden';
    }
  }
  function cookieConsentServiceInit() {
    var existingConsent = cookieConsentServiceCheckConsent();
    if (existingConsent) {
      cookieConsentServiceHide();
      return;
    }
    cookieConsentServiceShow();
    var btnAccept = document.getElementById('cookieConsentServiceBtnAccept');
    var btnReject = document.getElementById('cookieConsentServiceBtnReject');
    var btnCustomize = document.getElementById('cookieConsentServiceBtnCustomize');
    var btnSave = document.getElementById('cookieConsentServiceBtnSave');
    var panelSettings = document.getElementById('cookieConsentServiceSettingsPanel');
    var inputAnalytics = document.getElementById('cookieConsentServiceInputAnalytics');
    var inputMarketing = document.getElementById('cookieConsentServiceInputMarketing');
    if (btnAccept) {
      btnAccept.addEventListener('click', function() {
        cookieConsentServiceSaveConsent({
          necessary: true,
          analytics: true,
          marketing: true
        });
      });
    }
    if (btnReject) {
      btnReject.addEventListener('click', function() {
        cookieConsentServiceSaveConsent({
          necessary: true,
          analytics: false,
          marketing: false
        });
      });
    }
    if (btnCustomize) {
      btnCustomize.addEventListener('click', function() {
        if (panelSettings) {
          var isHidden = panelSettings.style.display === 'none';
          panelSettings.style.display = isHidden ? 'block' : 'none';
          if (btnSave) btnSave.style.display = isHidden ? 'inline-block' : 'none';
          btnCustomize.textContent = isHidden ? 'Hide Settings' : 'Customize';
        }
      });
    }
    if (btnSave) {
      btnSave.addEventListener('click', function() {
        cookieConsentServiceSaveConsent({
          necessary: true,
          analytics: inputAnalytics ? Boolean(inputAnalytics.checked) : false,
          marketing: inputMarketing ? Boolean(inputMarketing.checked) : false
        });
      });
    }
  }
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', cookieConsentServiceInit);
  } else {
    cookieConsentServiceInit();
  }
})();
</script>

<div id="cartDialog" class="fixed inset-0 z-50 flex items-center justify-center p-3 sm:p-4 md:p-6 opacity-0 pointer-events-none transition-opacity duration-300 ease-out" aria-hidden="true" role="dialog" aria-modal="true"><div class="fixed inset-0 bg-[#0F172A]/60 backdrop-blur-sm transition-opacity" data-basket-close></div><div class="relative bg-white w-full max-w-2xl rounded-2xl shadow-[0_20px_25px_-5px_rgba(15,23,42,0.1),_0_8px_10px_-6px_rgba(15,23,42,0.04)] border border-[#E2E8F0] max-h-[90vh] flex flex-col overflow-hidden z-10"><div class="sticky top-0 bg-white px-5 py-4 border-b border-[#E2E8F0] flex items-center justify-between z-20"><div class="flex items-center gap-2"><div class="w-8 h-8 rounded-lg bg-[#E0F2FE] flex items-center justify-center text-[#0284C7]"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg></div><h3 class="text-lg font-bold text-[#0F172A]">Shopping Cart</h3></div><button type="button" class="w-8 h-8 rounded-lg flex items-center justify-center text-[#64748B] hover:text-[#0F172A] hover:bg-[#F1F5F9] transition-colors focus:outline-none" data-basket-close aria-label="Close modal"><svg class="w-5 h-5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg></button></div><div class="p-5 overflow-y-auto flex-1 space-y-6"><div id="bsCartEmpty" class="hidden py-12 flex flex-col items-center justify-center text-center"><div class="w-16 h-16 rounded-full bg-[#F1F5F9] flex items-center justify-center text-[#94A3B8] mb-4"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg></div><p class="text-base font-semibold text-[#0F172A]">Your cart is empty</p><p class="text-sm text-[#64748B] mt-1 max-w-xs">Explore our products and find something you like.</p><a href="index.html" class="mt-5 inline-flex items-center justify-center px-5 py-2.5 bg-[#1E293B] text-white text-sm font-medium rounded-xl hover:bg-[#0F172A] transition-colors shadow-[0_2px_4px_rgba(15,23,42,0.06)]" data-basket-close>Start Shopping</a></div><div id="bsCartFilled" class="space-y-6"><div class="space-y-3" data-cart-items></div><form id="bsCheckoutForm" action="thank-you-order.php" method="POST" class="border-t border-[#E2E8F0] pt-6 space-y-5"><input type="hidden" name="cart_items" id="bsCartItemsField"><input type="hidden" name="cart_total" id="bsCartTotalField"><input type="hidden" name="order_id" id="bsOrderIdField"><div class="bg-[#F8FAFC] border border-[#E2E8F0] p-4 rounded-xl"><h4 class="text-xs font-bold uppercase tracking-wider text-[#475569] mb-3">Select Shipping</h4><div class="grid grid-cols-1 sm:grid-cols-3 gap-2.5"><label class="flex items-center justify-between p-3 bg-white border border-[#CBD5E1] rounded-lg cursor-pointer hover:border-[#0284C7] transition-colors"><span class="flex items-center gap-2"><input type="radio" name="shipping_method" value="15" checked class="text-[#0284C7] focus:ring-[#0284C7]"><span class="text-xs font-semibold text-[#0F172A]">USPS</span></span><span class="text-xs font-bold text-[#475569]">$15.00</span></label><label class="flex items-center justify-between p-3 bg-white border border-[#CBD5E1] rounded-lg cursor-pointer hover:border-[#0284C7] transition-colors"><span class="flex items-center gap-2"><input type="radio" name="shipping_method" value="35" class="text-[#0284C7] focus:ring-[#0284C7]"><span class="text-xs font-semibold text-[#0F172A]">UPS</span></span><span class="text-xs font-bold text-[#475569]">$35.00</span></label><label class="flex items-center justify-between p-3 bg-white border border-[#CBD5E1] rounded-lg cursor-pointer hover:border-[#0284C7] transition-colors"><span class="flex items-center gap-2"><input type="radio" name="shipping_method" value="40" class="text-[#0284C7] focus:ring-[#0284C7]"><span class="text-xs font-semibold text-[#0F172A]">FedEx</span></span><span class="text-xs font-bold text-[#475569]">$40.00</span></label></div></div><div><h4 class="text-sm font-bold text-[#0F172A] mb-3">Shipping Information</h4><div class="grid grid-cols-1 sm:grid-cols-2 gap-3"><input type="text" name="first_name" required placeholder="First Name" class="w-full px-3.5 py-2.5 text-sm bg-white border border-[#CBD5E1] rounded-lg text-[#0F172A] placeholder-[#94A3B8] focus:border-[#0284C7] focus:ring-1 focus:ring-[#0284C7] focus:outline-none"><input type="text" name="last_name" required placeholder="Last Name" class="w-full px-3.5 py-2.5 text-sm bg-white border border-[#CBD5E1] rounded-lg text-[#0F172A] placeholder-[#94A3B8] focus:border-[#0284C7] focus:ring-1 focus:ring-[#0284C7] focus:outline-none"><input type="email" name="email" required placeholder="Email Address" class="w-full px-3.5 py-2.5 text-sm bg-white border border-[#CBD5E1] rounded-lg text-[#0F172A] placeholder-[#94A3B8] focus:border-[#0284C7] focus:ring-1 focus:ring-[#0284C7] focus:outline-none"><input type="tel" name="phone" required placeholder="Phone (e.g. 555-123-4567)" class="w-full px-3.5 py-2.5 text-sm bg-white border border-[#CBD5E1] rounded-lg text-[#0F172A] placeholder-[#94A3B8] focus:border-[#0284C7] focus:ring-1 focus:ring-[#0284C7] focus:outline-none"><input type="text" name="address" required placeholder="Street Address" class="sm:col-span-2 w-full px-3.5 py-2.5 text-sm bg-white border border-[#CBD5E1] rounded-lg text-[#0F172A] placeholder-[#94A3B8] focus:border-[#0284C7] focus:ring-1 focus:ring-[#0284C7] focus:outline-none"><input type="text" name="city" required placeholder="City" class="w-full px-3.5 py-2.5 text-sm bg-white border border-[#CBD5E1] rounded-lg text-[#0F172A] placeholder-[#94A3B8] focus:border-[#0284C7] focus:ring-1 focus:ring-[#0284C7] focus:outline-none"><input type="text" name="postal_code" required placeholder="ZIP / Postal Code" class="w-full px-3.5 py-2.5 text-sm bg-white border border-[#CBD5E1] rounded-lg text-[#0F172A] placeholder-[#94A3B8] focus:border-[#0284C7] focus:ring-1 focus:ring-[#0284C7] focus:outline-none"></div></div><div class="bg-[#F8FAFC] border border-[#E2E8F0] p-4 rounded-xl space-y-2"><div class="flex justify-between text-xs text-[#64748B]"><span>Subtotal</span><span data-cart-price-total class="font-medium text-[#1E293B]">$0.00</span></div><div class="flex justify-between text-xs text-[#64748B]"><span>Shipping</span><span data-cart-shipping-total class="font-medium text-[#1E293B]">$15.00</span></div><div class="border-t border-[#E2E8F0] pt-2 flex justify-between items-center"><span class="text-sm font-bold text-[#0F172A]">Total</span><span data-cart-grand-total class="text-base md:text-lg font-black text-[#0284C7]">$0.00</span></div></div><div class="flex flex-col sm:flex-row items-center gap-3 pt-2"><button type="button" class="w-full sm:w-1/2 px-4 py-3 bg-[#F1F5F9] hover:bg-[#E2E8F0] text-[#475569] font-semibold text-sm rounded-xl transition-colors" data-basket-close>Continue Shopping</button><button type="submit" class="w-full sm:w-1/2 px-4 py-3 bg-[#0284C7] hover:bg-[#0369A1] text-white font-bold text-sm rounded-xl shadow-[0_2px_4px_rgba(15,23,42,0.06)] transition-colors flex items-center justify-center gap-2"><span>Place Order</span><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg></button></div></form></div></div></div></div><div id="bsToastContainer" class="fixed bottom-4 right-4 z-50 flex flex-col gap-2 pointer-events-none"></div>
<link rel='stylesheet' href='public/cart_design.css'>

    <header class="trusionary-header relative z-50 bg-[#FFFFFF] border-b border-[#E2E8F0] shadow-sm">
        <div class="max-w-[1320px] mx-auto px-4 md:px-8">
            <div class="flex items-center justify-between h-20 gap-4">
                <div class="flex items-center gap-3 flex-shrink-0">
                    <a href="index.html" class="flex items-center gap-3 group focus:outline-none focus:ring-2 focus:ring-[#0284C7] rounded-lg p-1">
                        <img src="public/assets/pics/trusionary-brand-logo.webp" alt="Trusionary Logo" class="w-10 h-10 object-contain max-w-[50px]" width="40" height="40" loading="lazy">
                        <span class="font-bold text-[18px] md:text-[22px] leading-tight text-[#0F172A] tracking-tight group-hover:text-[#0284C7] transition-colors">Trusionary</span>
                    </a>
                </div>

                <nav class="hidden md:flex items-center gap-8" aria-label="Main Navigation">
                    <a href="index.html" class="text-[15px] font-medium text-[#0F172A] hover:text-[#0284C7] transition-colors py-2">Home</a>
                    <a href="shop.html" class="text-[15px] font-medium text-[#475569] hover:text-[#0284C7] transition-colors py-2">Shop</a>
                    <a href="about-us.html" class="text-[15px] font-medium text-[#475569] hover:text-[#0284C7] transition-colors py-2">About Us</a>
                    <a href="contact.html" class="text-[15px] font-medium text-[#475569] hover:text-[#0284C7] transition-colors py-2">Contact Us</a>
                    <a href="faq.html" class="text-[15px] font-medium text-[#475569] hover:text-[#0284C7] transition-colors py-2">FAQ</a>
                </nav>

                <div class="flex items-center gap-3 md:gap-4 flex-shrink-0">
                    <button type="button" class="js-cart-trigger relative p-2.5 text-[#0F172A] hover:text-[#0284C7] hover:bg-[#F1F5F9] rounded-lg border border-[#E2E8F0] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0284C7]" data-basket-open aria-label="Open Cart">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <span class="absolute -top-1.5 -right-1.5 min-w-[20px] h-5 bg-[#0284C7] text-[#FFFFFF] text-[11px] font-bold rounded-full flex items-center justify-center px-1 shadow-sm" data-basket-count>0</span>
                    </button>

                    <a href="shop.html" class="hidden sm:inline-flex items-center justify-center px-4 py-2.5 bg-[#1E293B] hover:bg-[#0F172A] text-[#FFFFFF] text-[14px] font-semibold rounded-lg shadow-sm border border-[#0F172A] transition-colors">
                        Shop Now
                    </a>

                    <button type="button" class="js-mobile-menu-toggle md:hidden inline-flex items-center justify-center p-2.5 text-[#0F172A] hover:text-[#0284C7] hover:bg-[#F1F5F9] rounded-lg border border-[#E2E8F0] transition-colors focus:outline-none focus:ring-2 focus:ring-[#0284C7]" aria-expanded="false" aria-controls="mobile-navigation-menu" aria-label="Toggle Menu">
                        <svg class="w-6 h-6 js-icon-open" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg class="w-6 h-6 js-icon-close hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-navigation-menu" class="js-mobile-menu hidden md:hidden bg-[#FFFFFF] border-b border-[#E2E8F0] shadow-md">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="index.html" class="block px-3 py-2.5 rounded-lg text-[15px] font-medium text-[#0F172A] bg-[#F1F5F9]">Home</a>
                <a href="shop.html" class="block px-3 py-2.5 rounded-lg text-[15px] font-medium text-[#475569] hover:bg-[#F8FAFC] hover:text-[#0284C7] transition-colors">Shop</a>
                <a href="about-us.html" class="block px-3 py-2.5 rounded-lg text-[15px] font-medium text-[#475569] hover:bg-[#F8FAFC] hover:text-[#0284C7] transition-colors">About Us</a>
                <a href="contact.html" class="block px-3 py-2.5 rounded-lg text-[15px] font-medium text-[#475569] hover:bg-[#F8FAFC] hover:text-[#0284C7] transition-colors">Contact Us</a>
                <a href="faq.html" class="block px-3 py-2.5 rounded-lg text-[15px] font-medium text-[#475569] hover:bg-[#F8FAFC] hover:text-[#0284C7] transition-colors">FAQ</a>
                <div class="pt-4 sm:hidden">
                    <a href="shop.html" class="flex items-center justify-center w-full px-4 py-3 bg-[#1E293B] hover:bg-[#0F172A] text-[#FFFFFF] text-[14px] font-semibold rounded-lg shadow-sm border border-[#0F172A] transition-colors">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="w-full flex-1 flex items-center justify-center py-12 md:py-20 px-4 sm:px-6 lg:px-8">
        <section class="w-full max-w-[760px] mx-auto">
            <div class="bg-[#FFFFFF] border border-[#E2E8F0] rounded-2xl shadow-sm p-6 sm:p-10 md:p-12 text-center">
                <div class="inline-flex items-center justify-center w-16 h-16 md:w-20 md:h-20 rounded-full bg-[#E0F2FE] text-[#0284C7] mb-6 shadow-inner">
                    <svg class="w-8 h-8 md:w-10 md:h-10" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13L9 17L19 7"></path>
                    </svg>
                </div>

                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#F0FDF4] border border-[#BBF7D0] text-[#166534] text-[12px] md:text-[13px] font-semibold uppercase tracking-wider mb-4">
                    <span class="w-2 h-2 rounded-full bg-[#16A34A]"></span>
                    <span>Subscription Confirmed</span>
                </div>

                <h1 class="text-[18px] md:text-[34px] font-bold tracking-tight text-[#0F172A] leading-tight mb-4">
                    Welcome to the Trusionary Community!
                </h1>

                <p class="text-[14px] md:text-[16px] text-[#475569] leading-relaxed max-w-xl mx-auto mb-8">
                    Thank you for subscribing to our newsletter. We have successfully recorded your email address and sent a confirmation note to your inbox. You will now be among the first to receive updates on new apparel releases, exclusive seasonal discounts, and curated styling guides.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8 text-left">
                    <div class="p-4 rounded-xl bg-[#F8FAFC] border border-[#E2E8F0]">
                        <div class="flex items-center gap-2 text-[#0284C7] mb-1 font-semibold text-[13px] md:text-[14px]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13L9 17L19 7"></path>
                            </svg>
                            <span>Early Access</span>
                        </div>
                        <p class="text-[12px] md:text-[13px] text-[#64748B] leading-normal">Be the first to browse new seasonal apparel and limited editions.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-[#F8FAFC] border border-[#E2E8F0]">
                        <div class="flex items-center gap-2 text-[#0284C7] mb-1 font-semibold text-[13px] md:text-[14px]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13L9 17L19 7"></path>
                            </svg>
                            <span>Subscriber Deals</span>
                        </div>
                        <p class="text-[12px] md:text-[13px] text-[#64748B] leading-normal">Receive member-only coupon codes directly in your inbox.</p>
                    </div>
                    <div class="p-4 rounded-xl bg-[#F8FAFC] border border-[#E2E8F0]">
                        <div class="flex items-center gap-2 text-[#0284C7] mb-1 font-semibold text-[13px] md:text-[14px]">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13L9 17L19 7"></path>
                            </svg>
                            <span>No Spam Policy</span>
                        </div>
                        <p class="text-[12px] md:text-[13px] text-[#64748B] leading-normal">Only thoughtful, high-value newsletters. Unsubscribe whenever you wish.</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 pt-2 border-t border-[#E2E8F0]">
                    <a href="shop.html" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 bg-[#0284C7] hover:bg-[#0369A1] text-[#FFFFFF] text-[14px] md:text-[15px] font-semibold rounded-lg shadow-sm transition-colors">
                        Continue Shopping
                    </a>
                    <a href="index.html" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 bg-[#F1F5F9] hover:bg-[#E2E8F0] text-[#0F172A] text-[14px] md:text-[15px] font-semibold rounded-lg border border-[#CBD5E1] transition-colors">
                        Return to Homepage
                    </a>
                </div>
            </div>
        </section>
    </main>

    <footer class="trusionary-footer bg-[#FFFFFF] border-t border-[#E2E8F0] pt-12 pb-8 text-[#0F172A]">
        <div class="max-w-[1320px] mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div class="flex flex-col">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="public/assets/pics/trusionary-brand-logo.webp" alt="Trusionary Logo" class="w-10 h-10 object-contain rounded-md" width="40" height="40" loading="lazy">
                        <span class="text-[18px] md:text-[20px] font-bold text-[#1E293B] tracking-tight">Trusionary</span>
                    </div>
                    <p class="text-[14px] leading-relaxed text-[#475569] mb-4">Professional online clothing store offering a wide selection of premium apparel, dependable quality, and effortless checkout experiences.</p>
                    <div class="flex flex-col gap-2 text-[14px] text-[#475569]">
                        <div class="flex items-start gap-2">
                            <svg class="w-5 h-5 text-[#0284C7] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="leading-tight">68512 U.S. 101 Northbend Oregon 97459</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-[#0284C7] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <a href="tel:(541) 751-1800" class="hover:text-[#0284C7] transition-colors">(541) 751-1800</a>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-[#0284C7] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <a href="mailto:help@trusionary.com" class="hover:text-[#0284C7] transition-colors">help@trusionary.com</a>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-[#0284C7] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            <a href="https://wa.me/5417511800" class="hover:text-[#0284C7] transition-colors font-medium">WhatsApp Support</a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <h3 class="text-[14px] md:text-[16px] font-semibold text-[#1E293B] uppercase tracking-wider mb-4 border-b border-[#E2E8F0] pb-2">Navigation</h3>
                    <ul class="flex flex-col gap-2.5 text-[14px] text-[#475569]">
                        <li><a href="index.html" class="hover:text-[#0284C7] transition-colors">Home</a></li>
                        <li><a href="shop.html" class="hover:text-[#0284C7] transition-colors">Shop Catalog</a></li>
                        <li><a href="about-us.html" class="hover:text-[#0284C7] transition-colors">About Us</a></li>
                        <li><a href="contact.html" class="hover:text-[#0284C7] transition-colors">Contact Us</a></li>
                        <li><a href="faq.html" class="hover:text-[#0284C7] transition-colors">Frequently Asked Questions</a></li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h3 class="text-[14px] md:text-[16px] font-semibold text-[#1E293B] uppercase tracking-wider mb-4 border-b border-[#E2E8F0] pb-2">Customer Care</h3>
                    <ul class="flex flex-col gap-2.5 text-[14px] text-[#475569]">
                        <li><a href="delivery-information.html" class="hover:text-[#0284C7] transition-colors">Delivery Information</a></li>
                        <li><a href="refund-policy.html" class="hover:text-[#0284C7] transition-colors">Refund & Returns</a></li>
                        <li><a href="privacy-policy.html" class="hover:text-[#0284C7] transition-colors">Privacy Policy</a></li>
                        <li><a href="terms-of-use.html" class="hover:text-[#0284C7] transition-colors">Terms of Use</a></li>
                        <li><a href="cookie-policy.html" class="hover:text-[#0284C7] transition-colors">Cookie Policy</a></li>
                        <li><a href="disclaimer.html" class="hover:text-[#0284C7] transition-colors">Disclaimer</a></li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h3 class="text-[14px] md:text-[16px] font-semibold text-[#1E293B] uppercase tracking-wider mb-4 border-b border-[#E2E8F0] pb-2">Store Promises</h3>
                    <div class="flex flex-col gap-3 mb-6">
                        <div class="flex items-center gap-2 text-[13px] text-[#475569]">
                            <span class="w-2 h-2 rounded-full bg-[#0284C7]"></span>
                            <span>High quality guaranteed</span>
                        </div>
                        <div class="flex items-center gap-2 text-[13px] text-[#475569]">
                            <span class="w-2 h-2 rounded-full bg-[#0284C7]"></span>
                            <span>Secure checkout system</span>
                        </div>
                        <div class="flex items-center gap-2 text-[13px] text-[#475569]">
                            <span class="w-2 h-2 rounded-full bg-[#0284C7]"></span>
                            <span>Fast reliable shipping</span>
                        </div>
                        <div class="flex items-center gap-2 text-[13px] text-[#475569]">
                            <span class="w-2 h-2 rounded-full bg-[#0284C7]"></span>
                            <span>Professional customer support</span>
                        </div>
                    </div>
                    <div class="bg-[#F8FAFC] border border-[#E2E8F0] rounded-lg p-3">
                        <span class="block text-[12px] font-semibold text-[#1E293B] mb-2">Accepted Payment Methods</span>
                        <div class="flex items-center gap-3">
                            <div class="bg-[#FFFFFF] border border-[#CBD5E1] rounded px-2.5 py-1 flex items-center justify-center shadow-sm" title="Visa">
                                <svg class="w-9 h-5" viewBox="0 0 36 20" fill="none">
                                    <path d="M14.5 16L17 4H19.5L17 16H14.5Z" fill="#1A1F71"></path>
                                    <path d="M26.5 4.3C25.9 4.1 25.1 4 24.1 4C21.4 4 19.6 5.4 19.6 7.4C19.6 8.9 20.9 9.7 21.9 10.2C22.9 10.7 23.3 11 23.3 11.5C23.3 12.2 22.4 12.5 21.6 12.5C20.6 12.5 20 12.3 19.2 11.9L18.8 11.7L18.4 14.1C19.1 14.4 20.3 14.7 21.5 14.7C24.3 14.7 26.1 13.3 26.1 11.2C26.1 9.9 25.2 8.9 23.5 8.1C22.5 7.6 21.9 7.3 21.9 6.7C21.9 6.2 22.5 5.8 23.4 5.8C24.2 5.8 24.8 6 25.4 6.3L25.7 6.4L26.5 4.3Z" fill="#1A1F71"></path>
                                    <path d="M30.4 4H28.4C27.8 4 27.3 4.2 27.1 4.7L23.2 14.3L25.8 14.3C25.8 14.3 26.2 13.1 26.4 12.6C26.6 12.6 28.7 12.6 29 12.6C29.1 12.9 29.3 14.3 29.3 14.3H31.6L29.6 4.7C29.5 4.2 29 4 28.4 4M27 10.7C27.2 10.1 27.9 8.2 27.9 8.2C27.9 8.2 28.1 7.7 28.2 7.3L28.4 8.1C28.4 8.1 28.9 10.2 29 10.7H27Z" fill="#1A1F71"></path>
                                    <path d="M12.6 4H10.1C9.5 4 9 4.3 8.8 4.9L4.8 14.3H7.4L7.9 12.8H11.1C11.1 13.2 11.3 14.3 11.3 14.3H13.6L12.6 4ZM8.6 10.9L10 6.8L10.8 10.9H8.6Z" fill="#F79E1B"></path>
                                </svg>
                            </div>
                            <div class="bg-[#FFFFFF] border border-[#CBD5E1] rounded px-2.5 py-1 flex items-center justify-center shadow-sm" title="Mastercard">
                                <svg class="w-9 h-5" viewBox="0 0 36 20" fill="none">
                                    <circle cx="14" cy="10" r="7" fill="#EB001B" fill-opacity="0.9"></circle>
                                    <circle cx="22" cy="10" r="7" fill="#F79E1B" fill-opacity="0.9"></circle>
                                    <path d="M18 5.3A7 7 0 0 0 14 10A7 7 0 0 0 18 14.7A7 7 0 0 0 22 10A7 7 0 0 0 18 5.3Z" fill="#FF5F00"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-[#E2E8F0] pt-6 flex items-center justify-center text-[13px] text-[#64748B]">
                <p class="text-center">© 2026 Trusionary. All rights reserved.</p>
            </div>
        </div>
    </footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var toggleBtn = document.querySelector('.js-mobile-menu-toggle');
    var mobileMenu = document.querySelector('.js-mobile-menu');
    var iconOpen = document.querySelector('.js-icon-open');
    var iconClose = document.querySelector('.js-icon-close');

    if (toggleBtn && mobileMenu && iconOpen && iconClose) {
        toggleBtn.addEventListener('click', function() {
            var isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
            toggleBtn.setAttribute('aria-expanded', String(!isExpanded));

            if (!isExpanded) {
                mobileMenu.classList.add('is-open');
                mobileMenu.classList.remove('hidden');
                iconOpen.classList.add('hidden');
                iconClose.classList.remove('hidden');
            } else {
                mobileMenu.classList.remove('is-open');
                mobileMenu.classList.add('hidden');
                iconOpen.classList.remove('hidden');
                iconClose.classList.add('hidden');
            }
        });
    }
});
</script>

<script>
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
</script>
<script src="public/site-fixes.js"></script>
</body>

</html>
