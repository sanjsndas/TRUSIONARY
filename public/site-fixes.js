(function () {
  'use strict';

  function initMobileNavigation() {
    document.addEventListener('click', function (event) {
      var toggle = event.target.closest('.js-mobile-menu-toggle');
      if (!toggle) return;

      var menuId = toggle.getAttribute('aria-controls');
      var menu = menuId ? document.getElementById(menuId) : document.querySelector('.js-mobile-menu');
      if (!menu) return;

      event.preventDefault();
      event.stopImmediatePropagation();

      var willOpen = menu.classList.contains('hidden') || !menu.classList.contains('is-open');
      menu.classList.toggle('hidden', !willOpen);
      menu.classList.toggle('is-open', willOpen);
      toggle.setAttribute('aria-expanded', willOpen ? 'true' : 'false');

      var openIcon = toggle.querySelector('.js-icon-open');
      var closeIcon = toggle.querySelector('.js-icon-close');
      if (openIcon) openIcon.classList.toggle('hidden', willOpen);
      if (closeIcon) closeIcon.classList.toggle('hidden', !willOpen);
    }, true);

    document.addEventListener('click', function (event) {
      var link = event.target.closest('.js-mobile-menu a');
      if (!link) return;
      var menu = link.closest('.js-mobile-menu');
      var toggle = document.querySelector('.js-mobile-menu-toggle[aria-controls="' + menu.id + '"]');
      menu.classList.add('hidden');
      menu.classList.remove('is-open');
      if (toggle) toggle.setAttribute('aria-expanded', 'false');
    });

    document.addEventListener('keydown', function (event) {
      if (event.key !== 'Escape') return;
      document.querySelectorAll('.js-mobile-menu.is-open').forEach(function (menu) {
        menu.classList.add('hidden');
        menu.classList.remove('is-open');
      });
      document.querySelectorAll('.js-mobile-menu-toggle').forEach(function (toggle) {
        toggle.setAttribute('aria-expanded', 'false');
      });
    });
  }

  function initCatalog() {
    var grid = document.querySelector('.js-catalog-container');
    if (!grid) return;

    var cards = Array.from(grid.querySelectorAll('.js-product-card'));
    var filters = Array.from(document.querySelectorAll('.js-filter-btn'));
    var search = document.querySelector('.js-catalog-search');
    var sort = document.querySelector('.js-catalog-sort');
    var empty = document.querySelector('.js-empty-msg');
    var activeCategory = 'all';

    function setActiveFilter(selected) {
      filters.forEach(function (button) {
        var isActive = button === selected;
        button.classList.toggle('active', isActive);
        button.setAttribute('aria-pressed', isActive ? 'true' : 'false');
      });
    }

    function renderCatalog() {
      var query = search ? search.value.trim().toLowerCase() : '';
      var visible = 0;

      cards.forEach(function (card) {
        var category = card.dataset.category || '';
        var searchable = ((card.dataset.name || '') + ' ' + card.textContent).toLowerCase();
        var matchesCategory = activeCategory === 'all' || category === activeCategory;
        var matchesSearch = !query || searchable.indexOf(query) !== -1;
        var show = matchesCategory && matchesSearch;
        card.hidden = !show;
        card.classList.toggle('hidden', !show);
        if (show) visible += 1;
      });

      if (empty) empty.classList.toggle('hidden', visible !== 0);
    }

    function sortCatalog() {
      var mode = sort ? sort.value : 'featured';
      var ordered = cards.slice();
      if (mode === 'price-low') {
        ordered.sort(function (a, b) { return Number(a.dataset.price) - Number(b.dataset.price); });
      } else if (mode === 'price-high') {
        ordered.sort(function (a, b) { return Number(b.dataset.price) - Number(a.dataset.price); });
      } else if (mode === 'name-asc') {
        ordered.sort(function (a, b) { return (a.dataset.name || '').localeCompare(b.dataset.name || ''); });
      }
      ordered.forEach(function (card) { grid.appendChild(card); });
      renderCatalog();
    }

    filters.forEach(function (button) {
      button.addEventListener('click', function () {
        activeCategory = button.dataset.category || 'all';
        setActiveFilter(button);
        renderCatalog();
      });
    });

    if (search) search.addEventListener('input', renderCatalog);
    if (sort) sort.addEventListener('change', sortCatalog);
    setActiveFilter(filters.find(function (button) { return button.classList.contains('active'); }) || filters[0]);
    sortCatalog();
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () {
      initMobileNavigation();
      initCatalog();
    });
  } else {
    initMobileNavigation();
    initCatalog();
  }
})();
