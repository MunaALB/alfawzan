@extends('frontend.layouts.app')
@section('title', 'الرئيسية')
@section('content')
<div class="hero-section">
    <div class="container-lg h-100 px-lg-0">
        <div class="row h-100 justify-content-lg-start justify-content-center align-items-center">
            <div class="col-xl-7 col-lg-8">
                <div class="hero-content">
                    <h3 style="color: white;">لأنكم تستحقون الأفضل</h3>
                    <h2> نحرص دائماً على تقديم المنتجات التي تحافظ على نمط حياتكم صحي</h2>
                    <a href="#" class="theme-btn"> إطلع على منتجاتنا الحصرية <i class="icofont-arrow-left"></i> </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cta-section ">
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
<div class="service-section" id="about-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-header text-center col-lg-8">
                <h2>أصناف منتجاتنا</h2>
                <p>نحن حريصون على تقديم أفضل الخدمات في السوق، سواء كان ذلك من خلال المنتجات التي نقدمها أو
                    من خلال مميزاتنا مقارنة بالمنافسين الآخرين ، وهناك أسباب تجعلك تقرر التعامل معنا بشكل
                    خاص بغض النظر عن الصيدليات الأخرى مثل تنوع طرق الدفع والجودة العالية للمنتجات.</p>
            </div>
        </div>
    </div>

    <div class="container-xl px-xl-0">
        <div class="row no-gutters">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card">
                    <i class="flaticon-026-stethoscope"></i>
                    <h2>العناية بالطفل</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card">
                    <i class="flaticon-025-spray"></i>
                    <h2>العناية بالشعر</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card">
                    <i class="flaticon-006-sunscreen"></i>
                    <h2>العناية بالبشرة</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card">
                    <i class="flaticon-018-mortar"></i>
                    <h2>منتجات طبيعية</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card">
                    <i class="flaticon-016-first-aid-kit"></i>
                    <h2>مستلزمات طبية</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card">
                    <i class="flaticon-020-pharmacist"></i>
                    <h2>العناية بالمرأة</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card">
                    <i class="flaticon-019-pharmacist"></i>
                    <h2>العناية بالرجل </h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="service-card">
                    <i class="flaticon-036-whey-protein"></i>
                    <h2>أغذية رياضية</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@if($advertised_product)
<div class="video-section">
    <div class="container-xl px-xl-0">
        <div class="video-section-content">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="video-banner">
                        <img src="{{ asset($advertised_product->image)}}" alt="Video Banner" />
                    </div>
                </div>

                <div class="col-lg-6 px-xl-5 order-lg-1 order-2">
                    <section>
                        <h3>منتج مميز يليق بزبائننا المميزين</h3>
                        <h2>{{ $advertised_product->title }}
                        </h2>
                        <a href="{{ route('details',['product'=>$advertised_product->id]) }}" class="theme-btn"> تفاصيل المنتج <i class="icofont-arrow-left"></i> </a>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="team-section" id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-header text-center col-lg-8">
                <h2>تعرف على فريقنا </h2>
                <p> فريق عمل مدرب محترف على مدار 24 ساعة طوال أيام الأسبوع من الصيادلة المتخصصين لتقديم خدمة
                    طبية كاملة ودقيقة. كما تخضع جميع المنتجات المتوفرة في صيدلية الفوزان لفحص صيدلاني صارم
                    من قبل إدارة الصيدلية، كما يشرف عليها صيادلة مؤهلون تم اختيارهم وفقًا لمعايير محددة
                    وواضحة.</p>
            </div>
        </div>
    </div>
    <div class="container-lg px-lg-0">
        <div class="row">

            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="img/team/05.jpg" alt="Team Member Name" />
                    </div>
                    <h2><a href="#">محمد علي</a></h2>
                    <p><a href="#">المدير العام</a></p>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="img/team/06.jpg" alt="Team Member Name" />
                    </div>
                    <h2><a href="#">الآء صالح</a></h2>
                    <p><a href="#">إخصائية عناية صحية</a></p>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="img/team/07.jpg" alt="Team Member Name" />
                    </div>
                    <h2><a href="#">فوزي توفيق</a></h2>
                    <p><a href="#"> مشتريات </a></p>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="team-member blank">
                    <h2>إنضم إلينا</h2>
                    <p> إن كنت تأنس في نفسك الكفاءة ولديك الرغبة في الإنضمام إلينا لا تتردد في ذلك</p>
                    <a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                        <i class="icofont-plus"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.modals.apply-to-job-modal');
@if($advertisement_image)
<div class="fun-facts">
    <img src="{{ asset($advertisement_image->image) }}" width=100%>
</div>
@endif
<div class="testimony-section" dir="ltr" id="testimonial">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-header text-center col-lg-8">
                <h2>آراء عملائنا</h2>
                <p> منذ إفتتاح صيدلية الفوزان وعلى مر السنوات من تقديم خدماتها، لطالما كانت الوجهة الأولى
                    لمعظم الزبائن الذين قمنا بكسب ثقتهم كما نسعى لكسب ثقة المزيد من الزبائن وذلك بفضل جودة
                    منتجاتنا التي نقدمها لهم </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="testimony owl-carousel">
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
                <div class="testimony-item">
                    <div class="d-flex justify-content-between align-items-center testimony-header">
                        <div class="reviewer-photo">
                            <img src="img/testimony/01.jpg" alt="Reviewer Name" />
                        </div>
                        <i class="icofont-quote-right"></i>
                    </div>
                    <div class="d-flex justify-content-between reviewer">
                        <div class="reviewer-detail">
                            <h2>فوزي توفيق</h2>
                            <p>مشتريات</p>
                        </div>
                        <div class="the_ratings">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                    </div>
                    <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                        أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس
                        نوستريد

                        .</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-section" dir="ltr" id="products">
    <div class="container-md px-md-0">
        <div
            class="d-flex flex-wrap blog-section-header justify-content-xl-between text-xl-left text-center align-items-center">

            <div class="col-xl-5 pl-xl-0">
                <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>
            </div>

            <div class="col-xl-5">
                <h2> أحدث المقالات عن <span>منتجاتنا الحصرية </span> هُنا </h2>
            </div>
            <div class="col-xl-2">
                <div class="blog-carousel-control">
                    <span class="blog-carousel-nav btn-prev">
                        <i class="icofont-arrow-left"></i>
                    </span>
                    <span class="blog-carousel-nav btn-next">
                        <i class="icofont-arrow-right"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-md px-md-0">
        <div class="row">
            <div class="slide-progress"></div>
            <div class="blog-carousel owl-carousel">
                @foreach($products as $product)
                <div class="blog-card d-flex flex-sm-row-reverse flex-column">
                    <div class="the_post_thumbnail">
                        <img src="{{ asset($product->image) }}" alt="Blog Title" height="260" />
                    </div>
                    <div class="blog-card-body">
                        <span class="the_date">{{$product->created_at->format('d/m/Y')}}</span>
                        <h2 class="the_title">
                            <a href="#">{{ $product->title }}</a>
                        </h2>
                        <a href="{{ route('details',['product'=>$product->id]) }}" class="the_permalink"><i class="icofont-arrow-left"></i>اقرأ المزيد</a>
                        <span class="the_time">{{$product->created_at->format('H:i:s')}}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<div class="contact-area" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="section-header text-center col-xl-7">
                <h2>هل تحتاج الى مساعدة؟</h2>
                <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور
                    أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                    أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات .</p>
            </div>
        </div>
        <div class="the_contacts">
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-4 mt-3 mt-md-0">
                        <div class="the_contact clearfix wow slideInUp">
                            <i class="icofont-envelope-open"></i>
                            <section>
                                <h3>البريد الإلكتروني:</h3>
                                <p>emergency@alfawzan.ly</p>
                                <p>salesteam@alfawzan.ly</p>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="the_contact clearfix wow slideInUp">
                            <i class="icofont-ui-call"></i>
                            <section>
                                <h3>رقم الهاتف :</h3>
                                <p> 911361015 218 +</p>
                                <p> 911361015 218 +</p>
                            </section>
                        </div>
                    </div>

                    <div class="col-md-4 mt-3 mt-md-0">
                        <div class="the_contact clearfix wow slideInUp">
                            <i class="icofont-google-map"></i>
                            <section>
                                <h3>العنوان :</h3>
                                <p> طريق زناتة الجديدة</p>
                                <p>طرابلس، ليبيا</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <form class="d-flex flex-wrap justify-content-between contact-form">
                    <div class="inputs">
                        <input type="text" placeholder="الإسم">
                        <input type="email" placeholder="البريد الإلكتروني">
                        <input type="text" placeholder="رقم الهاتف">
                    </div>
                    <div class="text-area text-center">
                        <textarea placeholder="يرجى كتابة الرسالة أو الإستفسار هنا"></textarea>
                        <button type="submit" class="theme-btn">
                            أرسل <i class="icofont-arrow-left"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d209.45295420808398!2d13.2324863727997!3d32.86517657243603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13a89394a2afc5fd%3A0x92cfeaf6027ada38!2z2LXZitiv2YTZitmHINin2YTZgdmI2LLYp9mG!5e0!3m2!1sar!2sly!4v1604358043437!5m2!1sar!2sly"
            width=100% height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    new Vue({
        el: '#apply',
        data: {
            applicant_name: '',
            applicant_email: '',
            applicant_cv: '',
            errors: [],
        },

        methods: {

            applyToJob() {
                this.applicant_cv = document.getElementById('cv').files[0];
                let data = new FormData();
                data.append('applicant_name', this.applicant_name);
                data.append('applicant_email', this.applicant_email);
                data.append('applicant_cv', this.applicant_cv);
                let settings = {
                    headers: {
                        "content-type": "multipart/form-data"
                    }
                };

                axios
                    .post("{{ route('applyToJob')}}", data, settings)
                    .then(response => {
                        if (response.data.status == "error") {
                            this.errors = response.data.error;
                            return;
                        }
                        sweetalert('success', 'تم', 'تم التقديم بنجاح')
                            $('#exampleModal').modal('hide')
                    })
            }
        }
    });

</script>
@stop
