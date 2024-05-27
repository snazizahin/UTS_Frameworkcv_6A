
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <h1 class="logo me-auto me-lg-0"><a href="/">아지자</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a class="active" href="about">About</a></li>
          <li><a href="resume">Resume</a></li>
          <li><a href="portfolio">Portfolio</a></li>
          <li><a href="contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="https://x.com/skyhizt" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.instagram.com/azizahhin?igsh=MWVhMjVyN2diODV6cg%3D%3D&utm_source=qr" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/in/siti-nurazizah-98274921b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>

  </header><!-- End Header -->

  <main id="main">
    
    <!-- ======= About Section ======= -->
    <?php foreach ($selfdata as $s) :?>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?= $s['nama']; ?></h2>
          <p>Saya mahasiswa aktif semester 6 di jurusan Teknik Informatika, 
            Universitas Muhammadiyah Sukabumi. Berpengalaman kerja praktik di SDN Rawasalak dengan projek aplikasi web perpustakaan. 
            Memiliki kemampuan dalam melakukan kegiatan administrasi, pencatatan dan pengelolaan keuangan, 
            serta mahir dalam menggunakan Microsoft Office, Canva, dan Figma. 
            Kemampuan ini diperoleh dari pengalaman organisasi yang pernah dijalani di kampus. 
            Saya adalah individu yang analitis, disiplin, jujur, bertanggung jawab dan memiliki semangat untuk terus belajar dan berkembang dalam bidang teknologi informasi. 
            Memiliki minat karir dalam bidang terkait teknologi informasi terutama desain dan editing, manajemen, keuangan, serta terbuka untuk kesempatan karir yang lain.</p>
        </div>

        <div class="row">
          <div class="col-lg-3">
            <img src="assets/img/<?= $s['foto']; ?>" class="img-fluid" alt="" width="200">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Illustrator &amp; Designer Grafis</h3>
            <p class="fst-italic"> <?= $s['nama']; ?> </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> <?= $s['birthday']; ?> </li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong> <?= $s['phone']; ?> </li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> <?= $s['city']; ?> </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> <?= $s['age']; ?> </li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> <?= $s['degree']; ?> </li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Email:</strong> <?= $s['email']; ?> </li>
                </ul>
              </div>
            </div>
            <p>
              Pada deskripsi diatas saya tulis seorang Illustrator dan Designer Grafis, karena hal tersebut sesuai dengan minat saya dan impian saya untuk kedepannya. 
              Website portfolio ini dibuat untuk memenuhi tugas Ujian Tengah Semester Genap mata kuliah Web Framework.
            </p>
          </div>
        </div>
        
      </div>
    </section><!-- End About Section -->
    <?php endforeach ?>

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">
            <div class="skills-item">
              <div class="skills-image">
                <img src="assets/img/skills/figma.png" alt="Figma">
              </div>
              <div class="progress">
                <span class="skill">Figma</span>
              </div>
            </div>
            <div class="skills-item">
              <div class="skills-image">
                <img src="assets/img/skills/canva.png" alt="Canva">
              </div>
              <div class="progress">
                <span class="skill">Canva</span>
              </div>
            </div>
            <div class="skills-item">
              <div class="skills-image">
                <img src="assets/img/skills/capcut.png" alt="Capcut">
              </div>
              <div class="progress">
                <span class="skill">Capcut</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="skills-item">
              <div class="skills-image">
                <img src="assets/img/skills/office.png" alt="MicrosoftOffice">
              </div>
              <div class="progress">
                <span class="skill">Microsoft Office</span>
              </div>
            </div>
            <div class="skills-item">
              <div class="skills-image">
                <img src="assets/img/skills/korea.png" alt="BahasaKorea">
              </div>
              <div class="progress">
                <span class="skill">Bahasa Korea (Beginner)</span>
              </div>
            </div>
            <div class="skills-item">
              <div class="skills-image">
                <img src="assets/img/skills/inggris.png" alt="BahasaInggris">
              </div>
              <div class="progress">
                <span class="skill">Bahasa Inggris (Beginner)</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Azizah</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>