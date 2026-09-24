<?php
/**
 * branches.php
 * Static Branch Locations Page - Core PHP + Bootstrap 5
 * No database. No API. No framework. All data is hardcoded below.
 * PHP holds the branch fields in a local array and renders them with
 * one foreach loop. There is no database or external data source.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Branch Locations</title>

<!-- Google Fonts: Poppins -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<!-- Custom Styles -->
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="page-wrapper">
  <div class="container main-container">

    <!-- Page Heading -->
    <div class="page-heading mb-4">
      <h1 class="page-title">Branch Locations</h1>
      <p class="page-subtitle">Find a branch near you</p>
    </div>

    <!-- ================= COUNTRY FILTER BAR ================= -->
    <div class="city-nav-outer mb-4">
      <nav class="city-nav" aria-label="Country filter">
        <a href="#" class="city-nav-item active">Singapore</a>
        <a href="#" class="city-nav-item">Hong Kong</a>
        <a href="#" class="city-nav-item">Mauritius</a>
        <a href="#" class="city-nav-item" aria-current="true">India</a>
        <a href="#" class="city-nav-item">UAE</a>
        <a href="#" class="city-nav-item">United Kingdom</a>
      </nav>
    </div>

    <!-- ================= BRANCH CARD GRID ================= -->
    <div class="row g-4 branch-grid">

      <?php
        $locations = [
          [
            'name' => 'Navrangpura Branch',
            'city' => 'Ahmedabad',
            'country' => 'India',
            'address' => 'UL-2, Tulsi Complex, Opp. Cross Word, Nr. Mithakhali Six Road, Navrangpura, Ahmedabad',
            'phones' => '7567186333, 8511135887, 6355159699',
            'mapSrc' => 'https://www.google.com/maps?q=Tulsi+Complex+Navrangpura+Ahmedabad&output=embed',
            'mapLink' => 'https://www.google.com/maps/search/?api=1&query=Tulsi+Complex+Navrangpura+Ahmedabad'
          ],
          [
            'name' => 'Maninagar Branch',
            'city' => 'Vadodara',
            'country' => 'India',
            'address' => 'UL-4, Tirupati Avenue, Gordhanwadi Bus Stop, Above State Bank of India, Nr. Apsara Talkies, Kankaria Road, Ahmedabad - 28',
            'phones' => '8980781724',
            'mapSrc' => 'https://www.google.com/maps?q=Kankaria+Road+Maninagar+Ahmedabad&output=embed',
            'mapLink' => 'https://www.google.com/maps/search/?api=1&query=Kankaria+Road+Maninagar+Ahmedabad'
          ],
          [
            'name' => 'Drive-In Road Branch',
            'city' => 'Rajkot',
            'country' => 'India',
            'address' => '101, Rajvi Arcade, Opp. Swami Narayan Gurukul, Drive-in Road, Ahmedabad - 52',
            'phones' => '8141020933',
            'mapSrc' => 'https://www.google.com/maps?q=Drive+In+Road+Ahmedabad&output=embed',
            'mapLink' => 'https://www.google.com/maps/search/?api=1&query=Drive+In+Road+Ahmedabad'
          ],
          [
            'name' => 'Nikol Branch',
            'city' => 'Surat',
            'country' => 'India',
            'address' => '203, 2nd Floor, Sarovar Plaza Complex, Above Sales India, Nikol, Ahmedabad',
            'phones' => '',
            'mapSrc' => 'https://www.google.com/maps?q=Nikol+Ahmedabad&output=embed',
            'mapLink' => 'https://www.google.com/maps/search/?api=1&query=Nikol+Ahmedabad'
          ],
          [
            'name' => 'Chandkheda Branch',
            'city' => 'Ahmedabad',
            'country' => 'India',
            'address' => '1st Floor, Shop No. 118, Shree Sarju Arena, Opp. Kadi...',
            'phones' => '',
            'mapSrc' => 'https://www.google.com/maps?q=Chandkheda+Ahmedabad&output=embed',
            'mapLink' => 'https://www.google.com/maps/search/?api=1&query=Chandkheda+Ahmedabad'
          ],
          [
            'name' => 'UAE Branch',
            'city' => 'Dubai',
            'country' => 'UAE',
            'address' => 'Aspect Tower, Bay Avenue-2801, A zone, Business Bay, Dubai, UAE',
            'phones' => '',
            'mapSrc' => 'https://www.google.com/maps?q=Aspect+Tower+Bay+Avenue+2801+Business+Bay+Dubai+UAE&output=embed',
            'mapLink' => 'https://www.google.com/maps/search/?api=1&query=Aspect+Tower+Bay+Avenue+2801+Business+Bay+Dubai+UAE'
          ],
          
          [
            'name' => 'Singapore Branch',
            'city' => 'Singapore',
            'country' => 'Singapore',
            'address' => '531 Upper Cross Street, 02-11, Hong Lim Complex, Singapore - 050531',
            'phones' => '',
            'mapSrc' => 'https://www.google.com/maps?q=531+Upper+Cross+Street+02-11+Hong+Lim+Complex+Singapore+050531&output=embed',
            'mapLink' => 'https://www.google.com/maps/search/?api=1&query=531+Upper+Cross+Street+02-11+Hong+Lim+Complex+Singapore+050531'
          ]
        ];

        foreach ($locations as $location):
          $hasPhone = !empty($location['phones']);
      ?>
      <div class="col-lg-4 col-md-6 col-sm-12" data-country="<?php echo htmlspecialchars($location['country']); ?>">
        <div class="branch-card h-100">
          <div class="branch-card-header">
            <div class="branch-icon">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div class="branch-header-text">
              <h2 class="branch-name"><?php echo htmlspecialchars($location['name']); ?></h2>
              <p class="branch-city"><?php echo htmlspecialchars($location['city']); ?></p>
            </div>
          </div>

          <p class="branch-address"><?php echo htmlspecialchars($location['address']); ?></p>

          <div class="branch-divider"></div>

          <div class="branch-phone<?php echo $hasPhone ? '' : ' branch-phone-muted'; ?>">
            <i class="bi bi-telephone-fill"></i>
            <span><?php echo $hasPhone ? htmlspecialchars($location['phones']) : 'Phone number not available'; ?></span>
          </div>

          <div class="branch-map">
            <a href="<?php echo htmlspecialchars($location['mapLink']); ?>"
               class="open-maps-btn"
               target="_blank"
               rel="noopener noreferrer"
               aria-label="Open <?php echo htmlspecialchars($location['name']); ?> in Google Maps">
              Open in Maps <i class="bi bi-box-arrow-up-right"></i>
            </a>
            <iframe
              src="<?php echo htmlspecialchars($location['mapSrc']); ?>"
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
              title="Map for <?php echo htmlspecialchars($location['name']); ?>"
              aria-label="Map for <?php echo htmlspecialchars($location['name']); ?>">
            </iframe>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div> 

  </div> 
</div> 

<!-- Bootstrap 5 JS Bundle (needed for potential future components; no jQuery) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
