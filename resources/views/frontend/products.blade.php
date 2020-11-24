@extends('frontend.layouts.app')

@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2>عن منتجاتنا</h2>
            <div class="breadcrumbs">
                <a href="index.php">الرئيسة</a>
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
                    <li>
                        <a href="#" data-filter="*">الطبية</a>
                    </li>
                    <li>
                        <a href="#" data-filter="*">العناية بالبشرة</a>
                    </li>
                    <li>
                        <a href="#" data-filter="*">الاطفال</a>
                    </li>
                    <li>
                        <a href="#" data-filter="*">العناية بالشعر</a>
                    </li>
                    <li>
                        <a href="#" data-filter="*">أغذية رياضية</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-6">
                <div class="blog-card d-flex flex-sm-row flex-column">
                    <div class="the_post_thumbnail">
                        <a href="#"><img src="{{ asset('img/blog/06.jpg') }}" alt="Blog Title" /></a>
                    </div>
                    <div class="blog-card-body">
                        <span class="the_date">25, February, 2020</span>
                        <h2 class="the_title">
                            <a href="#">If you find your self constantly book marking and health
                                sections.</a>
                        </h2>
                        <a href="{{ route('product-details') }}" class="the_permalink">Read more <i class="icofont-arrow-left"></i></a>
                        <span class="the_time">5 hours ago</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="blog-card d-flex flex-sm-row flex-column">
                    <div class="the_post_thumbnail">
                        <a href="#"><img src="{{ asset('img/blog/06.jpg') }}" alt="Blog Title" /></a>
                    </div>
                    <div class="blog-card-body">
                        <span class="the_date">25, February, 2020</span>
                        <h2 class="the_title">
                            <a href="#">If you find your self constantly book marking and health
                                sections.</a>
                        </h2>
                        <a href="#" class="the_permalink">Read more <i class="icofont-arrow-right"></i></a>
                        <span class="the_time">5 hours ago</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="blog-card d-flex flex-sm-row flex-column">
                    <div class="the_post_thumbnail">
                        <a href="#"><img src="{{ asset('img/blog/06.jpg') }}" alt="Blog Title" /></a>
                    </div>
                    <div class="blog-card-body">
                        <span class="the_date">25, February, 2020</span>
                        <h2 class="the_title">
                            <a href="#">If you find your self constantly book marking and health
                                sections.</a>
                        </h2>
                        <a href="#" class="the_permalink">Read more <i class="icofont-arrow-right"></i></a>
                        <span class="the_time">5 hours ago</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="blog-card d-flex flex-sm-row flex-column">
                    <div class="the_post_thumbnail">
                        <a href="#"><img src="{{ asset('img/blog/06.jpg') }}" alt="Blog Title" /></a>
                    </div>
                    <div class="blog-card-body">
                        <span class="the_date">25, February, 2020</span>
                        <h2 class="the_title">
                            <a href="#">If you find your self constantly book marking and health
                                sections.</a>
                        </h2>
                        <a href="#" class="the_permalink">Read more <i class="icofont-arrow-right"></i></a>
                        <span class="the_time">5 hours ago</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="blog-card d-flex flex-sm-row flex-column">
                    <div class="the_post_thumbnail">
                        <a href="#"><img src="{{ asset('img/blog/06.jpg') }}" alt="Blog Title" /></a>
                    </div>
                    <div class="blog-card-body">
                        <span class="the_date">25, February, 2020</span>
                        <h2 class="the_title">
                            <a href="#">If you find your self constantly book marking and health
                                sections.</a>
                        </h2>
                        <a href="#" class="the_permalink">Read more <i class="icofont-arrow-right"></i></a>
                        <span class="the_time">5 hours ago</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="blog-card d-flex flex-sm-row flex-column">
                    <div class="the_post_thumbnail">
                        <a href="#"><img src="{{ asset('img/blog/06.jpg') }}" alt="Blog Title" /></a>
                    </div>
                    <div class="blog-card-body">
                        <span class="the_date">25, February, 2020</span>
                        <h2 class="the_title">
                            <a href="#">If you find your self constantly book marking and health
                                sections.</a>
                        </h2>
                        <a href="#" class="the_permalink">Read more <i class="icofont-arrow-right"></i></a>
                        <span class="the_time">5 hours ago</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation pagination">
        <div class="nav-links">
            <a class="prev page-numbers" href="#"><i class="icofont-arrow-left"></i></a>
            <a class="page-numbers" href="#">1</a>
            <span class="page-numbers current">2</span>
            <a class="page-numbers" href="#">3</a>
            <a class="next page-numbers" href="#"><i class="icofont-arrow-right"></i></a>
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
