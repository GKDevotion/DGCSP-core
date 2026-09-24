<?php
$countries = [
  'Singapore' => [
    ['city' => 'Singapore', 'address' => '531 Upper Cross Street, 02-11, Hong Lim Complex, Singapore - 050531']
  ],
  'Hong Kong' => [
    ['city' => 'Hong Kong', 'address' => 'Unit 1201, 12/F, Tower 1, Lippo Centre, 89 Queensway, Hong Kong']
  ],
  'Mauritius' => [
    ['city' => 'Mauritius', 'address' => 'Level 4, Alexander House, Silicon Avenue, Ebene Cybercity, Mauritius']
  ],
  'India' => [
    ['city' => 'Mumbai', 'address' => 'Unit No. NB 1502 & SB 1501\n15th Floor, Empire Tower, Cloud City\nCampus, Opp. Reliable Tech Park\nThane-Belapur Road\nAiroli, Navi Mumbai - 400 708'],
    ['city' => 'Bengaluru', 'address' => '71, Cunningham Road, Vasanth Nagar\nBengaluru, Karnataka 560051'],
    ['city' => 'Pune', 'address' => 'Sai Trinity, Central Wing\nS. No. 146/1/28, Pashan\nPune - 411 021'],
    ['city' => 'Delhi (NCR Region)', 'address' => 'Green Boulevard, Ground Floor\nTower B & C, Plot no - 89A, Sector 62\nNoida - 201301'],
    ['city' => 'Jamshedpur', 'address' => 'Pipeline Road, Sakchi\nJamshedpur - 831 001'],
    ['city' => 'Kolkata', 'address' => 'JC 30/A; Sector III, Salt Lake\nKolkata - 700 106'],
    ['city' => 'Vadodara', 'address' => '2nd Floor, Trisha Space, L&T Circle\nVeer Nagar Karelibagh,\nVadodara - 390018, Gujarat']
  ],
  'UAE' => [
    ['city' => 'Dubai', 'address' => 'Aspect Tower, Bay Avenue-2801, A zone\nBusiness Bay, Dubai, UAE']
  ],
  'United Kingdom' => [
    ['city' => 'London', 'address' => '4th Floor, 100 Fenchurch Street\nLondon EC3M 5JD, United Kingdom']
  ]
];

$selectedCountry = 'Singapore';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Offices and Addresses</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/location-2.css">
</head>
<body>
  <main class="locations-page">
    <section class="office-intro" aria-labelledby="page-title">
      <p class="eyebrow">Our global presence</p>
      <h1 id="page-title">Offices and Addresses</h1>
      <div class="registered-addresses">
        <article>
          <h2>Corporate Office</h2>
          <p>Unit No. NB 1502 &amp; SB 1501 15th Floor, Empire Tower, Cloud City Campus, Opp. Reliable Tech Park Thane-Belapur Road<br>Airoli, Navi Mumbai - 400 708</p>
        </article>
        <article>
          <h2>Registered Office</h2>
          <p>1st Floor, 10 Elphinstone Building Veer Nariman Road, Horniman Circle Fort, Mumbai, 400001, India</p>
        </article>
      </div>
    </section>

    <section class="directory" aria-label="Office directory">
      <div class="directory-toolbar">
        <div>
          <p class="eyebrow">Explore our locations</p>
          <h2>Find an office</h2>
        </div>
        <label class="country-select-wrap" for="country-select">
          <span>Country</span>
          <select id="country-select">
            <?php foreach ($countries as $country => $offices): ?>
              <option value="<?php echo htmlspecialchars($country); ?>"<?php echo $country === $selectedCountry ? ' selected' : ''; ?>><?php echo htmlspecialchars($country); ?></option>
            <?php endforeach; ?>
          </select>
        </label>
      </div>

      <div class="directory-layout">
        <nav class="office-categories" aria-label="Country navigation">
          <?php foreach ($countries as $country => $offices): ?>
            <button class="category-button<?php echo $country === $selectedCountry ? ' active' : ''; ?>" type="button" data-country-target="<?php echo htmlspecialchars($country); ?>">
              <?php echo htmlspecialchars($country); ?> <span aria-hidden="true">&#8594;</span>
            </button>
          <?php endforeach; ?>
        </nav>

        <div class="office-panel">
          <?php foreach ($countries as $country => $offices): ?>
            <div class="country-offices" data-country="<?php echo htmlspecialchars($country); ?>"<?php echo $country !== $selectedCountry ? ' hidden' : ''; ?>>
              <div class="panel-heading">
                <span class="panel-kicker">Selected country</span>
                <h3><?php echo htmlspecialchars($country); ?></h3>
              </div>
              <div class="office-grid">
                <?php foreach ($offices as $office): ?>
                  <article class="office-item">
                    <h4><?php echo htmlspecialchars($office['city']); ?></h4>
                    <p><?php echo nl2br(htmlspecialchars($office['address'])); ?></p>
                  </article>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var select = document.getElementById('country-select');
      var panels = document.querySelectorAll('.country-offices');
      var countryButtons = document.querySelectorAll('.category-button');

      function showCountry(country) {
        select.value = country;
        panels.forEach(function (panel) {
          panel.hidden = panel.dataset.country !== country;
        });
        countryButtons.forEach(function (button) {
          button.classList.toggle('active', button.dataset.countryTarget === country);
        });
      }

      select.addEventListener('change', function () {
        showCountry(select.value);
      });

      countryButtons.forEach(function (button) {
        button.addEventListener('click', function () {
          showCountry(button.dataset.countryTarget);
        });
      });
    });
  </script>
</body>
</html>