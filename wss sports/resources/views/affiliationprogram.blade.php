<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Wss-Sports</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
     <link rel="icon" href="{{ asset('img/wsslogo.jpg') }}">

    <!-- Google Web Fonts -->
    @include('partials.css-links')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Topbar Start -->
   @include('partials.header')
    <!-- Topbar End -->
    <!-- Navbar Start -->
    @include('partials.navbar')
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Features</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Features</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Why Affiliate With Us -->

        <section id="why-affiliate" class="py-5" style="background:#ffffff;color:#fff;">
        <div class="container">
            <div class="text-center mb-5">
            <h6 class="fw-bold text-uppercase" style="color:#e50914;">Why Affiliate With Us?</h6>
            <h2 class="fw-bold">Your Growth, Our Commitment</h2>
            <p class="text-muted" style="max-width:700px;margin:auto;">
                Affiliating with WSS means more than partnership — it’s recognition, opportunity, credibility, and growth support across sports, arts, and innovation.
            </p>
            </div>

            <div class="row g-4">
            <div class="col-md-6">
                <div class="d-flex align-items-start">
                <div class="me-3" style="font-size:32px;color:#e50914;">
                    <i class="fas fa-trophy"></i>
                </div>
                <div>
                    <h5 class="fw-bold">Recognition in Games</h5>
                    <p class="small text-muted">Indoor, outdoor & traditional games showcased with official rankings, leaderboards, and wide promotional reach for players and academies.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start">
                <div class="me-3" style="font-size:32px;color:#e50914;">
                    <i class="fas fa-paint-brush"></i>
                </div>
                <div>
                    <h5 class="fw-bold">Opportunities in Arts & Science</h5>
                    <p class="small text-muted">We provide platforms for exhibitions, cultural showcases & science fairs, giving multi-disciplinary exposure to talent.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start">
                <div class="me-3" style="font-size:32px;color:#e50914;">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div>
                    <h5 class="fw-bold">Event Management under WSS</h5>
                    <p class="small text-muted">Host your events with WSS backing — from judges, registration & venues to branding and media coverage.</p>
                </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex align-items-start">
                <div class="me-3" style="font-size:32px;color:#e50914;">
                    <i class="fas fa-rocket"></i>
                </div>
                <div>
                    <h5 class="fw-bold">Launch New Games & Events</h5>
                    <p class="small text-muted">Pilot new formats with our mentorship, sponsorship access, and nationwide promotional reach.</p>
                </div>
                </div>
            </div>
            </div>

            <div class="text-center mt-5">
            <a href="/affiliate-signup" class="btn btn-lg fw-bold" style="background:#e50914;color:#fff;border-radius:50px;padding:12px 40px;">
                Join the WSS Network
            </a>
            </div>
        </div>
        </section>
    <!-- Feature Start -->

    <!-- category start -->
    <!-- Categories Section -->
        <section id="categories" class="py-5" style="background:#ffffff;color:#fff;">
        <div class="container">
            <div class="text-center mb-5">
            <h6 class="fw-bold text-uppercase" style="color:#e50914;">Categories</h6>
            <h2 class="fw-bold">Levels of Affiliation</h2>
            <p class="text-muted" style="max-width:700px;margin:auto;">
                Choose your level of affiliation with WSS to unlock recognition, opportunities, and growth at state, national, and international stages.
            </p>
            </div>

            <div class="row g-4">
            <!-- State Level -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center"
                    style="background:linear-gradient(180deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));border-radius:15px;">
                <div class="card-body p-4">
                    <div class="mb-3" style="font-size:40px;color:#e50914;">
                    <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5 class="fw-bold">State Level Affiliation</h5>
                    <p class="small text-muted">
                    Gain recognition in your state through official certifications, regional competitions, and local promotional support for your academy.
                    </p>
                </div>
                </div>
            </div>

            <!-- National Level -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center"
                    style="background:linear-gradient(180deg, rgba(255,255,255,0.05), rgba(255,255,255,0.02));border-radius:15px;">
                <div class="card-body p-4">
                    <div class="mb-3" style="font-size:40px;color:#e50914;">
                    <i class="fas fa-flag"></i>
                    </div>
                    <h5 class="fw-bold">National Level Affiliation</h5>
                    <p class="small text-muted">
                    Become part of our nationwide initiatives, championships, and events, enhancing your visibility across India with ranking opportunities.
                    </p>
                </div>
                </div>
            </div>

            <!-- International Level -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center"
                    style="background:linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255,255,255,0.02));border-radius:15px;">
                <div class="card-body p-4">
                    <div class="mb-3" style="font-size:40px;color:#e50914;">
                    <i class="fas fa-globe"></i>
                    </div>
                    <h5 class="fw-bold">International Level Affiliation</h5>
                    <p class="small text-muted">
                    Collaborate globally through our international network — access overseas tournaments, cultural exchange programs, and global recognition.
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

    <!-- category end  -->

    <!-- benifit start -->
    <!-- Benefits Section -->
    <!-- Benefits Section -->
<section id="benefits" class="py-5" style="background:#fff5f5;">
  <div class="container">
    <!-- Header -->
    <div class="text-center mb-5">
      <h6 class="text-uppercase fw-bold" style="color:#e50914;">Benefits</h6>
      <h2 class="fw-bold">Why Affiliates Love Partnering With Us</h2>
      <p class="text-muted" style="max-width:600px; margin:auto;">
        Unlock a range of exclusive benefits designed to support your academy, athletes, and community.
      </p>
    </div>

    <!-- Benefits Grid -->
    <div class="row g-4">

      <!-- Benefit 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-bag-check-fill fs-1 text-danger"></i>
          </div>
          <h5 class="fw-bold">Exclusive Discounts</h5>
          <p class="text-muted">Special discounts on sports kits, uniforms, and accessories.</p>
        </div>
      </div>

      <!-- Benefit 2 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-megaphone-fill fs-1 text-danger"></i>
          </div>
          <h5 class="fw-bold">Social Media Promotion</h5>
          <p class="text-muted">Boost your visibility with official WSS promotions online.</p>
        </div>
      </div>

      <!-- Benefit 3 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-people-fill fs-1 text-danger"></i>
          </div>
          <h5 class="fw-bold">Expert Support</h5>
          <p class="text-muted">Access trained coaches and volunteers for events & programs.</p>
        </div>
      </div>

      <!-- Benefit 4 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-window fs-1 text-danger"></i>
          </div>
          <h5 class="fw-bold">Affiliate Webpage</h5>
          <p class="text-muted">Showcase your academy with a dedicated WSS affiliate webpage.</p>
        </div>
      </div>

      <!-- Benefit 5 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-briefcase-fill fs-1 text-danger"></i>
          </div>
          <h5 class="fw-bold">Corporate Growth Training</h5>
          <p class="text-muted">Boost revenue with corporate training programs for affiliates.</p>
        </div>
      </div>

      <!-- Benefit 6 -->
      <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-ticket-perforated-fill fs-1 text-danger"></i>
          </div>
          <h5 class="fw-bold">Funding & Event Codes</h5>
          <p class="text-muted">Get funding support & official event codes for tournaments.</p>
        </div>
      </div>

      <!-- Benefit 7 -->
      <div class="col-md-4 mx-auto">
        <div class="card shadow-sm border-0 h-100 text-center p-4">
          <div class="mb-3">
            <i class="bi bi-mortarboard-fill fs-1 text-danger"></i>
          </div>
          <h5 class="fw-bold">Free Seminars & Workshops</h5>
          <p class="text-muted">Gain knowledge from experts through exclusive training sessions.</p>
        </div>
      </div>

    </div>
  </div>
</section><br><br>
    <!-- benifit end -->
    <!-- Agreement start -->
    <!-- Agreement Summary -->
<section id="agreement-summary" class="py-5" style="background:#f9f9f9;">
  <div class="container">
    <div class="text-center mb-4">
      <h6 class="text-uppercase fw-bold" style="color:#e50914;">Agreement Summary</h6>
      <h2 class="fw-bold">Affiliate Event Rights with WSS</h2>
      <p class="text-muted" style="max-width:760px;margin:0 auto;">
        As an official affiliate, you gain the opportunity to organize events under the trusted <strong>WSS brand</strong>.
        With clear guidelines, structured support, and transparent processes, we ensure that every event meets professional standards and promotes our shared vision for sports and culture.
      </p>
    </div>

    <div class="row g-4 mt-4">
      <!-- Brand Use -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center p-4">
          <i class="fa-solid fa-shield-halved fs-1 mb-3 text-danger"></i>
          <h5 class="fw-bold">WSS Brand Support</h5>
          <p class="small text-muted">
            Affiliates can use WSS branding in events, giving visibility and trust with participants, schools, and sponsors.
          </p>
        </div>
      </div>

      <!-- Guidelines -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center p-4">
          <i class="fa-solid fa-list-check fs-1 mb-3 text-danger"></i>
          <h5 class="fw-bold">Clear Guidelines</h5>
          <p class="small text-muted">
            Structured rules ensure consistency in event quality, safety, judging, and promotion while leaving room for creativity.
          </p>
        </div>
      </div>

      <!-- Growth -->
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center p-4">
          <i class="fa-solid fa-people-arrows fs-1 mb-3 text-danger"></i>
          <h5 class="fw-bold">Mutual Growth</h5>
          <p class="small text-muted">
            Affiliates gain recognition and support while WSS expands its presence — a partnership built on shared success.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Add this to your <head> for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


    <!-- Agreement end -->
    <!-- Footer Start -->
   @include('partials.footer')
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
