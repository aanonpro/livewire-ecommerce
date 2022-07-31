@extends('layouts.app')

@section('title')
All Categories
@endsection

@section('content')
{{--
<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        @forelse ($categories as $categoryItem)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ "$categoryItem->image" }}" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="{{ url('/collections/'.$categoryItem->slug) }}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>

                                <h2 class="text-center"><a href="{{ url('/collections/'.$categoryItem->slug) }}">{{ $categoryItem->name }}</a></h2>

                                <div class="product-carousel-price text-center">
                                    <ins>{{$categoryItem->selling_price}}</ins> <del>$100.00</del>
                                </div>
                            </div>
                        @empty
                            <div class="single-product">
                                <div class="col-md-12">
                                    <h5>No Products Available</h5>
                                </div>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area --> --}}

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Category</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="promo-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            @forelse ($categories as $categoryItem)
            <div class="col-md-3 col-sm-6">
                {{-- <img src="{{"$categoryItem->image"}}" alt="" > --}}
                <div class="single-promo promo1" style="height: 170px; ">
                    <i class="fa fa-refresh"></i>
                    <a class="text-decoration-none text-white" href="{{ url('/collections/'.$categoryItem->slug) }}">
                        <p>{{ $categoryItem->name}}</p>
                    </a>
                </div>

            </div>
            @empty
                <div class="col-md-12">
                    <h5>No Products Available</h5>
                </div>
            @endforelse

        </div>
    </div>
</div> <!-- End promo area -->





@endsection
