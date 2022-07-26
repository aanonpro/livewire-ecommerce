@extends('layouts.app')

@section('title', 'Home Page')

@section('content')

{{-- @include('frontend.inc.header') --}}

<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $key => $sliderItem)


        <div class="carousel-item {{ $key == '0' ? 'active':''}} ">
            @if ($sliderItem->image)
            <img src="{{ $sliderItem->image }}" class="d-block w-100" style="height: 362px;" alt="...">
            @endif

            <div class="carousel-caption d-none d-md-block text-end text-primary">
                <h3>{{ $sliderItem->title }}</h3>
                <p>{{ $sliderItem->description }}</p>
            </div>
        </div>
        @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>


<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        @forelse ($latest_posts as $latest_item)
                            <div class="single-product" >
                                <div class="product-f-image" >
                                    @if ($latest_item->productImages->count() > 0)
                                        <img src="{{ asset($latest_item->productImages[0]->image)}}" alt="{{ $latest_item->name }}" >
                                    @endif
                                    <div class="product-hover">
                                        <div class="mb-5">
                                            <a href="#" class="add-to-cart-link "><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        </div>
                                        <div class="mb-5">
                                            <a href="{{ url('collections/'.$latest_item->category->slug) }}" class="view-details-link "><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>
                                </div>

                                <h2><a  href="{{ url('collections/'.$latest_item->category->slug) }}">{{ $latest_item->name }}</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$ {{$latest_item->selling_price}}</ins> <del>${{$latest_item->original_price}}</del>
                                </div>
                            </div>
                        @empty
                        <div class="single-product">
                            <h3>No Latest post available</h3>
                        </div>
                        @endforelse
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

{{-- <hr style="color: solid 1px gray; " /> --}}
{{-- <div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <img src="{{ asset('frontend/img/brand1.png')}}" alt="">
                        <img src="{{ asset('frontend/img/brand2.png')}}" alt="">
                        <img src="{{ asset('frontend/img/brand3.png')}}" alt="">
                        <img src="{{ asset('frontend/img/brand4.png')}}" alt="">
                        <img src="{{ asset('frontend/img/brand5.png')}}" alt="">
                        <img src="{{ asset('frontend/img/brand6.png')}}" alt="">
                        <img src="{{ asset('frontend/img/brand1.png')}}" alt="">
                        <img src="{{ asset('frontend/img/brand2.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area --> --}}

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top Sellers</h2>
                    <a href="" class="wid-view-more">View All</a>
                    @forelse ($recent_posts as $recent_items)
                        <div class="single-wid-product">
                            @if ($recent_items->productImages->count() > 0)
                                <a href="{{ url('collections/'.$recent_items->category->slug.'/'.$recent_items->slug) }}"><img src="{{ asset($recent_items->productImages[0]->image)}}" alt="{{ $latest_item->name }}" class="product-thumb"></a>
                            @endif
                            <h2><a href="{{ url('collections/'.$recent_items->category->slug.'/'.$recent_items->slug) }}">{{ $recent_items->name }}</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$ {{$recent_items->selling_price}}</ins> <del>${{$recent_items->original_price}}</del>
                            </div>
                        </div>
                    @empty
                        <div class="single-wid-product">
                            <h3>No Top sellers available</h3>
                        </div>
                    @endforelse
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Recently Viewed</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    @forelse ($recent_view as $recent_views)
                    <div class="single-wid-product">
                        @if ($recent_views->productImages->count() > 0)
                            <a href="{{ url('collections/'.$recent_views->category->slug.'/'.$recent_views->slug) }}"><img src="{{ asset($recent_views->productImages[0]->image)}}" alt="{{ $recent_views->name }}" class="product-thumb"></a>
                        @endif
                        <h2><a href="{{ url('collections/'.$recent_views->category->slug.'/'.$recent_views->slug) }}">{{ $recent_views->name }}</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$ {{$recent_views->selling_price}}</ins> <del>${{$recent_views->original_price}}</del>
                        </div>
                    </div>
                @empty
                    <div class="single-wid-product">
                        <h3>No Top sellers available</h3>
                    </div>
                @endforelse
                   
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Top New</h2>
                    <a href="#" class="wid-view-more">View All</a>
                    @forelse ($recent_new as $recent_new_items)
                    <div class="single-wid-product">
                        @if ($recent_items->productImages->count() > 0)
                            <a href="{{ url('collections/'.$recent_new_items->category->slug.'/'.$recent_new_items->slug) }}"><img src="{{ asset($recent_new_items->productImages[0]->image)}}" alt="{{ $recent_new_items->name }}" class="product-thumb"></a>
                        @endif
                        <h2><a href="{{ url('collections/'.$recent_new_items->category->slug.'/'.$recent_new_items->slug) }}">{{ $recent_new_items->name }}</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>$ {{$recent_new_items->selling_price}}</ins> <del>${{$recent_new_items->original_price}}</del>
                        </div>
                    </div>
                @empty
                    <div class="single-wid-product">
                        <h3>No Top sellers available</h3>
                    </div>
                @endforelse
                   
                </div>
            </div>
        </div>
    </div>
</div> <!-- End product widget area -->

@endsection
