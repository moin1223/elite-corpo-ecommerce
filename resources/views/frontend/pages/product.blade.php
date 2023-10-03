@extends('frontend.layouts.default')
@section('content')
    @include('frontend.includes.slider')
    @php
        $products = \App\Models\Category::with('product')->get();
    @endphp

    <div class="text-center mt-5 ">
        <h1 class="fw-bold" id="products">Our Products</h1>
    </div>

    <section class="container ps-3 pt-4 ">
        @foreach ($products as $category)
            <h4 class="fw-bold mb-4">{{ $category->category_name }}<img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAtNJREFUaEPdWVtSxDAMU2/Gzdo9GdxsmZI2m4cfchKWGfrFbB3HkhzbDRuEZwPwlF780W9WPOc7/YkiidoDGFhSxWsDeCfjDRIRWPnj9XcPYICSgSUNNRuwPQN5+9rx9xRwUbkGrv6nhyUKpJ3mAyojZr39ngIufwzsHkb6RUghBnG2CaUs45lEK5f8mQ00hhh2eRsNXnUGZmDkDUqJcitc4rnHUJVRbQ8yVYgQPwB8mV2f3Kv1wR9iI0oHwAFgB/AAcP49/ggKJwBMcATNQmR38PerBzYcw4OWEAPfBxiJ6w3OtPkUQDlK2IUhkEI25a4gyaBV4FbbAGEcSEG6k1dieGZs1NQ+sGEX9p4/E+IoMX7ErJWVEgUdFQiRJoe7JVVILdL1iz6d0vsMgtG5tckAyheMI1so1YML4vYr9sTYKMGUndJjb6/AODZgvz9ZtXRqPKuVVzzETCHjVRItaSWksll+rxtngAwxE18qQK3tQFyrlGaX3qpnoJdMDeKHAL5LUGBaouUSKxxUUQFny44GPsTG0q4cCcSyMvriaOLKiIeay+ssAGH9BAC6S14p5ANu+oBWf5oD5PvVI32t1Q8xcJbaVDqd2mBUIYYtslf0gA9g24WLoPB8RA5z5LCQzUyJhntAFcW1RVKgrOVNz4tmi2hvpM0VVJj5YuSIhhhVI9uHmHeIuHkXbua01J/DGQg+tlF/iGPrC7jqwkDwTOGobSarkLFhwuNWG7sZuzOLf7k7LAhAfdRrnYfVwlZgIvqruB3PdCd0P8FrlaaBCoI0nZjFHbKLX2wFiHsHgBMtdbXYf3b5SIxObCz2/eY63U1+5NpSY6snLKlCAzGFctAyzqMEc185HyjjgbF5QSI/6pcRttzRP0khhhdS2WymfSqUBqH/4sgBDCvg4nENEmukmUrxMABGtOhgOzJWGABmuVEGVTGFxtVYq8Aw5mYh6ec0+wa3lg5EVzT9PAAAAABJRU5ErkJggg==" />
            </h4>
            <div>
                <div id="health-products" class="wrapper">
                    @foreach ($category->product as $single_product)
                        <div>
                            <div class="item " style="width: 20rem;">
                                <img src="{{ $single_product->image }}" class="card-img-top" alt="...">
                                <div class="card-body pt-3 ps-4">
                                    <h5 class="card-title text-uppercase fw-bold mb-2 border-bottom pb-2">
                                        {{ $single_product->product_name }}</h5>
                                    <p class="text-muted mt-2 mb-0">{{$single_product->weight}}gm</p>
                                    <p class="card-text mb-0 text-decoration-line-through d-inline text-danger">
                                        {{ $single_product->old_price }}TK</p><span
                                        class='ms-2 fs-4'>{{ $single_product->new_price }}Tk</span>
                                    <div class="mt-3">
                                        <a href="{{ route('product-review', $single_product->id) }}" class="btn btn-dark px-4 py-2">Review</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @endforeach

    </section>
    {{-- about us --}}
    <section id="about">
        <h3 class="text-center fs-2 fw-bold mt-5">About Us</h3>
        <div class="row p-2 mt-4">
            <div class="col-12 col-lg">
                <img class="w-100" src="./frontend/images/about.jpg" alt="">
            </div>
            <div class="col-12 col-lg px-2 pt-2 px-4 mt-5 mt-lg-0">
                <p class="fs-5">
                    Welcome to Elite Corporation.
                    Elite Corporation is mainly supplying health, cosmetic and spice products all over Bangladesh. <br>
                <p>Each product is hygienic and chemical free.Organic products are mainly needed to keep our body
                    healthy,
                    especially during corona time doctors advised to consume different types of tea or masala tea or
                    organic products to avoid that dangerous virus.</p>
                <p>
                    During the Corona period, we have realized that
                    we
                    need to boost our immune system to keep our body healthy and protect us from the clutches of
                    Corona.Only organic or natural products can boost our body's immune system.Each of our products is
                    tested by Bangladesh Science Lab and some products are packaged approved by BSTI.</p>

                <p>Stay healthy by
                    consuming Elite Corporation products.</p>
                </p>
            </div>
        </div>
    </section>


@endsection

@section('content-js')
@endsection
