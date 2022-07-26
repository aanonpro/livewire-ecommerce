@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="col-lg-9 grid-margin stretch-card" style="margin: auto">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Products
                            <a href="{{ url('admin/products') }}" class="text-white btn btn-danger btn-sm float-end">Back</a>

                        </h4>
                        <p class="card-description">
                            Products info
                        </p>

                        @if ($errors->any())
                            <div class="alert alert-warning">
                                @foreach ($errors->all() as $error)
                                    <div>
                                        {{$error }}
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if(session('status'))
                            <h4 class="alert alert-success mb-2">{{ session('status') }}</h4>
                        @endif

                        <form action="{{ url('admin/products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home-tab-pane" type="button" role="tab"
                                        aria-controls="home-tab-pane" aria-selected="true">
                                        Home
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="seotag-tab" data-bs-toggle="tab"
                                        data-bs-target="#seotag-tab-pane" type="button" role="tab"
                                        aria-controls="seotag-tab-pane" aria-selected="false">
                                        SEO Tag
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="details-tab" data-bs-toggle="tab"
                                        data-bs-target="#details-tab-pane" type="button" role="tab"
                                        aria-controls="details-tab-pane" aria-selected="false">
                                        Details
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="image-tab" data-bs-toggle="tab"
                                        data-bs-target="#image-tab-pane" type="button" role="tab"
                                        aria-controls="image-tab-pane" aria-selected="false">
                                        Products Image
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">

                                    <div class="mb-3">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected':''}}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Product Name</label>
                                        <input type="text" name="name" value="{{ $product->name }}" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Product Slug</label>
                                        <input type="text" name="slug" value="{{ $product->slug }}" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Select Brand</label>
                                        <select name="brand" class="form-control">
                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->name }}" {{ $brand->name == $product->brand ? 'selected':''}}>
                                                    {{ $brand->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Short Desciption (500 words)</label>
                                        <textarea name="short_description" class="form-control" rows="4">{{ $product->short_description }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
                                    </div>

                                </div>
                                <div class="tab-pane fade border p-3 " id="seotag-tab-pane" role="tabpanel" aria-labelledby="seotag-tab"
                                    tabindex="0">

                                    <div class="mb-3">
                                        <label>Meta Title</label>
                                        <input type="text" name="meta_title" value="{{ $product->meta_title }}" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Meta Desciption</label>
                                        <textarea name="meta_description" class="form-control" rows="4">{{ $product->meta_description }}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>Meta Keyword</label>
                                        <textarea name="meta_keyword" class="form-control" rows="4">{{ $product->meta_keyword }}</textarea>
                                    </div>

                                </div>
                                <div class="tab-pane fade border p-3 " id="details-tab-pane" role="tabpanel"
                                    aria-labelledby="details-tab" tabindex="0">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Original Price</label>
                                                <input type="number" name="original_price" value="{{ $product->original_price }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Selling Price</label>
                                                <input type="number" name="selling_price" value="{{ $product->selling_price }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Quantity</label>
                                                <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Trending</label>
                                                <input type="checkbox" name="trending" {{$product->trending == '1' ?'checked':''}} >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label>Status</label>
                                                <input type="checkbox" name="status" {{$product->status == '1' ?'checked':''}}>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane fade border p-3 " id="image-tab-pane" role="tabpanel"
                                    aria-labelledby="image-tab" tabindex="0">
                                    <div class="mb-3">
                                        <label>Upload Product Image</label>
                                        <input type="file" multiple class="form-control" name="image[]" >
                                    </div>
                                    <div>
                                        @if ($product->productImages)
                                        <div class="row">
                                            @foreach ($product->productImages as $image)
                                            <div class="col-md-2">

                                                <img src="{{ asset($image->image) }}" style="width: 80px; height: 80px;" class="me-4 border" alt="Img">
                                                <a href="{{ url('admin/product-image/'.$image->id.'/delete') }}" class="d-block">Remove</a>

                                            </div>
                                            @endforeach
                                        </div>
                                        @else
                                            <h5>No Image Added</h5>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary text-white">Update</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
