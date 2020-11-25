<header>
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
                <ul class="navbar-nav ml-auto ">
                    <li>
                        <a href="{{route('product.index')}}"> المنتجات</a>
                    </li>
                    <li>
                        <a href="{{ route('advertisement.create') }}"> اضافة اعلان</a>
                    </li>
                    <li>
                        <a href="{{ route('job.index') }}"> الوظائف</a>
                    </li>
                    <li>
                        <a href=""><i class="icofont-arrow-left" title="تسجيل الخروج"></i></a>
                    </li>
                </ul>
                <span class="navbar-text">
                <a href="{{route('index')}}" class="theme-btn">الذهاب الى الموقع الالكتروني</a>
                </span>

            </div>
        </div>
    </nav>
</header>
