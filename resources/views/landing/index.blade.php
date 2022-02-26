@extends('landing.layout.app')
@section('content')
    <!-- Main content -->
    <div id="main-content" class="main-content">

        <!--Block 03: Product Tab-->
        <div class="product-tab z-index-20 sm-margin-top-193px xs-margin-top-30px">
            <div class="container">
                <div class="biolife-title-box">
                    <span class="subtitle">All the best item for You Checkout This Products</span>
                    <h3 class="main-title">Related Products</h3>
                </div>
                <div class="biolife-tab biolife-tab-contain sm-margin-top-34px">
                    <div class="tab-content">
                        <div id="tab01_1st" class="tab-contain active">
                            <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile eq-height-contain" data-slick='{"rows":2 ,"arrows":true,"dots":false,"infinite":true,"speed":400,"slidesMargin":10,"slidesToShow":4, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":25 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":15}}]}'>
                                @forelse ($products as $product)
                                <li class="product-item">
                                    <div class="contain-product layout-default">
                                        <div class="product-thumb">
                                            <a href="#" class="link-to-product">
                                                <img src="assets/images/products/p-05.jpg" alt="Vegetables" width="270" height="270" class="product-thumnail">
                                            </a>
                                            <a class="lookup btn_call_quickview" href="#"><i class="biolife-icon icon-search"></i></a>
                                        </div>
                                        <div class="info">
                                            <b class="categories">Vegetables</b>
                                            <h4 class="product-title"><a href="#" class="pr-name">{{ $product->name }}</a></h4>
                                            <div class="price ">
                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>{{ $product->price }}</span></ins>
                                            </div>
                                            <div class="slide-down-box">
                                                <p class="message">{{ $product->description }}</p>
                                                <div class="buttons">
                                                    <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                                    <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                                    <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                @empty
                                    <h2>NO Product</h2>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
