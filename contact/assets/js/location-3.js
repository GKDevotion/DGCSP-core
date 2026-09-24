document.addEventListener('DOMContentLoaded', function () {
  var locations = window.officeLocations || [];
  var map = L.map('office-map', { zoomControl: false, scrollWheelZoom: true }).setView([18, 35], 2);
  var markers = [];
  var cards = document.querySelectorAll('.location-card');
  var filters = document.querySelectorAll('.country-filter');
  var selectedCity = document.getElementById('selected-city');
  var selectedAddress = document.getElementById('selected-address');
  var mapStatus = document.getElementById('map-status');

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors',
    maxZoom: 19
  }).addTo(map);
  L.control.zoom({ position: 'bottomright' }).addTo(map);

  var goldIcon = L.divIcon({ className: 'location-pin', html: '<span></span>', iconSize: [24, 24], iconAnchor: [12, 12], popupAnchor: [0, -12] });

  locations.forEach(function (location, index) {
    var marker = L.marker([location.lat, location.lng], { icon: goldIcon }).addTo(map);
    marker.bindPopup('<div class="popup-title">' + location.city + '</div><p class="popup-address">' + location.address.replace(/\n/g, '<br>') + '</p>', {
      minWidth: 264,
      maxWidth: 300,
      closeButton: true,
      autoPanPadding: [24, 24]
    });
    marker.on('click', function () { focusLocation(index, true); });
    markers.push(marker);
  });

  function focusLocation(index, openPopup) {
    var location = locations[index];
    if (!location) return;
    cards.forEach(function (card) { card.classList.toggle('selected', Number(card.dataset.locationIndex) === index); });
    var selectedCard = document.querySelector('[data-location-index="' + index + '"]');
    if (selectedCard && !selectedCard.classList.contains('is-hidden')) selectedCard.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'nearest' });
    filters.forEach(function (filter) { filter.classList.toggle('active', filter.dataset.country === location.country); });
    selectedCity.textContent = location.city;
    selectedAddress.textContent = location.address;
    mapStatus.textContent = 'Focused on ' + location.city;
    map.flyTo([location.lat, location.lng], 13, { duration: 1.35, easeLinearity: .25 });
    if (openPopup) setTimeout(function () { markers[index].openPopup(); }, 500);
  }

  cards.forEach(function (card) { card.addEventListener('click', function () { focusLocation(Number(card.dataset.locationIndex), true); }); });
  filters.forEach(function (filter) {
    filter.addEventListener('click', function () {
      var country = filter.dataset.country;
      cards.forEach(function (card) {
        var shouldHide = card.dataset.country !== country;
        card.hidden = shouldHide;
        card.classList.toggle('is-hidden', shouldHide);
      });
      var firstVisible = Array.from(cards).find(function (card) { return !card.classList.contains('is-hidden'); });
      if (firstVisible) focusLocation(Number(firstVisible.dataset.locationIndex), true);
    });
  });
  filters[0].click();
});