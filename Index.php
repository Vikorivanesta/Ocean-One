<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Ocean One</title>
    <?php include 'conn.php' ?>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark sticky-top shadow bg-royalBlue">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="img/Ocean_logo2.png" alt="Ocean Logo" width="40"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="#">Actions</a>
              <a class="nav-link" href="#">Resources</a>
              <a class="nav-link" href="#">Projects</a>
              <a class="nav-link" href="#">Explore</a>
            </div>
          </div>
        </div>
    </nav>

    <!-- Section 1 -->
    <section class="bd-masthead mb-3 pt-5 vh-100 align-items-center" id="content">
      <div class="container-md bd-gutter">
        <div class="col-md-8 mx-auto pt-3 text-center">
          <img src="Img/Ocean_logo2.png" width="200" height="200" alt="Bootstrap" class="d-none d-sm-block mx-auto mb-3">
          <h1 class="mb-3 fw-semibold lh-1"><?php echo $text["main_heading"] ?></h1>
          <p class="lead mb-4">
          <?php echo $text["main_subtitle"] ?>
          </p>
          <div class="d-flex flex-column flex-lg-row align-items-md-stretch justify-content-md-center gap-3 mb-4">
            <a href="#" class="btn btn-lg bd-btn-lg btn-bd-primary rounded-5 fw-semibold px-lg-5">
              TAKE ACTION
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2 -->
    <section class="container-md py-md-5 my-5 text-royalBlue">
      <div class="col-lg-4 mb-5">
        <h2 class="display-5 fw-semibold mb-3 lh-sm">OFFSET YOUR PLASTIC FOOTPRINT</h2>
      </div>
      <div class="row gx-md-5">
        <div class="col-lg-4">
          <h4 class="fw-semibold mb-3">ALIGN</h4>
          <p>
          <?php echo $text["align_text"] ?>
          </p>
          <p class="mb-md-0">
            <a href="#">
              <button class="btn btn-primary btn-sect2 rounded-5 fw-semibold py-2 mb-3">LEARN MORE</button>
            </a>
          </p>
        </div>
        <div class="col-lg-4 position-relative">
          <h4 class="fw-semibold mb-3">KICKSTART</h4>
          <p><?php echo $text["kickstart_text"] ?></p>
          <p class="mb-md-0 position-bottom">
            <a href="#">
              <button class="btn btn-primary btn-sect2 rounded-5 fw-semibold py-2 mb-3">START ACTION</button>
            </a>
          </p>
        </div>
        <div class="col-lg-4 position-relative">
          <h4 class="fw-semibold mb-3">AMPLIFY</h4>
          <p>Is your actions already making strides in its commitment to sustainability? Measure your action success using IMPACT</p>
          <p class="mb-md-0 position-bottom">
            <a href="#">
              <button class="btn btn-primary btn-sect2 rounded-5 fw-semibold py-2 mb-3">SEE HOW</button>
            </a>
          </p>
        </div>
      </div>
    </section>

    <!-- Section 3 -->
    <section class="section3 pm-md-5 mb-5 text-center" style="color: white;">
      <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(229, 229, 229, 1)" offset="0%"></stop><stop stop-color="rgba(229, 229, 229, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,70L48,58.3C96,47,192,23,288,25C384,27,480,53,576,66.7C672,80,768,80,864,66.7C960,53,1056,27,1152,18.3C1248,10,1344,20,1440,25C1536,30,1632,30,1728,25C1824,20,1920,10,2016,13.3C2112,17,2208,33,2304,46.7C2400,60,2496,70,2592,61.7C2688,53,2784,27,2880,23.3C2976,20,3072,40,3168,53.3C3264,67,3360,73,3456,78.3C3552,83,3648,87,3744,76.7C3840,67,3936,43,4032,41.7C4128,40,4224,60,4320,63.3C4416,67,4512,53,4608,48.3C4704,43,4800,47,4896,51.7C4992,57,5088,63,5184,68.3C5280,73,5376,77,5472,76.7C5568,77,5664,73,5760,63.3C5856,53,5952,37,6048,35C6144,33,6240,47,6336,48.3C6432,50,6528,40,6624,41.7C6720,43,6816,57,6864,63.3L6912,70L6912,100L6864,100C6816,100,6720,100,6624,100C6528,100,6432,100,6336,100C6240,100,6144,100,6048,100C5952,100,5856,100,5760,100C5664,100,5568,100,5472,100C5376,100,5280,100,5184,100C5088,100,4992,100,4896,100C4800,100,4704,100,4608,100C4512,100,4416,100,4320,100C4224,100,4128,100,4032,100C3936,100,3840,100,3744,100C3648,100,3552,100,3456,100C3360,100,3264,100,3168,100C3072,100,2976,100,2880,100C2784,100,2688,100,2592,100C2496,100,2400,100,2304,100C2208,100,2112,100,2016,100C1920,100,1824,100,1728,100C1632,100,1536,100,1440,100C1344,100,1248,100,1152,100C1056,100,960,100,864,100C768,100,672,100,576,100C480,100,384,100,288,100C192,100,96,100,48,100L0,100Z"></path></svg>
      <div class="container">
        <div class="col mb-3 pb-5">
          <h2 class="display-5 mb-3 fw-semibold text-royalBlue lh-sm">MAKE YOUR IMPACT</h2>
        </div>
        <div class="row gx-md-5">
          <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
              <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242-2.532-4.431zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24l2.552-4.467zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.498.498 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244l-1.716-3.004z"/>
            </svg>
            <h3 class="mt-2 mb-5">COMMIT REMOVING A SPECIFIC AMOUNT</h3>
          </div>
          <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-bag-x" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M6.146 8.146a.5.5 0 0 1 .708 0L8 9.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 10l1.147 1.146a.5.5 0 0 1-.708.708L8 10.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 10 6.146 8.854a.5.5 0 0 1 0-.708z"/>
              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
            </svg>
            <h3 class="mt-2 mb-5">TIE REMOVAL TO PRODUCT SALES</h3>
          </div>
          <div class="col-lg-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
              <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
            </svg>
            <h3 class="my-2">INCENTIVIZE COMMUNITY ACTION</h3>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e5e5e5" fill-opacity="1" d="M0,256L48,256C96,256,192,256,288,234.7C384,213,480,171,576,144C672,117,768,107,864,128C960,149,1056,203,1152,229.3C1248,256,1344,256,1392,256L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <!-- Section 4 -->
    <section class="pb-md-5 mb-5 text-royalBlue">
      <div class="col container pb-4">
        <h4 class="text-aero-dark">PROJECT 1:</h4>
        <h2 class="mb-3 fw-semibold lh-sm">OCEANBOUND CLEAN UP</h2>
      </div>
      <div class="row gx-md-0 align-items-center">
        <div class="col-lg-6">
          <img src="Img/Wastewater-discharge.png" alt="" class="mb-3 mb-md-0 img-fluid">
        </div>
        <div class="col-lg-6 px-5">
          <h3 class="fw-semibold mb-3">PROBLEMS</h3>
          <p>Plastic recycling generates plastic waste effluent as a standard part of the process. This dirty discharge known as "Mud" is at risk of being discharged into the wastewater and, in the best-case, is usually taken to the nearest landfill.</p>
        </div>
      </div>
      <div class="row gx-md-0 align-items-center flex-row-reverse text-lg-end">
        <div class="col-lg-6">
          <img src="Img/brick_plastic.jpg" alt="" width="auto" class="mb-3 img-fluid">
        </div>
        <div class="col-lg-6 px-5">
          <h3 class="fw-semibold mb-3">SOLUTION</h3>
          <p>Repurposes the “Mud” into useful building materials. It's composition is perfect for producing bricks! Unfortunately, these recycled plastic compound bricks are slightly more expensive than standard building bricks, so Impac+ program incentivizes the reuse of the “Mud” in the bricks by making them competitive on the open market.</p>
        </div>
      </div>

      <div class="col container mt-5 pb-4">
        <h4 class="text-aero-dark">PROJECT 2:</h4>
        <h2 class="mb-3 fw-semibold text-royalBlue lh-sm">FISHING NET RECOVERY</h2>
      </div>
      <div class="row gx-md-0 align-items-center">
        <div class="col-lg-6">
          <img src="Img/turtle_trapped_in_a_net.jpeg" alt="" width="auto" class="mb-3 mb-md-0 img-fluid">
        </div>
        <div class="col-lg-6 px-5">
          <h3 class="fw-semibold mb-3">PROBLEMS</h3>
          <p>Fishing gear - nets and ropes - pose a significant risk to sea life if cut away in the ocean. Unfortunately, incentives do not exist to recover this gear so at the end of its life, most gets landfilled or simply cut away at sea. It's a huge reason for why fishing nets are the largest ocean plastic polluter.</p>
        </div>
      </div>
      <div class="row gx-md-0 align-items-center flex-row-reverse text-lg-end">
        <div class="col-lg-6">
          <img src="Img/Scuba_diver_trying_to_free_large_fishing_net_from_coral_reef.jpeg" alt="" width="auto" class="mb-3 img-fluid">
        </div>
        <div class="col-lg-6 px-5">
          <h3 class="fw-semibold mb-3">SOLUTION</h3>
          <p>We provides the funds needed to incentivize collection and recycling of this gear. This program creates a pathway for the reclamation of end of life fishing gear.</p>
        </div>
      </div>
    </section>

    <!-- Section 5 -->
    <section class="section5 pb-md-5 pb-5">
      <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 100" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(229, 229, 229, 1)" offset="0%"></stop><stop stop-color="rgba(229, 229, 229, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,60L48,65C96,70,192,80,288,81.7C384,83,480,77,576,63.3C672,50,768,30,864,25C960,20,1056,30,1152,38.3C1248,47,1344,53,1440,60C1536,67,1632,73,1728,73.3C1824,73,1920,67,2016,58.3C2112,50,2208,40,2304,41.7C2400,43,2496,57,2592,65C2688,73,2784,77,2880,78.3C2976,80,3072,80,3168,68.3C3264,57,3360,33,3456,21.7C3552,10,3648,10,3744,16.7C3840,23,3936,37,4032,43.3C4128,50,4224,50,4320,48.3C4416,47,4512,43,4608,46.7C4704,50,4800,60,4896,66.7C4992,73,5088,77,5184,73.3C5280,70,5376,60,5472,60C5568,60,5664,70,5760,63.3C5856,57,5952,33,6048,31.7C6144,30,6240,50,6336,50C6432,50,6528,30,6624,23.3C6720,17,6816,23,6864,26.7L6912,30L6912,100L6864,100C6816,100,6720,100,6624,100C6528,100,6432,100,6336,100C6240,100,6144,100,6048,100C5952,100,5856,100,5760,100C5664,100,5568,100,5472,100C5376,100,5280,100,5184,100C5088,100,4992,100,4896,100C4800,100,4704,100,4608,100C4512,100,4416,100,4320,100C4224,100,4128,100,4032,100C3936,100,3840,100,3744,100C3648,100,3552,100,3456,100C3360,100,3264,100,3168,100C3072,100,2976,100,2880,100C2784,100,2688,100,2592,100C2496,100,2400,100,2304,100C2208,100,2112,100,2016,100C1920,100,1824,100,1728,100C1632,100,1536,100,1440,100C1344,100,1248,100,1152,100C1056,100,960,100,864,100C768,100,672,100,576,100C480,100,384,100,288,100C192,100,96,100,48,100L0,100Z"></path></svg>
      <div class="container-md">
        <div class="col my-3 pb-3 text-center">
          <h2 class="display-5 fw-semibold lh-sm" style="color: white;">GET IN TOUCH</h2>
        </div>
        <div class="row gx-md-5 align-items-center">
          <!-- Embed Map -->
          <div class="col-lg-6 mb-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1738239980377!2d110.3774998!3d-7.7713847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sGadjah%20Mada%20University!5e0!3m2!1sen!2sid!4v1683219759481!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!-- Form -->
          <div class="col-lg-6">
            <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingName" placeholder="Name">
              <label for="floatingNmae">Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control" placeholder="Write your message here..." id="floatingTextarea2" style="height: 150px"></textarea>
              <label for="floatingTextarea2">Write your message here...</label>
            </div>
            <button type="submit" class="btn btn-primary ps-4 pe-4">SEND</button>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="py-3 bg-royalBlue">
      <div class="container d-flex justify-content-between">
        <p class="col-md-4 mb-0 text-light">
          <a class="navbar-brand" href="#"><img src="img/Ocean_logo2.png" alt="Ocean Logo" width="40"></a>
          Ocean One
        </p>
        <ul class="nav col-md-4">
          <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Newsletters</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Privacy Policy</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-light">FAQs</a></li>
        </ul>
      </div>
    </footer>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>