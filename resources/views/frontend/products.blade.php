@extends('frontend.layouts.app')
@section('title', 'المنتجات')
@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2>عن منتجاتنا</h2>
            <div class="breadcrumbs">
                <a href="{{ route('index') }}">الرئيسة</a>
                <span>منتجاتنا</span>
            </div>
        </section>
    </div>
</div>
<div class="blog_posts">
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-6 products-filter">
                <ul class="list-inline">
                    <li>
                        <a class="active-filter" href="#" data-filter="*">كل المنتجات</a>
                    </li>
                    @foreach($categories as $category)
                    <li>
                        <a href="#" data-filter="*">{{$category->title}}</a>
                    </li>
                    @endforeach

                </ul>
            </div>
            @foreach($products as $product)
            <div class="col-xl-6">
                <div class="blog-card d-flex flex-sm-row flex-column">
                    <div class="the_post_thumbnail">
                        <a href="#"><img src="{{ asset($product->image) }}" alt="Blog Title" height="260" /></a>
                    </div>
                    <div class="blog-card-body">
                        <span class="the_date">{{$product->created_at->format('d/m/Y')}}</span>
                        <h2 class="the_title">
                            <a href="#">{{ $product->title }}</a>
                        </h2>
                        <a href="" class="the_permalink">المزيد <i class="icofont-arrow-left"></i></a>
                        <span class="the_time">{{$product->created_at->format('H:i:s')}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
     <nav class="navigation pagination mb-3">
        <div class="nav-links">
           {{ $products->links() }}
        </div>
    </nav>
</div>

<div class="cta-section cta-bg mb-0">
    <div class="container">
        <div class="row align-items-center justify-content-xl-between justify-content-center">
            <div class="col-xl-7">
                <section>
                    <h2>تواصل مع متخصصي الرعاية الصحية <span> للحالات الطارئة </span></h2>
                </section>
            </div>
            <div class="col-xl-5 px-xl-0">
                <div class="action text-white text-center">
                    <h2>إتصل على : 0911361015</h2>
                    <p class="text-xl-right text-center">أحصل على إستشارة</p>
                    <i class="icofont-woman-in-glasses"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
