@extends('frontend.layouts.app')

@section('content')
<div class="page_header d-flex align-items-center">
    <div class="container">
        <section>
            <h2>تفاصيل المنتج</h2>
            <div class="breadcrumbs">
                <a href="{{ route('index') }}">الرئيسية</a>
                <a href="{{ route('products') }}">المنتجات</a>
                <span>تفاصيل المنتج</span>
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
                    <img src="img/blog/07.jpg" alt="Blog title">
                </figure>
                <h2 class="the_title">Theraphi is really helpful for back pain?</h2>
                <div class="post_info">
                    <a href="#" class="date_time">25 August 2020.</a>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable cont ent of a page
                    when looking at its layout. The point of usingore Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposedto using 'Content here, content here', making. It is a long
                    establishe fact that a reader will be distracted by the its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                    content here', making.</p>
                <p>It is a long established fact that a reader will be distracted by the readable cont ent of a page
                    when looking at its layout. The point of usingore Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposedto using 'Content here, content here', making. It is a long
                    establishe fact that a reader will be distracted by the its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                    content here', making.</p>
                <ul>
                    <li>Free Consultation</li>
                    <li>Fitness Assessment</li>
                    <li>Fitness Assessment</li>
                    <li>24 Hours Service</li>
                    <li>Discounts & Updates</li>
                    <li>24 Hours Service</li>
                </ul>
                <p>It is a long established fact that a reader will be distracted by the readable cont ent of a page
                    when looking at its layout. The point of usingore Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposedto using 'Content here, content here', making. It is a long
                    establishe fact that a reader will be distracted by the its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                    content here', making.</p>
                <p>It is a long established fact that a reader will be distracted by the readable cont ent of a page
                    when looking at its layout. The point of usingore Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposedto using 'Content here, content here', making. It is a long
                    establishe fact that a reader will be distracted by the its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                    content here', making.</p>
                <div class="row justify-content-lg-between justify-content-center my-lg-5 my-4">
                    <div class="col-sm-4">
                        <img src="img/blog/08.jpg" alt="Blog inner image">
                    </div>
                    <div class="col-sm-4 mt-3 mt-sm-0">
                        <img src="img/blog/09.jpg" alt="Blog inner image">
                    </div>
                    <div class="col-sm-4 mt-3 mt-sm-0">
                        <img src="img/blog/10.jpg" alt="Blog inner image">
                    </div>
                </div>
                <p>It is a long established fact that a reader will be distracted by the readable cont ent of a page
                    when looking at its layout. The point of usingore Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposedto using 'Content here, content here', making. It is a long
                    establishe fact that a reader will be distracted by the its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                    content here', making.</p>
                <p>It is a long established fact that a reader will be distracted by the readable cont ent of a page
                    when looking at its layout. The point of usingore Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposedto using 'Content here, content here', making. It is a long
                    establishe fact that a reader will be distracted by the its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                    content here', making.</p>
                <p>It is a long established fact that a reader will be distracted by the readable cont ent of a page
                    when looking at its layout. The point of usingore Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposedto using 'Content here, content here', making. It is a long
                    establishe fact that a reader will be distracted by the its layout. The point of using Lorem Ipsum
                    is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                    content here', making.</p>
            </div>
            <!-- the_post end -->
            <div class="post_footer">
                <div class="row justify-content-between">
                    <div class="col-sm-6">
                        <p class="post_tags">
                            <span>Tags:</span>
                            <a href="#">Medical,</a>
                            <a href="#">Doctors,</a>
                            <a href="#">Theraphi</a>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="share_post">
                            <span>Share:</span>
                            <a href="#">Facebook,</a>
                            <a href="#">Twitter,</a>
                            <a href="#">Skype</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
