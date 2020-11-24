        <header>
            <div class="topbar d-none d-md-block">
                <div class="container-xl">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-5">
                            <p class="topbar-info">
                                <i class="icofont-google-map"></i>
                                <span>طريق زناتة الجديدة بالقرب من كوبري السريع</span>
                            </p>
                        </div>
                        <div class="col-sm-7 text-right">
                            <p class="topbar-info">
                                <i class="icofont-envelope-open"></i>
                                <span>emergency@alfawzan.ly</span>
                            </p>
                            <p class="topbar-info">
                                <i class="icofont-headphone-alt-1"></i>
                                <span> 911361015 218 +</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.topbar -->
            <nav class="navbar navbar-expand-lg main-nav sticky">
                <div class="container-xl px-15 px-lg-0">
                    <a class="navbar-brand" href="index.php">
                        <img src="{{ asset('img/logo.png') }}" alt="Site Logo" height="70">

                    </a>
                    <p style="font-weight: bold; color: white;"> صيدلية <br> الفوزان </p>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu"
                        aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main_menu">
                        <ul class="navbar-nav ml-auto">
                            <li>
                                <a href="index.php">الرئيسية</a>
                            </li>
                            <li>
                                <a href="{{ route('index') }}#about-us"> من نحن </a>
                            </li>
                            <li>
                                <a href="{{ route('index') }}#team">فريقنا</a>
                            </li>
                            <li>
                                <a href="{{ route('index') }}#testimonial">آراء</a>
                            </li>
                            <li>
                                <a href="{{route('products')}}">منتجاتنا </a>
                            </li>

                        </ul>
                        <div class="d-block d-md-none">
                            <p class="topbar-info">
                                <i class="icofont-google-map"></i>
                                <span>طريق زناتة الجديدة بالقرب من كوبري السريع</span>
                            </p>
                            <p class="topbar-info">
                                <i class="icofont-envelope-open"></i>
                                <span>emergency@alfawzan.ly</span>
                            </p>
                            <p class="topbar-info">
                                <i class="icofont-headphone-alt-1"></i>
                                <span>911361015 218 +</span>
                            </p>
                        </div>
                        <span class="navbar-text">
                            <a href="{{ route('index') }}#contact" class="theme-btn">أحصل على إستشارة</a>
                        </span>
                    </div>
                </div>
            </nav>
        </header>
