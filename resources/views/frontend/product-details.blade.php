@extends('frontend.layouts.app')
@section('title', 'تفاصيل المنتج')
@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2>تفاصيل المنتج</h2>
            <div class="breadcrumbs">
                <a href="{{ route('index') }}">الرئيسية</a>
                <a href="{{ route('products') }}">المنتجات</a>
                <span>تفاصيل المنتج  </span>
            </div>
        </section>
    </div>
</div>
<div class="blog_post">
    <div class="container-xl">
        <div class="the_post_container">
            <!-- the_post start -->
            <div class="the_post">
                <figure>
                    <img src="{{asset($product->image)}}" alt="Blog title">
                </figure>
                <h2 class="the_title">{{ $product->title }}</h2>
                <div class="post_info">
                    <a href="#" class="date_time">{{$product->created_at}}</a>
                </div>
                <div>{!!  $product->description !!}</div>

            </div>
            <!-- the_post end -->
            <div class="post_footer">

            </div>
        </div>
    </div>
</div>
@stop
