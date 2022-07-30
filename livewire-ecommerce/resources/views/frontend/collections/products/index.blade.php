@extends('layouts.app')

@section('title')
{{ $category->meta_title }}
@endsection

@section('meta_description')
{{ $category->meta_description }}
@endsection

@section('meta_keyword')
{{ $category->meta_keyword }}
@endsection


@section('content')


<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>products</h2>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            @forelse ($products as $product)
            <div class="col-md-3 col-sm-6">
                <div class="single-shop-product">

                    <div class="product-upper">



                        @if ($product->productImages->count() > 0)
                        <a href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}">
                            <img src="{{ asset($product->productImages[0]->image)}}" alt="{{ $product->name }}">
                        </a>
                        @endif

                        @if ($product->quantity > 0)

                        <span class=" badge p-2 bg-success">In Stock</span>

                        @else

                            <span class="bg-danger">Out Stock</span>

                        @endif


                    </div>
                    <h2><a href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}">{{ $product->name }}</a></h2>
                    <div class="product-carousel-price">
                        <ins>$ {{$product->selling_price}}</ins> <del>${{$product->original_price}}</del>
                    </div>

                    <div class="product-option-shop">
                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-12">
                <div class="py-3">
                    <h3>No Products Available for {{ $category->name }}</h3>
                </div>

            </div>
            @endforelse

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
