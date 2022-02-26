@extends('landing.layout.app')
@section('content')
    @include('inc.hero-section')
    @include('inc.nav')
    <div class="page-contain single-product">
        <div class="container">
            <div id="main-content" class="main-content">
                <div class="sumary-product single-layout">
                    <div class="media">
                        <ul class="biolife-carousel slider-for"
                            data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                            <li><img src="{{ asset('assets/images/details-product/p01.jpg') }}" alt="" width="500"
                                    height="500"></li>
                            <li><img src="{{ asset('assets/images/details-product/p02.jpg') }}" alt="" width="500"
                                    height="500"></li>
                            <li><img src="{{ asset('assets/images/details-product/p03.jpg') }}" alt="" width="500"
                                    height="500"></li>
                            <li><img src="{{ asset('assets/images/details-product/p06.jpg') }}" alt="" width="500"
                                    height="500"></li>
                            <li><img src="{{ asset('assets/images/details-product/p07.jpg') }}" alt="" width="500"
                                    height="500"></li>
                        </ul>
                        <ul class="biolife-carousel slider-nav"
                            data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>
                            <li><img src="{{ asset('assets/images/details-product/thumb_p01.jpg') }}" alt="" width="88"
                                    height="88"></li>
                            <li><img src="{{ asset('assets/images/details-product/thumb_p02.jpg') }}" alt="" width="88"
                                    height="88"></li>
                            <li><img src="{{ asset('assets/images/details-product/thumb_p03.jpg') }}" alt="" width="88"
                                    height="88"></li>
                            <li><img src="{{ asset('assets/images/details-product/thumb_p06.jpg') }}" alt="" width="88"
                                    height="88"></li>
                            <li><img src="{{ asset('assets/images/details-product/thumb_p07.jpg') }}" alt="" width="88"
                                    height="88"></li>
                        </ul>
                    </div>
                    <div class="product-attribute">
                        <h3 class="title">{{ $product->name }}</h3>
                        <div class="rating">
                            <p class="star-rating"><span class="width-80percent"></span></p>
                            <span class="review-count">(00 Reviews)</span>
                            <span class="qa-text">Q&amp;A</span>
                            <b class="category">By: {{ $product->category->name }}</b>
                        </div>
                        <span class="sku">Sku: #76584HH</span>
                        <p class="excerpt">{{ $product->description }}</p>
                        <div class="price">
                            <ins><span class="price-amount"><span class="currencySymbol">£</span>{{ number_format($product->price,2) }}</span></ins>
                        </div>
                        <div class="shipping-info">
                            <p class="shipping-day">3-Day Shipping</p>
                            <p class="for-today">Free Pickup Today</p>
                        </div>
                    </div>
                    <div class="action-form">
                        <div class="quantity-box">
                            <span class="title">Quantity:</span>
                            <div class="qty-input">
                                <input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1"
                                    data-step="1">
                                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="buttons">
                            <a href="{{ route('cart.add',['product' => $product->id]) }}" class="btn add-to-cart-btn">add to cart</a>
                            <p class="pull-row">
                                <a href="#" class="btn wishlist-btn">wishlist</a>
                                <a href="#" class="btn compare-btn">compare</a>
                            </p>
                        </div>
                        <div class="social-media">
                            <ul class="social-list">
                                <li><a href="#" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#" class="social-link"><i class="fa fa-pinterest"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-share-alt"
                                            aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="acepted-payment-methods">
                            <ul class="payment-methods">
                                <li><img src="{{ asset('assets/images/card1.jpg') }}" alt="" width="51" height="36"></li>
                                <li><img src="{{ asset('assets/images/card2.jpg') }}" alt="" width="51" height="36"></li>
                                <li><img src="{{ asset('assets/images/card3.jpg') }}" alt="" width="51" height="36"></li>
                                <li><img src="{{ asset('assets/images/card4.jpg') }}" alt="" width="51" height="36"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tab info -->
                <div class="product-tabs single-layout biolife-tab-contain">
                    <div class="tab-head">
                        <ul class="tabs">
                            <li class="tab-element active"><a href="#tab_1st" class="tab-link">Products
                                    Descriptions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab_1st" class="tab-contain desc-tab active">
                            <p class="desc">{{ $product->description }}</p>
                            <div class="desc-expand">
                                <span class="title">{{ $product->name }} Features</span>
                                <ul class="list">
                                    <li>100% real fruit ingredients</li>
                                    <li>100 fresh fruit bags individually wrapped</li>
                                    <li>Blending Eastern & Western traditions, naturally</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
