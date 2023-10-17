
@extends('frontend.layouts.default')

@section('content')
    <section class=" container">
        <h2 class="fw-bold  my-5 text-center">Check Your Product</h2>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6 shadow p-4 rounded">
                    <h4 class="fs-4 mb-4">Check if your product is original</h4>
                    <p class="fs-5">Behind the product, you have an 8-digit code. Enter the 8-digit security code here.</p>
                    <form method="POST" action="{{ route('check-code-authenticity') }}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" type="text" name="product_code" id="product-code" required>
                        </div>
                        <button type="submit" class="btn btn-dark mt-3" >Submit</button>
                    <div class="rounded bg-primary">
                        <p class="mt-3 text-white p-2">অরিজিনাল পণ্য কিনা যাচাই করুন।</p>
                    </div>
                </form>
                    @if (session('message'))
                    <div
                        class="alert 
                          @if (session('message') === 'আপনার প্রোডাক্টটি অরিজিনাল না') bg-danger text-white)
                          @elseif(session('message') === 'আপনার প্রোডাক্টটি অরিজিনাল') 
    
                      bg-success text-white
                      @else 
                     bg-warning @endif 
                     message">
                        {{ session('message') }}
                        {{ session('codeExpireDate') }}
                    </div>
                @endif
    
         
                    <p class="mt-3 fs-5">Note: The code can be used only once. The code will appear expired if it has been previously used.</p>
                </div>
            </div>
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
