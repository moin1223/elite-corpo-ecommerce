<style>
    #btn {
        /* max-height: 0;*/
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
        /* Adjust the duration as needed */
    }
</style>

<header>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-md fw-bold shadow bg-white ">
        <a href="index.html" class="navabar-brand fs-3 me-1 me-md-2 me-lg-5 ms-1 ms-md-2 ms-lg-4 mb-1 mb-lg-3">
            <img src="/frontend/images/elit-logo.jpg" style="height: 55px" alt="">
        </a>
        <form action="{{ route('seller-search') }}" method="POST">
            @csrf
            <input type="text" name="mobile_number" class="px-2 px-lg-3 pt-1 pb-2"
                placeholder="Search by phone number">
            @if (session('sellerMessage'))
                <p class="text-danger">{{ session('sellerMessage') }}</p>
            @endif
            <button class="dropbtn px-2 px-lg-3 pt-1 pb-2 rounded text-center text-white bg-black ">Search</button>
        </form>

        <button class="navbar-toggler  me-2 me-lg-3" type="button" data-bs-toggle="collapse" id="custom"
            data-bs-target="#btn">
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
                        <a href="{{ route('home-page') }}" class="nav-link">
                            About us
                        </a>
                    </li>
                @endisset

            </ul>
        </div>
    </nav>
</header>
<!-- nav for mobile device  -->
<section class="d-block d-lg-none container py-2 nav-bg ">
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
        @isset($products)
            <a href="#products" class="item text-decoration-none text-black">
                Products
            </a>
        @else
            <a href="{{ route('home-page') }}" class="item text-decoration-none text-black">
                Products
            </a>
        @endisset
        @isset($products)
            <a href="#about" class="item text-decoration-none text-black">
                About us
            </a>
        @else
            <a href="{{ route('home-page') }}" class="item text-decoration-none text-black">
                About us
            </a>
        @endisset
    </div>
</section>

<script>
    const customButton = document.getElementById("custom");
    const customNav = document.getElementById("btn");

    customButton.addEventListener("click", function() {
        // Toggle the visibility of customNav with a slide-up/slide-down effect
        if (customNav.style.maxHeight === "0px" || customNav.style.maxHeight === "") {
            customNav.style.maxHeight = customNav.scrollHeight + "px";
        } else {
            customNav.style.maxHeight = "0px";
        }
    });
</script>
