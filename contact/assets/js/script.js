/**
 * script.js
 * Filter the static branch cards by the selected country tab.
 */
document.addEventListener('DOMContentLoaded', function () {
  var countryLinks = document.querySelectorAll('.city-nav-item');
  var branchCards = document.querySelectorAll('.branch-grid > [data-country]');

  function showCountry(country) {
    branchCards.forEach(function (card) {
      card.hidden = card.getAttribute('data-country') !== country;
    });
  }

  countryLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      countryLinks.forEach(function (el) {
        el.classList.remove('active');
        el.removeAttribute('aria-current');
      });

      link.classList.add('active');
      link.setAttribute('aria-current', 'true');
      showCountry(link.textContent.trim());
    });
  });

  showCountry(document.querySelector('.city-nav-item.active').textContent.trim());
});
