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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/contact') }}" rel="stylesheet">
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

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Office Locations Section -->
    <div class="container my-5">
        <div class="row g-4">

            <!-- Corporate Office -->
            <div class="col-md-4">
                <div class="card office-card text-center shadow-lg p-4">
                    <div class="icon mb-3">
                        <i class="fas fa-building fa-3x"></i>
                    </div>
                    <h4 class="card-title text-danger">Corporate Office</h4>
                    <p class="card-text text-dark">Bangalore, India</p>
                </div>
            </div>

            <!-- Branch 1 -->
            <div class="col-md-4">
                <div class="card office-card text-center shadow-lg p-4">
                    <div class="icon mb-3">
                        <i class="fas fa-map-marker-alt fa-3x"></i>
                    </div>
                    <h4 class="card-title text-danger">Branch</h4>
                    <p class="card-text text-dark">Thoothukudi, Tamil Nadu, India</p>
                </div>
            </div>

            <!-- Branch 2 -->
            <div class="col-md-4">
                <div class="card office-card text-center shadow-lg p-4">
                    <div class="icon mb-3">
                        <i class="fas fa-globe-asia fa-3x"></i>
                    </div>
                    <h4 class="card-title text-danger">Branch</h4>
                    <p class="card-text text-dark">Sri Lanka & Malaysia</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
    <div class="container contact px-lg-0">
        <div class="row g-0 mx-lg-0">

            <!-- Left Side: Map -->
            <div class="col-lg-6 pe-lg-0" style="min-height: 300px;">
                <div class="position-relative h-100">
                    <iframe
                    src="https://www.google.com/maps?q=2Reddy%20Industrial%20Area,%20Hosapalya,%20BTM%20Layout,%20Bengaluru,%20Karnataka%20560068&hl=en&z=15&output=embed"
                    width="100%"
                    height="100%"
                    frameborder="0"
                    style="border:0; min-height: 500px;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Right Side: Contact Form -->
            <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 ps-lg-0">

                <!-- Success Message -->
                    @if(session('message'))
                    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert" id="flash-message">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                            <use xlink:href="#check-circle-fill"/>
                        </svg>
                        <div>
                            {{ session('message') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <!-- Error Message -->
                    @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert" id="flash-message">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Error:">
                            <use xlink:href="#exclamation-triangle-fill"/>
                        </svg>
                        <div>
                            {{ session('error') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <!-- Bootstrap Icons -->
                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03l-3.47-3.47 1.414-1.414L6.97 8.202l4.95-4.95 1.414 1.414-6.364 6.364z"/>
                        </symbol>
                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 0c.69 0 1.375.28 1.875.875l6 6c.5.5.625 1.125.625 1.625V14c0 1.1-.9 2-2 2H2c-1.1 0-2-.9-2-2V8.5c0-.5.125-1.125.625-1.625l6-6C6.625.28 7.31 0 8 0zm.93 4.93a.5.5 0 0 0-.86 0L7 7.5V9h2V7.5l-.07-.07zM8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </symbol>
                    </svg>

                    <!-- Auto Fade Out -->
                    <script>
                        setTimeout(function() {
                            let flash = document.getElementById('flash-message');
                            if(flash){
                                flash.classList.remove('show');
                                flash.classList.add('hide');
                            }
                        }, 4000); // fades out after 4 seconds
                    </script>


                    <h1 class="text-primary">Contact Us</h1>
                    <h1 class="mb-4">Feel Free To Contact Us</h1>
                    <form action="{{ route('contact.submit') }}" method="POST" id="contact">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name"  placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email"  placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="subject"   placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message"  style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
    <!-- Contact End -->

    @include('partials.footer')

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
