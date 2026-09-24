<?php
$locations = [
  ['country' => 'Singapore', 'city' => 'Singapore', 'address' => '531 Upper Cross Street, 02-11, Hong Lim Complex, Singapore - 050531', 'lat' => 1.2847, 'lng' => 103.8443],
  ['country' => 'Hong Kong', 'city' => 'Hong Kong', 'address' => 'Unit 1201, 12/F, Tower 1, Lippo Centre, 89 Queensway, Hong Kong', 'lat' => 22.2783, 'lng' => 114.1658],
  ['country' => 'Mauritius', 'city' => 'Mauritius', 'address' => 'Level 4, Alexander House, Silicon Avenue, Ebene Cybercity, Mauritius', 'lat' => -20.2440, 'lng' => 57.4989],
  ['country' => 'India', 'city' => 'Mumbai', 'address' => "Unit No. NB 1502 & SB 1501\n15th Floor, Empire Tower, Cloud City\nAiroli, Navi Mumbai - 400 708", 'lat' => 19.1157, 'lng' => 72.9986],
  ['country' => 'India', 'city' => 'Bengaluru', 'address' => "71, Cunningham Road, Vasanth Nagar\nBengaluru, Karnataka 560051", 'lat' => 12.9874, 'lng' => 77.5946],
  ['country' => 'India', 'city' => 'Pune', 'address' => "Sai Trinity, Central Wing\nS. No. 146/1/28, Pashan\nPune - 411 021", 'lat' => 18.5465, 'lng' => 73.7974],
  ['country' => 'India', 'city' => 'Delhi (NCR Region)', 'address' => "Green Boulevard, Ground Floor\nTower B & C, Sector 62\nNoida - 201301", 'lat' => 28.6273, 'lng' => 77.3760],
  ['country' => 'India', 'city' => 'Jamshedpur', 'address' => "Pipeline Road, Sakchi\nJamshedpur - 831 001", 'lat' => 22.8046, 'lng' => 86.2029],
  ['country' => 'India', 'city' => 'Kolkata', 'address' => "JC 30/A; Sector III, Salt Lake\nKolkata - 700 106", 'lat' => 22.5726, 'lng' => 88.3639],
  ['country' => 'India', 'city' => 'Vadodara', 'address' => "2nd Floor, Trisha Space, L&T Circle\nVadodara - 390018, Gujarat", 'lat' => 22.3072, 'lng' => 73.1812],
  ['country' => 'UAE', 'city' => 'Dubai', 'address' => "Aspect Tower, Bay Avenue-2801, A zone\nBusiness Bay, Dubai, UAE", 'lat' => 25.1852, 'lng' => 55.2625],
  ['country' => 'United Kingdom', 'city' => 'London', 'address' => "4th Floor, 100 Fenchurch Street\nLondon EC3M 5JD, United Kingdom", 'lat' => 51.5128, 'lng' => -0.0817]
];
$countries = array_values(array_unique(array_column($locations, 'country')));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Locations | Offices and Addresses</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
  <link rel="stylesheet" href="assets/css/location-3.css">
</head>
<body>
  <main class="location-page">
    <section class="map-stage" aria-label="Interactive office locations">
      <div id="office-map"></div>
      <header class="map-header">
        <div><p class="eyebrow">Our global presence</p><h1>Find us around the world</h1></div>
        <div class="map-total"><strong><?php echo count($locations); ?></strong><span>office locations</span></div>
      </header>
      <div class="country-filters" role="tablist" aria-label="Filter offices by country">
        <?php foreach ($countries as $country): ?>
          <button class="country-filter<?php echo $country === $countries[0] ? ' active' : ''; ?>" type="button" data-country="<?php echo htmlspecialchars($country); ?>"><?php echo htmlspecialchars($country); ?></button>
        <?php endforeach; ?>
      </div>
      <div class="map-caption"><span class="pulse-dot"></span><span id="map-status">Select an office to focus the map</span></div>
      <div class="map-selected-card" id="map-selected-card">
        <p class="eyebrow">Currently viewing</p>
        <h2 id="selected-city">Singapore</h2>
        <p id="selected-address">531 Upper Cross Street, 02-11, Hong Lim Complex, Singapore - 050531</p>
      </div>
      <div class="location-tray" aria-label="Office locations">
        <?php foreach ($locations as $index => $location): ?>
          <button class="location-card<?php echo $index === 0 ? ' selected' : ''; ?>" type="button" data-location-index="<?php echo $index; ?>" data-country="<?php echo htmlspecialchars($location['country']); ?>">
            <span class="card-marker" aria-hidden="true">0<?php echo $index + 1; ?></span>
            <span class="card-copy"><strong><?php echo htmlspecialchars($location['city']); ?></strong><small><?php echo htmlspecialchars($location['country']); ?></small><em><?php echo htmlspecialchars(str_replace("\n", ', ', $location['address'])); ?></em></span>
            <span class="card-arrow" aria-hidden="true">&#8599;</span>
          </button>
        <?php endforeach; ?>
      </div>
    </section>
  </main>

  <script>window.officeLocations = <?php echo json_encode($locations, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT); ?>;</script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script src="assets/js/location-3.js"></script>
</body>
</html>