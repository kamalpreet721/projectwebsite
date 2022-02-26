@extends('landing.layout.app')
@section('content')
    @include('inc.hero-section')
    @include('inc.nav')
    <div class="page-contain shopping-cart">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">
                <!--Cart Table-->
                <div class="shopping-cart-container">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                            <h3 class="box-title">Your cart items</h3>
                            <form class="shopping-cart-form" action="#" method="post">
                                <table class="shop_table cart-form">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product Name</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (session('cart'))
                                            @foreach (session('cart') as $id => $details)
                                                <tr class="cart_item">
                                                    <td class="product-thumbnail" data-title="Product Name">
                                                        <a class="prd-thumb" href="#">
                                                            <figure><img width="113" height="113"
                                                                    src="assets/images/shippingcart/pr-01.jpg"
                                                                    alt="shipping cart">
                                                            </figure>
                                                        </a>
                                                        <a class="prd-name" href="#">{{ $details['name'] }}</a>
                                                        <div class="action">
                                                            <a href="#" class="edit"><i class="fa fa-pencil"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="#" class="remove"><i class="fa fa-trash-o"
                                                                    aria-hidden="true"></i></a>
                                                        </div>
                                                    </td>
                                                    <td class="product-price" data-title="Price">
                                                        <div class="price price-contain">
                                                            <ins><span class="price-amount">
                                                                    <span class="currencySymbol">£</span>
                                                                    {{ number_format($details['price'], 2) }}
                                                                </span>
                                                            </ins>
                                                        </div>
                                                    </td>
                                                    <td class="product-quantity" data-title="Quantity">
                                                        <div class="quantity-box type1">
                                                            <div class="qty-input">
                                                                <input type="text" name="qty12554" value="1"
                                                                    data-max_value="20" data-min_value="1" data-step="1">
                                                                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up"
                                                                        aria-hidden="true"></i></a>
                                                                <a href="#" class="qty-btn btn-down"><i
                                                                        class="fa fa-caret-down" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-subtotal" data-title="Total">
                                                        <div class="price price-contain">
                                                            <ins><span class="price-amount"><span
                                                                        class="currencySymbol">£</span>{{ number_format($details['price'], 2) }}</span></ins>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        <tr class="cart_item wrap-buttons">
                                            <td class="wrap-btn-control" colspan="4">
                                                <a href="{{ route('index') }}" class="btn back-to-shop">Back to Shop</a>
                                                <button class="btn btn-update" type="submit" disabled>update</button>
                                                <button class="btn btn-clear" type="reset">clear all</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                            <div class="shpcart-subtotal-block">
                                <div class="subtotal-line">
                                    @php $total = 0 @endphp
                                    @foreach ((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                    @endforeach
                                    <b class="stt-name">Subtotal <span class="sub">
                                            @if (session('cart'))
                                                @php $cartCount = 0 @endphp
                                                @foreach (session('cart') as $id => $details)
                                                    @php $cartCount += $details['quantity'] @endphp
                                                @endforeach
                                            @endif
                                            ( {{ $cartCount }} items)
                                        </span></b>
                                    <span class="stt-price">£{{ number_format($total, 2) }}</span>
                                </div>
                                <div class="subtotal-line">
                                    <b class="stt-name">Shipping</b>
                                    <span class="stt-price">£0.00</span>
                                </div>
                                <div class="tax-fee">
                                    <p class="title">Est. Taxes & Fees</p>
                                    {{-- <p class="desc">Based on 56789</p> --}}
                                </div>
                                <div class="btn-checkout">
                                    <a href="#" class="btn checkout">Check out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
