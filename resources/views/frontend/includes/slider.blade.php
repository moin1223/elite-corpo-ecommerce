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
                        <img src="{{ $slider->image }}" class="d-block w-100 slider-img disable-right-click-image"
                            alt="...">
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
            @else
                <div class="d-flex ">
                    <div class="ms-2">
                        <a href="{{ route('user-register') }}" class="btn btn-secondary dropbtn-bg">User Sign Up </a>
                        <a href="{{ route('user-login') }}" class="btn btn-secondary dropbtn-bg">User Login</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="container mt-3 text-center">
        @if (Auth::check())
            <div></div>
        @else
            <a href="{{ route('seller-register') }}" class="btn btn-secondary dropbtn-bg">Seller Sign Up </a>
            <a href="{{ route('login') }}" class="btn btn-secondary dropbtn-bg">Seller Login</a>
        @endif
    </div>
    <section class=" container">
        <h2 class="fw-bold  my-5 text-center">Check Your Product</h2>

        <div class="pt-5 px-1 px-lg-5">
            <h4 class="fs-4 mb-4">Check if your product is original</h4>
            <p class="fs-5">Behind the product you have a 8 digit code.
                Enter the 8 digit security code here.</p>
            {{-- <form method="POST" action="{{ route('check-code-authenticity') }}">
                @csrf --}}

            <div class="mt-3 ">
                <form action="">

                    <input class="w-50 px-5 pe-lg-1  py-2 " type="text" name="product_code" id="product-code"
                        required>
                    <button class="px-3 px-lg-4 py-2 bg-black text-white rounded fw-bold "
                        id="submitButton">Submit</button>

                </form>
            </div>
            <div id="container">
            </div>
            <p class="mt-5 fs-5">Note: The code can be used only once.
                The code will appear expired if it has been previously used.</p>

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
                        console.log(response);
                        if (response.message == 'Your product is not original') {
                            if ($('#container').children().length > 0) {
                                // Remove all child elements from #container
                                $('#container').empty();
                            }
                            var newChild =
                                '<div class= "mt-3 alert bg-danger text-white">Your product is not original</div>';
                            $('#container').append(newChild);
                        }

                        if (response.message == 'Your product is original') {
                            if ($('#container').children().length > 0) {
                                // Remove all child elements from #container
                                $('#container').empty();
                            }
                            var newChild =
                                '<div class="mt-3 alert  bg-success text-white">Your product is original.</div>';
                            $('#container').append(newChild);
                        }
                        if (response.message != 'Your product is not original' && response
                            .message != 'Your product is original') {
                            if ($('#container').children().length > 0) {
                                // Remove all child elements from #container
                                $('#container').empty();
                            }

                            var newChild =
                                $('<div class="mt-3 alert bg-warning text-white"></div>');
                            newChild.text(response.codeExpireDate);
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var images = document.getElementsByClassName('disable-right-click-image');

            for (var i = 0; i < images.length; i++) {
                images[i].addEventListener('contextmenu', function(event) {
                    event.preventDefault(); // Prevent the default right-click context menu
                });
            }
        });
    </script>
@endsection
