
@extends('frontend.layouts.default')

@section('content')
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
            <p class="mt-1">অরিজিনাল পণ্য কিনা যাচাই করুন।</p>
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
