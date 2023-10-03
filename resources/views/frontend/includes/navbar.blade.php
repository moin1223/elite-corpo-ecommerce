{{-- <style>
    @media screen and (min-width: 991px) {
        .check-authenticity {
            display: none;
        }
    }

    @media screen and (max-width: 991px) {
        .check-authenticity {
            display: block;
            color: honeydew;
        }
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <img src="/frontend/images/New-Logo (1).png" style="height: 55px" alt="">
        <a class="nav-link check-authenticity" href="{{ route('check-authenticity') }}">Check Authenticity</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home-page') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hello22" href="{{ route('product-page') }}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('check-authenticity') }}">Check Authenticity</a>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
<!-- nav for desktop  -->
<header>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-md fw-bold shadow bg-white ">
        <a href="index.html" class="navabar-brand fs-3 ms-3">
            <img class="logo"
                src="https://img.freepik.com/free-vector/bird-colorful-logo-gradient-vector_343694-1365.jpg"
                alt="">
        </a>
        <form  action="{{ route('seller-search') }}" method="POST">
            @csrf
            <input type="text" name="mobile_number"  class="px-2 px-lg-3 pt-1 pb-2" placeholder="Search by phone number">
            @if (session('sellerMessage'))
            <p class="text-danger">{{ session('sellerMessage') }}</p>
 
            @endif 
            <button class="dropbtn px-2 px-lg-3 pt-1 pb-2 rounded text-center text-white bg-black ">Search</button>
        </form>

        <button class="navbar-toggler me-3" type="button" data-bs-toggle="collapse" data-bs-target="#btn">
            <i class='bx bx-menu bx-sm'></i>
        </button>
        <div class="collapse navbar-collapse " id="btn">
            <ul class="navbar-nav ms-auto ul-bg">
                <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                    <a href="{{ route('home-page') }}"class="nav-link">
                        Home
                    </a>
                </li>
                <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                    <a href="{{ route('check-authenticity') }}" class="nav-link">
                        Check authenticity
                    </a>
                </li>
                <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                    <a href="{{ route('authorized-prtbners') }}" class="nav-link">
                        Authorized Partner
                    </a>
                </li>
                @isset($products)
                <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                    <a href="#products" class="nav-link">
                        Products
                    </a>
                </li>
               @else
               <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                <a href="{{ route('home-page') }}" class="nav-link">
                    Products
                </a>
            </li>
               @endisset
               @isset($products)
               <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                <a href="#about" class="nav-link">
                    About us
                </a>
            </li>
              @else
              <li class="nav-item mx-3 mx-lg-2 fs-lg-5">
                <a href="{{ route('home-page')}}" class="nav-link">
                    About us
                </a>
            </li>
              @endisset
     
            </ul>
        </div>
    </nav>
</header>
<!-- nav for mobile device  -->
<section class="d-block d-lg-none py-2 nav-bg ">
    <div class="nav-wrapper">
        <a href="{{ route('home-page') }}" class="item text-decoration-none text-black">
            Home
        </a>
        <a href="{{ route('check-authenticity') }}" class="item text-decoration-none text-black">
            Check authenticity
        </a>
        <a href="{{ route('authorized-prtbners') }}" class="item text-decoration-none text-black">
            Authorized Partner
        </a>
        <a href="#products" class="item text-decoration-none text-black">
            Products
        </a>
        <a href="#" class="item text-decoration-none text-black">
            About us
        </a>

    </div>
</section>
