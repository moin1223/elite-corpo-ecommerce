{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset('frontend/css/bootstrap/css/bootstrap.min.css') }} />
    <title>Responsive Navbar</title>

    <style>
        body {

            background-color: aliceblue;
        }

        @media screen and (min-width: 800px) {
            .Elite-Corporation-logo {
                height: 120px;
                width: 120px;
        
                margin-right: 150px;
            }

            .Keto-Green-Coffee-Logo {
                height: 120px;
                width: 120px;
  
            }

            h3 {
                margin-top: 100px;
            }


        }

        @media screen and (max-width: 800px) {
            .Elite-Corporation-logo {
                height: 100px;
                width: 100px;
                margin-top: 200px;
                margin-right: 150px;
            }

            .Keto-Green-Coffee-Logo {
                height: 120px;
                width: 120px;
                margin-top: 200px;
            }

            h3 {
                margin-top: 100px;
            }


        }


        @media screen and (max-width: 400px) {
            .Elite-Corporation-logo {
                height: 120px;
                width: 120px;
                margin-top: 50px;
                margin-right: 50px;
            }

            .Keto-Green-Coffee-Logo {
                height: 100px;
                width: 100px;
                margin-top: 50px;
            }

        }

        .form-input {
            margin-left: 25%;
        }
    </style>
</head>

<body>
    @include('frontend.includes.navbar')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="text-center">
                    <h3 class="title">আপনার প্রোডাক্টটি অরিজিনাল কিনা চেক করুন</h3>
                    <form method="POST" action="{{ route('check-code-authenticity') }}">
                        @csrf
                        <div class="mb-3">
                            <div class="text-center">
                                <label for="formGroupExampleInput" class="form-label">আপনার হাতে থাকা কিটো গ্রীন কফির
                                    পিছনে দেয়া <br>৬ ডিজিটের সিকিউরিটি কোডটি এখানে তুলুন।</label>
                                <input type="text" name="product_code" class="form-control form-input w-50"
                                    id="formGroupExampleInput" placeholder="">
                            </div>

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">সাবমিট করুন</button>
                            </div>
                        </div>
                    </form>
                    <p class="mt-3">বিঃ দ্রঃ কোডটি শুধু মাত্র একবারই ব্যবহার করতে পারবেন,<br>কোডটি পূর্বে ব্যবহৃত হয়ে
                        গেলে তা মেয়াদ উত্তীর্ণ দেখাবে।</p>
             @if (session('message'))
                        <div
                            class="alert 
            @if (session('message') === 'আপনার প্রোডাক্টটি অরিজিনাল না') bg-danger text-white 
            @elseif(session('message') === 'আপনার প্রোডাক্টটি অরিজিনাল') 
       
                bg-success text-white
            @else 
             bg-warning @endif 
            message">
                            {{ session('message') }}
                            {{ session('codeExpireDate') }}
                        </div>
                    @endif
                    <img class="Elite-Corporation-logo" src="/frontend/images/Elite-Corporation-logo.png"
                        alt="logo1">
                    <img class="Keto-Green-Coffee-Logo" src="/frontend/images/20230715_215707 (1).png" alt="logo2">
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('frontend/css/bootstrap/js/bootstrap.bundle.js') }}"></script>

</body>

</html> --}}
@extends('frontend.layouts.default')

@section('content')
    {{-- @include('frontend.pages.product') --}}

    <!-- Check authenticity -->
    <section class=" container">
        <h2 class="fw-bold  my-5 text-center">Check Your Product</h2>

        <div class="pt-5 px-1 px-lg-5">
            <h4 class="fs-4 mb-4">Check if your product is original</h4>
            <p class="fs-5">Behind the product you have a 8 digit code.
                Enter the 8 digit security code here.</p>
            <form method="POST" action="{{ route('check-code-authenticity') }}">
                @csrf
                <div class="mt-3 ">
                    <input class="w-50 px-5 pe-lg-1  py-2 " type="text" name="product_code" id="">
                    <button class="px-3 px-lg-4 py-2 bg-black text-white rounded fw-bold " type="submit">Submit</button>
                </div>
            </form>
            <p class="mt-5 fs-5">Note: The code can be used only once.
                The code will appear expired if it has been previously used.</p>


    
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
                <img class=" w-100 h-100 "
                    src="{{$item->image}}"
                    alt="">
            </div>
            <div class="col-12 col-lg-6">
                <iframe class="w-100 h-100" src="{{$item->video_url}}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>

            </div>
        </div>
        @endforeach
    </section>
@endsection

{{-- @section('content-js')
    <script>
        $(document).ready(() => {
            $('#image').change(function() {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        $('#imgPreview').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endsection --}}
