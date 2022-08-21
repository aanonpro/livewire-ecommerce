<div>

    {{-- <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title mt-4">brands</h2>
                        @foreach ($category->brands as $brandItem)
                            <label class="d-block">
                                <input type="checkbox" wire:model="brandInputs" value=" {{$brandItem->name}}" > {{$brandItem->name}}
                            </label>
                        @endforeach
                    </div>
                    <div class="single-sidebar">
                        <h2 class="sidebar-title mt-4">Price</h2>

                            <label class="d-block">
                                <input type="radio" name="priceSort" wire:model="priceInputs" value="high-to-low" > High to low
                            </label>
                            <label class="d-block">
                                <input type="radio" name="priceSort" wire:model="priceInputs" value="low-to-high" > Low to High
                            </label>

                    </div>
                </div>

                <div class="col-md-10">
                    <div class="product-content-right">
                        <div class="related-products-wrapper mt-4">
                            <div class="zigzag-bottom"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        @forelse ($products as $product)
                                        <div class="col-md-3 col-sm-6 col-12">
                                            <div class="single-shop-product border ">
                                                <div class= " pt-2">
                                                    @if ($product->quantity > 0)
                                                        <button type="button" class="btn btn-sm btn-success">
                                                            In Stock
                                                        </button>
                                                    @else
                                                        <span class="bg-danger">Out Stock</span>
                                                    @endif
                                                </div>
                                                <div class="product-upper">
                                                    @if ($product->productImages->count() > 0)
                                                    <a href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}" >
                                                        <img src="{{ asset($product->productImages[0]->image)}}" alt="{{ $product->name }}"  class="mx-auto d-block" style="width: 195px; height:243px;">
                                                    </a>
                                                    @endif
                                                </div>
                                                <h2 class=" text-center ">
                                                    <a  href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}">{{ $product->name }}</a>
                                                </h2>
                                                <div class="product-carousel-price text-center ">
                                                    <ins>$ {{$product->selling_price}}</ins> <del>${{$product->original_price}}</del>
                                                </div>
                                                <div class="product-option-shop pb-3 px-2">
                                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="">Add to cart</a>
                                                    <a class="add_to_cart_button float-end border view "  href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}" style="background: white ; color: #5a88ca; width: 70px; ">View</a>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </div> --}}


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @forelse ($products as $product)
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product border">
                        @if ($product->quantity > 0)
                        <button type="button" class="btn btn-sm btn-success">
                            In Stock
                        </button>
                        @else
                        <span class="bg-danger">Out Stock</span>
                        @endif

                        <div class="product-upper">
                            @if ($product->productImages->count() > 0)
                                <a href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}" >
                                    <img src="{{ asset($product->productImages[0]->image)}}" alt="{{ $product->name }}"  class="mx-auto d-block" style="width: 195px; height:243px;">
                                </a>
                            @endif
                        </div>
                        <h2 class="text-center"><a  href="{{ url('/collections/'.$product->category->slug.'/'.$product->slug) }}">{{ $product->name }}</a></h2>
                        <div class="product-carousel-price text-center">
                            <ins>$ {{$product->selling_price}}</ins> <del>${{$product->original_price}}</del>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                @empty
                <div class="col-md-3 col-sm-6">
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

</div>
