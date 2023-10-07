@php
    $sliders = \App\Models\Slider::all();
@endphp
<section>
    <div class=" Banner">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($sliders as $slider)
                    <div class="carousel-item active">
                        <img src="{{ $slider->image }}" class="d-block w-100 slider-img" alt="...">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="Search-details me-1 me-lg-3">
            @if (Auth::check())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="bg-black  text-white rounded px-2 px-lg-3 py-1" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">Logout</a>
                
            </form>
            {{-- <a href="{{ route('login') }}">
                <button class=" bg-black  text-white  rounded px-2 px-lg-3 py-1 ">Log out</button>
            </a> --}}
            @else
            <div class="d-flex ">
                {{-- <input type="text" class="px-2 rounded" placeholder="Search here"> --}}
                <div class="ms-2">
                    {{-- <div class="dropdown ">
                        <button class="dropbtn px-2 px-lg-3 pt-1 pb-2 rounded text-center text-white bg-black ">Sign
                            up</button>
                        <div class="dropdown-content">
                            <a href="{{ route('user-register') }}">For User</a>
                            <a href="{{ route('seller-register') }}">For Seller</a>
                        </div>
                    </div> --}}
                    <div class="dropdown">
                        <button class="btn btn-secondary dropbtn-bg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Sign up
                        </button>
                        <div class="drodown-item dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a href="{{ route('user-register') }}">For User</a>
                            <a href="{{ route('seller-register') }}">For Seller</a>
                        </div>
                      </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropbtn-bg dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Sign in
                        </button>
                        <div class="drodown-item dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <a href="{{ route('user-register') }}">For User</a>
                            <a href="{{ route('login') }}">For Seller</a>
                        </div>
                      </div>
                </div>
            </div>
            @endif
        </div>
    </div>

</section>

@section('content-js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection