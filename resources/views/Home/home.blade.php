@extends('layouts.app')
@extends('layouts.navbar')
@section('title', 'Home')
@section('content')


{{-- background image --}}
<div class="container">
    <div class="row">
        <!-- Image Column -->
        <div class="col-6">
            <img class="img-fluid w-100" src="{{ asset('assets/images/background.png') }}" alt="Background Image">
        </div>
        <!-- Welcome Words Column -->
        <div class="col-6 text-end d-flex align-items-center">
            <div>
                <h1>Welcome to Tanzania Graduates-e-portfolio!</h1>
                <p>   Discover the achievements and potential of Tanzania's brightest minds. Our e-portfolio platform is designed to showcase the skills, experiences, and projects of our talented graduates. Whether you're an employer seeking new talent or an academic looking for collaboration, you'll find a wealth of information and inspiration here. Explore, connect, and be inspired by the future leaders of Tanzania</p>
            </div>
        </div>
    </div>
</div>

{{-- background image --}}
<hr>
   <!-- About Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/about-1.png') }}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="{{ asset('assets/images/about-2.png') }}" style="width: 85%; margin-top: 15%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="{{ asset('assets/images/about-3.png') }}" style="width: 85%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="{{ asset('assets/images/about-4.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                <p class="mb-4">Welcome to Tanzania Graduates-e-portfolio! Explore the diverse range of talents and accomplishments showcased by our graduates. Our platform offers comprehensive profiles, providing insights into the skills, experiences, and projects of each individual. Whether you're seeking new talent for your organization or looking to collaborate with bright minds, you'll find ample opportunities here.</p>
                <p><i class="fa fa-check text-primary me-3"></i>Showcase of diverse skills and expertise</p>
                <p><i class="fa fa-check text-primary me-3"></i>Comprehensive profiles of top graduates</p>
                <a class="btn btn-primary py-3 px-5 mt-3" href="{{route('about')}}">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About Start -->
<hr>

<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explore By Category</h1>
        <div class="row g-4 mb-5">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card cat-item rounded p-4">
                    <i class="fa fa-3x fa-paint-brush"></i>
                    <h6 class="mb-3">Interior Design</h6>
                    {{-- <p class="mb-0">123 Candidates</p> --}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp mb-3" data-wow-delay="0.3s">
                <div class="card cat-item rounded p-4">
                    <i class="fa fa-3x fa-building"></i>
                    <h6 class="mb-3">Architecture</h6>
                    {{-- <p class="mb-0">123 Candidates</p> --}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card cat-item rounded p-4">
                    <i class="fa fa-3x fa-calculator"></i>
                    <h6 class="mb-3">Quantity Surveying and Construction Economics</h6>
                    {{-- <p class="mb-0">123 Candidates</p> --}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="card cat-item rounded p-4">
                    <i class="fa fa-3x fa-home"></i>
                    <h6 class="mb-3">Housing and Infrastructure Planning</h6>
                    {{-- <p class="mb-0">123 Candidates</p> --}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card cat-item rounded p-4">
                    <i class="fa fa-3x fa-map-marked-alt"></i>
                    <h6 class="mb-3">Geographical Information Systems and Remote Sensing</h6>
                    {{-- <p class="mb-0">123 Candidates</p> --}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card cat-item rounded p-4">
                    <i class="fa fa-3x fa-desktop"></i>
                    <h6 class="mb-3">Computer Systems and Networks</h6>
                    {{-- <p class="mb-0">123 Candidates</p> --}}
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card cat-item rounded p-4">
                    <i class="fa fa-3x fa-cogs"></i>
                    <h6 class="mb-3">Information Systems Management</h6>
                    {{-- <p class="mb-0">123 Candidates</p> --}}
                </div>
            </div>
          </div>
    </div>
</div>



<!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color: #45526e"
        >
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">
                  Graduates-e-portfolio
          </h6>
          <p>
            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat ame
          </p>
        </div>
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none" />
        <!-- Grid column -->

        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">
            Useful links
          </h6>
          <p>
            <a class="text-white" href="about.html">About Us</a>
          </p>
          <p>
            <a class="text-white" href="services.html">Our Services</a>
          </p>
          <p>
            <a class="text-white" href="terms.html">Terms & Condition</a>
          </p>
        </div>

        <!-- Grid column -->
        <hr class="w-100 clearfix d-md-none" />

        <!-- Grid column -->
        <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-youtube"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->

    <hr class="my-3">

    <!-- Section: Copyright -->
    <section class="p-3 pt-0">
      <div class="row d-flex align-items-center">
        <!-- Grid column -->
        <div class="col-md-7 col-lg-8 text-center text-md-start">
          <!-- Copyright -->
          <div class="p-3">
            © 2024 Copyright:
            <a class="text-white" href="">Graduates-e-portifolio.com</a>
          </div>
          <!-- Copyright -->
        </div>
        <!-- Grid column -->

      </div>
    </section>
    <!-- Section: Copyright -->
  </div>
  <!-- Grid container -->
</footer>
<!-- Footer -->
@endsection
