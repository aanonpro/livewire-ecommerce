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

<style>
    a.view:hover{
        background: #5a88ca !important; 
        color: white !important;
        }
</style>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>{{$category->name}} Products</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<livewire:frontend.product.index  :category="$category" />




@endsection
