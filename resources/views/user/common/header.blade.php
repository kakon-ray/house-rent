<div class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
        <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
            <div class="icon p-2 me-2">
                <img class="img-fluid" src="frontend/img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
            </div>
            <h1 class="m-0 text-primary">Makaan</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>


                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>


                    <div class="dropdown-menu rounded-0 m-0">

                        <a href=""class="dropdown-item">Property List</a>
                    </div>

                </div>
                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>

            @if(Auth::guard('admin')->check())
            <a href="dashboard" class="btn btn-primary px-3 d-none d-lg-flex">Dashboard</a>
            
            @else
            <a href="/login" class="btn btn-primary px-3 d-none d-lg-flex">Login</a>
            @endif
           

           
        </div>
    </nav>
</div>
<!-- Navbar End -->

<!-- Header Start -->
<div class="container-fluid header bg-white p-0">
    <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
        <div class="col-md-6 p-5 mt-lg-5">
            <h1 class="display-5 animated fadeIn mb-4">Find A <span class="text-primary">Perfect Home</span> To Live With Your Family</h1>
            <p class="animated fadeIn mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet
                sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
            <a href="" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
        </div>
        <div class="col-md-6 animated fadeIn">
            <div class="owl-carousel header-carousel">
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="frontend/img/carousel-1.jpg" alt="">
                </div>
                <div class="owl-carousel-item">
                    <img class="img-fluid" src="frontend/img/carousel-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->