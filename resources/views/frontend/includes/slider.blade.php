@php
    $sliders = \App\Models\Slider::all();
    $collection = \App\Models\AuthImageVideo::all();
    
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
                            <button class="btn btn-secondary dropbtn-bg dropdown-toggle" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Sign up
                            </button>
                            <div class="drodown-item dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a href="{{ route('user-register') }}">For User</a>
                                <a href="{{ route('seller-register') }}">For Seller</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropbtn-bg dropdown-toggle" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Sign in
                            </button>
                            <div class="drodown-item dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <a href="{{ route('user-login') }}">For User</a>
                                <a href="{{ route('login') }}">For Seller</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

    {{-- <input type="text" id="inputField" name="inputField" placeholder="Type something">
    <button id="logButton">Log Value</button> --}}
    <section class=" container">
        <h2 class="fw-bold  my-5 text-center">Check Your Product</h2>

        <div class="pt-5 px-1 px-lg-5">
            <h4 class="fs-4 mb-4">Check if your product is original</h4>
            <p class="fs-5">Behind the product you have a 8 digit code.
                Enter the 8 digit security code here.</p>
            {{-- <form method="POST" action="{{ route('check-code-authenticity') }}">
                @csrf --}}

            <div class="mt-3 ">
                <input class="w-50 px-5 pe-lg-1  py-2 " type="text" name="product_code" id="product-code">
                <button class="px-3 px-lg-4 py-2 bg-black text-white rounded fw-bold " id="submitButton">Submit</button>
            </div>

            <p class="mt-5 fs-5">Note: The code can be used only once.
                The code will appear expired if it has been previously used.</p>

                <div id="container">
                    {{-- <p>This is the container.</p> --}}
                </div>
            @if (session('message'))
                <div
                    class="alert 
                      @if (session('message') === 'Your product is not original') bg-danger text-white)
                      @elseif(session('message') === 'Your product is original') 

                  bg-success text-white
                  @else 
                 bg-warning @endif 
                 message">
                    {{ session('message') }}
                    {{ session('codeExpireDate') }}
                </div>
            @endif


            {{-- <p class="text-center mt-5 border py-4 bg-success rounded w-100 mx-auto text-white fs-6">Your product is
                original
            </p>


            <p class="text-center mt-5 border py-4 bg-primary rounded w-100 mx-auto text-white fs-6">Your product is not
                original</p> --}}







        </div>
        @foreach ($collection as $item)
            <div class="row p-2 p-lg-5">
                <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                    <img class=" w-100 h-100 " src="{{ $item->image }}" alt="">
                </div>
                <div class="col-12 col-lg-6">
                    <iframe class="w-100 h-100" src="{{ $item->video_url }}" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>

                </div>
            </div>
        @endforeach
    </section>

</section>

@section('content-js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        // jQuery code to log the input field value when the button is clicked
        $(document).ready(function() {
            $('#submitButton').click(function() {
                var inputValue = $('#product-code').val();
                $.ajax({
                    url: "{{ route('check-code-authenticity-ajax') }}",
                    data: {
                        product_code: inputValue,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response.message);
                        if(response.message = 'Your product is not original') {
                            var newChild = '<div class="alert bg-danger text-white">fgfgf</div>';
                             $('#container').append(newChild);
                        }
                    }
                    // {
                    //     $('#authenticity-message').html =`<div class="alert bg-danger text-white> 
                //       ${response.message}
                //      </div>`  
                    // }

                });
            });
        });
    </script>
@endsection
