@extends('site.master')

@section('title', config('app.name'))

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}">
@endsection

@section('content')
@section('background-image')
    @if (app()->isLocale('ar'))
        <img class="d-none d-sm-block position-absolute image-login z-n1" src="{{ asset('assets/img/login.png') }}"
            width="70%" />
    @else
        <img class="d-none d-sm-block position-absolute image-login-en z-n1" src="{{ asset('assets/img/login-en.png') }}"
            width="70%">
    @endif
@endsection
<header class="landing-page pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="mt-5">
                    <h1 class="fw-bold">{{ __('تكنو إليت') }}</h1>
                    <h2 class="fw-bold">{{ __('للتدريب والإستثمار وتكنولوجيا المعلومات') }}</h2>
                    <a class="btn create-bot-btn fw-bold mt-5"
                        href="{{ route('site.create_bot') }}">{{ __('أنشئ البوت الآن') }}</a>
                </div>

                <div class="content my-5">
                    <p class="mb-4 fw-bold">
                        {{ __('شارع الكنز - برج نعمة - الطابق السابع') }}
                    </p>
                    <div class="d-flex">
                        <p class="me-4 fw-bold">0000000000 - 1700200020</p>
                        <div class="before fw-bold">
                            <img width="30" height="25" src="{{ asset('assets/img/landing-phone.svg') }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex w-25 justify-content-between d-none d-sm-flex">
                    <a href=""><img width="25" src="{{ asset('assets/img/twitter.svg') }}"></a>
                    <a href=""><img width="25" src="{{ asset('assets/img/gmail.svg') }}"></a>
                    <a href=""><img width="25" src="{{ asset('assets/img/facebook.svg') }}"></a>
                </div>
                <div class="d-flex w-25 justify-content-between d-sm-none">
                    <a href=""><img width="25" src="{{ asset('assets/img/twitter-blue.svg') }}"></a>
                    <a href=""><img width="25" src="{{ asset('assets/img/gmail-blue.svg') }}"></a>
                    <a href=""><img width="25" src="{{ asset('assets/img/facebook-blue.svg') }}"></a>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12">
                <center>
                    <img class="mb-5" width="90%" class="d-none d-sm-block object-fit-contain"
                        src="{{ asset('assets/img/landing.svg') }}">
                </center>
            </div>
        </div>
    </div>
</header>


<section class="counts pt-0">
    <div class="container">
        <div class="owl-carousel owl-number">
            <div class="item rounded fw-bold count py-5 text-center">
                <h1 class="counter" data-count="20">+ 20 </h1>
                <p>{{ __('عقود و إتفاقيات') }}</p>
            </div>
            <div class="item rounded fw-bold count py-5 text-center">
                <h1 class="counter" data-count="75">+ 75</h1>
                <p>{{ __('مؤتمراتنا') }}</p>
            </div>
            <div class="item rounded fw-bold count py-5 text-center">
                <h1 class="counter" data-count="24">+ 24</h1>
                <p>{{ __('خدمة مميزة') }}</p>
            </div>
            <div class="item rounded fw-bold count py-5 text-center">
                <h1 class="counter" data-count="4415">+ 4415</h1>
                <p>{{ __('قصص نجاح') }}</p>
            </div>
            <div class="item rounded fw-bold count py-5 text-center">
                <h1 class="counter" data-count="16095">+ 16095</h1>
                <p>{{ __('طلاب وعملاء إليت') }}</p>
            </div>
        </div>
    </div>
</section>

<section class="about-us py-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h4>{{ __('نبذة') }}</h4>
                <h2 class="fw-bold mb-4">{{ __('تعرف على إليت') }}</h2>
                <p class="mb-4">
                    {{ __('نقدم استشارات في مجالات المبيعات والتسويق المختلفة، يعمل فريق من الخبراء في مجال التسويق والمبيعات بأعلى المعايير ، ونوفر فرص تدريب مميزة مع خبراء في كلا المجالين هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الاخرى') }}
                </p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <center>
                    <img class="mb-5" width="70%" class="d-none d-sm-block object-fit-contain"
                        src="{{ asset('assets/img/about-us.svg') }}">
                </center>
            </div>
        </div>
    </div>
</section>

<section class="landing-blogs pb-0">
    <div class="container">
        <h1 class="fw-bold">{{ __('مدوناتنا') }}</h1>
        <div class="line mb-2"></div>
        <div class="d-flex justify-content-between">
            <div class="w-75">
                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث
                    يمكنك
                    أن
                    تولد مثل هذا النص أو العديد من النصوص الاخرى
                </p>
            </div>
            @if (app()->isLocale('ar'))
                <div class="d-flex d-none d-sm-flex">
                    <img class="next-blog owl-btns" src="{{ asset('assets/img/right-arrow.svg') }}">
                    <img class="prev-blog owl-btns" src="{{ asset('assets/img/left-arrow.svg') }}">
                </div>
            @else
                <div class="d-flex d-none d-sm-flex">
                    <img class="prev-blog owl-btns" src="{{ asset('assets/img/left-arrow.svg') }}">
                    <img class="next-blog owl-btns" src="{{ asset('assets/img/right-arrow.svg') }}">
                </div>
            @endif
        </div>
        <div class="owl-carousel owl-blogs mt-5">
            <div class="box mx-auto item p-5 position-relative">
                <div class="{{ app()->isLocale('ar') ? 'ms-5' : 'me-5' }}">
                    <h4 class="fw-bold">التجارة الإلكترونية</h4>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                    </p>
                </div>
                <img class="position-absolute object-fit-cover" width="67%" height="60%"
                    src="{{ asset('assets/img/blog-image.png') }}">
                <div class="d-flex flex-row-reverse">
                    <a href="{{ route('site.blog', 1) }}">
                        {{ __('اقرأ المزيد') }}
                        {!! app()->isLocale('ar') ? '&#8592;' : '&#8594;' !!}</a>
                </div>
            </div>
            <div class="box mx-auto item p-5 position-relative">
                <div class="{{ app()->isLocale('ar') ? 'ms-5' : 'me-5' }}">
                    <h4 class="fw-bold">التجارة الإلكترونية</h4>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                    </p>
                </div>
                <img class="position-absolute object-fit-cover" width="67%" height="60%"
                    src="{{ asset('assets/img/blog-image.png') }}">
                <div class="d-flex flex-row-reverse">
                    <a href="{{ route('site.blog', 1) }}">
                        {{ __('اقرأ المزيد') }} {!! app()->isLocale('ar') ? '&#8592;' : '&#8594;' !!}</a>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="subscriptions py-0">
    <div class="container">
        <center>
            <h1 class="fw-bold">{{ __('الباقات') }}</h1>
            <div class="line mb-5"></div>
        </center>
        <div class="circle position-relative">
            <div class="icon p-3 position-absolute">
                <img width="80" src="{{ asset('assets/img/subscription-icon.svg') }}" alt="">
            </div>
            <div class="orbit mt-5">
                <ul>
                    <li>
                        <div class="box bg-fa">
                            <div class="content">
                                <div class="position-relative">
                                    <div class="ball rounded-circle position-absolute"></div>
                                    <h2 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h2>
                                    <div class="d-flex justify-content-between">
                                        <p>{{ __('شهرياً') }}</p>
                                        <p>25$</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>{{ __('نسبة ربح الشركة') }}</p>
                                        <p>30%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box bg-fa">
                            <div class="content">
                                <div class="position-relative">
                                    <div class="ball rounded-circle position-absolute"></div>
                                    <h2 class="mb-4 fw-bold">{{ __('باقة') }} 5000$ - 10000$</h2>
                                    <div class="d-flex justify-content-between">
                                        <p>{{ __('شهرياً') }}</p>
                                        <p>25$</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>{{ __('نسبة ربح الشركة') }}</p>
                                        <p>30%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box bg-fa">
                            <div class="content">
                                <div class="position-relative">
                                    <div class="ball rounded-circle position-absolute"></div>
                                    <h2 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h2>
                                    <div class="d-flex justify-content-between">
                                        <p>{{ __('شهرياً') }}</p>
                                        <p>25$</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>{{ __('نسبة ربح الشركة') }}</p>
                                        <p>30%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="box bg-fa">
                            <div class="content">
                                <div class="position-relative">
                                    <div class="ball rounded-circle position-absolute"></div>
                                    <h2 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h2>
                                    <div class="d-flex justify-content-between">
                                        <p>{{ __('شهرياً') }}</p>
                                        <p>25$</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>{{ __('نسبة ربح الشركة') }}</p>
                                        <p>30%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>

<section class="landing-courses">
    <div class="container">
        <div class="text-center">
            <h1 class="mb-3 fw-bold">{{ __('دوراتنا') }}</h1>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
                أن تولد مثل هذا النص أو العديد من النصوص الاخرى
            </p>
        </div>
        <div class="d-flex justify-content-around align-items-center mt-5">
            @if (app()->isLocale('ar'))
                <div class="d-none d-sm-block owl-btns next-course">
                    <img src="{{ asset('assets/img/right-arrow.svg') }}" alt="">
                </div>
            @else
                <div class="d-none d-sm-block owl-btns prev-course">
                    <img src="{{ asset('assets/img/left-arrow.svg') }}" alt="">
                </div>
            @endif

            <div class="owl-carousel owl-courses">
                <div class="card item mx-auto shadow-none border-0">
                    <div class="position-relative">
                        <img src="{{ asset('assets/img/single-course.png') }}" class="card-img-top" />
                        <span class="badge text-bg-warning position-absolute p-3 badge-card">100 USD</span>
                    </div>
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title fw-bold">عنوان الدورة</h5>
                            <span class="text-left text-secondary">2022 July,10</span>
                        </div>
                        <p class="card-text mb-5">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                            توليد هذا النص من مولد النص العربى
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('site.course', 1) }}" class="btn button-notfill rounded">
                                {{ __('طلب الالتحاق') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card item mx-auto shadow-none border-0">
                    <div class="position-relative">
                        <img src="{{ asset('assets/img/single-course.png') }}" class="card-img-top" />
                        <span class="badge text-bg-warning position-absolute p-3 badge-card">100 USD</span>
                    </div>
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title fw-bold">عنوان الدورة</h5>
                            <span class="text-left text-secondary">2022 July,10</span>
                        </div>
                        <p class="card-text mb-5">
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                            توليد هذا النص من مولد النص العربى
                        </p>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('site.course', 1) }}" class="btn button-notfill rounded">
                                {{ __('طلب الالتحاق') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @if (app()->isLocale('ar'))
                <div class="d-none d-sm-block owl-btns prev-course">
                    <img src="{{ asset('assets/img/left-arrow.svg') }}" alt="">
                </div>
            @else
                <div class="d-none d-sm-block owl-btns next-course">
                    <img src="{{ asset('assets/img/right-arrow.svg') }}" alt="">
                </div>
            @endif
        </div>

    </div>
</section>


<section class="posts pt-5">
    <div class="container">
        <div class="d-flex justify-content-around align-items-center position-relative">
            @if (app()->isLocale('ar'))
                <div class="d-none d-sm-block owl-btns next-post mt-8">
                    <img src="{{ asset('assets/img/right-arrow.svg') }}" alt="">
                </div>
            @else
                <div class="d-none d-sm-block owl-btns prev-post mt-8">
                    <img src="{{ asset('assets/img/left-arrow.svg') }}" alt="">
                </div>
            @endif
            <img class="image-logo position-absolute d-none d-sm-block" width="40%"
                src="{{ asset('assets/img/logo.png') }}" alt="">
            <div class="owl-carousel owl-posts">
                <div class="post mx-auto item p-5 position-relative">
                    <center>
                        <div class="post-image position-absolute">
                            <img src="{{ asset('assets/img/successful-entrepreneurs-analyzing-perspectives.svg') }}">
                            <p>10 July,2022</p>
                        </div>
                    </center>
                    <p class="text-center post-content mb-5">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                    </p>
                    <div class="interactions">
                        <div class="d-flex justify-content-between">
                            <p class="comments-number">30 تعليق</p>
                            <div class="d-flex d-sm-none">
                                <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                    تفاعل</p>
                                <img class="icons mb-3" src="{{ asset('assets/img/likes-comment.svg') }}">
                                <img class="icons mb-3" src="{{ asset('assets/img/love-comment.svg') }}">
                            </div>
                        </div>

                        <hr>
                        <div class="likes d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between like-comment">
                                <div class="interaction rounded-circle p-3">
                                    <img class="interaction-icons" src="{{ asset('assets/img/like.svg') }}">
                                </div>

                                <div class="interaction rounded-circle p-3">
                                    <img class="interaction-icons" src="{{ asset('assets/img/comment.svg') }}">
                                </div>

                                <div class="interaction rounded-circle p-3">
                                    <img class="interaction-icons" src="{{ asset('assets/img/share-post.svg') }}">
                                </div>

                            </div>
                            <div class="d-flex">
                                <div class="d-flex d-none d-sm-flex">
                                    <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                        تفاعل</p>
                                    <img src="{{ asset('assets/img/likes-comment.svg') }}" alt="">
                                    <img src="{{ asset('assets/img/love-comment.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="comments d-flex flex-column">
                            <div class="comment mb-3">
                                <div class="comment-content rounded bg-fa d-flex p-2 ">
                                    <div class="user-avatar me-3"></div>
                                    <div>
                                        <h4 class="fw-bold">محمد احمد</h4>
                                        <p class="comment-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس </p>
                                    </div>
                                </div>
                                <div class="float-end">
                                    <a href="">
                                        <span class="{{ app()->isLocale('ar') ? 'ms-3' : 'me3' }}">Like</span>

                                    </a>
                                    <a href="">
                                        <span>Reply</span>

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="post mx-auto item p-5 position-relative">
                    <center>
                        <div class="post-image position-absolute">
                            <img src="{{ asset('assets/img/successful-entrepreneurs-analyzing-perspectives.svg') }}">
                            <p>10 July,2022</p>
                        </div>
                    </center>
                    <p class="text-center post-content mb-5">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                    </p>
                    <div class="interactions">
                        <div class="d-flex justify-content-between">
                            <p class="comments-number">30 تعليق</p>
                            <div class="d-flex d-sm-none">
                                <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                    تفاعل</p>
                                <img class="icons mb-3" src="{{ asset('assets/img/likes-comment.svg') }}">
                                <img class="icons mb-3" src="{{ asset('assets/img/love-comment.svg') }}">
                            </div>
                        </div>

                        <hr>
                        <div class="likes d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between like-comment">
                                <div class="interaction rounded-circle p-3">
                                    <img class="interaction-icons" src="{{ asset('assets/img/like.svg') }}">
                                </div>

                                <div class="interaction rounded-circle p-3">
                                    <img class="interaction-icons" src="{{ asset('assets/img/comment.svg') }}">
                                </div>

                                <div class="interaction rounded-circle p-3">
                                    <img class="interaction-icons" src="{{ asset('assets/img/share-post.svg') }}">
                                </div>

                            </div>
                            <div class="d-flex">
                                <div class="d-flex d-none d-sm-flex">
                                    <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                        تفاعل</p>
                                    <img src="{{ asset('assets/img/likes-comment.svg') }}" alt="">
                                    <img src="{{ asset('assets/img/love-comment.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="comments d-flex flex-column">
                            <div class="comment mb-3">
                                <div class="comment-content rounded bg-fa d-flex p-2 ">
                                    <div class="user-avatar me-3"></div>
                                    <div>
                                        <h4 class="fw-bold">محمد احمد</h4>
                                        <p class="comment-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس </p>
                                    </div>
                                </div>
                                <div class="float-end">
                                    <a href="">
                                        <span class="{{ app()->isLocale('ar') ? 'ms-3' : 'me3' }}">Like</span>

                                    </a>
                                    <a href="">
                                        <span>Reply</span>

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="post mx-auto item p-5 position-relative">
                    <center>
                        <div class="post-image position-absolute">
                            <img src="{{ asset('assets/img/successful-entrepreneurs-analyzing-perspectives.svg') }}">
                            <p>10 July,2022</p>
                        </div>
                    </center>
                    <p class="text-center post-content mb-5">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                    </p>
                    <div class="interactions">
                        <div class="d-flex justify-content-between">
                            <p class="comments-number">30 تعليق</p>
                            <div class="d-flex d-sm-none">
                                <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                    تفاعل</p>
                                <img class="icons mb-3" src="{{ asset('assets/img/likes-comment.svg') }}">
                                <img class="icons mb-3" src="{{ asset('assets/img/love-comment.svg') }}">
                            </div>
                        </div>

                        <hr>
                        <div class="likes d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between like-comment">
                                <div class="interaction rounded-circle p-3">
                                    <img class="interaction-icons" src="{{ asset('assets/img/like.svg') }}">
                                </div>

                                <div class="interaction rounded-circle p-3">
                                    <img class="interaction-icons" src="{{ asset('assets/img/comment.svg') }}">
                                </div>

                                <div class="interaction rounded-circle p-3">
                                    <img class="interaction-icons" src="{{ asset('assets/img/share-post.svg') }}">
                                </div>

                            </div>
                            <div class="d-flex">
                                <div class="d-flex d-none d-sm-flex">
                                    <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                        تفاعل</p>
                                    <img src="{{ asset('assets/img/likes-comment.svg') }}" alt="">
                                    <img src="{{ asset('assets/img/love-comment.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="comments d-flex flex-column">
                            <div class="comment mb-3">
                                <div class="comment-content rounded bg-fa d-flex p-2 ">
                                    <div class="user-avatar me-3"></div>
                                    <div>
                                        <h4 class="fw-bold">محمد احمد</h4>
                                        <p class="comment-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس </p>
                                    </div>
                                </div>
                                <div class="float-end">
                                    <a href="">
                                        <span class="{{ app()->isLocale('ar') ? 'ms-3' : 'me3' }}">Like</span>

                                    </a>
                                    <a href="">
                                        <span>Reply</span>

                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @if (app()->isLocale('ar'))
                <div class="d-none d-sm-block owl-btns prev-post mt-8">
                    <img src="{{ asset('assets/img/left-arrow.svg') }}" alt="">
                </div>
            @else
                <div class="d-none d-sm-block owl-btns next-post mt-8">
                    <img src="{{ asset('assets/img/right-arrow.svg') }}" alt="">
                </div>
            @endif
        </div>
    </div>

</section>

<section class="elite-clients pb-0">

    <div class="text-center">
        <h1 class="fw-bold">{{ __('عملاء إليت') }}</h1>
        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
            حيث
            يمكنك
            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>
    </div>
    <div>
        <div class="reverse-curved curved">

        </div>

        <div class="curved">
            <div class="owl-carousel owl-clients">
                <div class="box item p-4 pt-5">
                    <div class="stars mb-4">
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                    </div>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                        العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                    <div class="d-flex">
                        <div class="user-avatar me-3"></div>
                        <div>
                            <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                            <p>مصمم</p>
                        </div>
                    </div>
                </div>
                <div class="box item p-4 pt-5">
                    <div class="stars mb-4">
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                    </div>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                        العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                    <div class="d-flex mt-4">
                        <div class="user-avatar me-3"></div>
                        <div>
                            <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                            <p>مصمم</p>
                        </div>
                    </div>
                </div>
                <div class="box item p-4 pt-5">
                    <div class="stars mb-4">
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                    </div>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                        العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                    <div class="d-flex mt-4">
                        <div class="user-avatar me-3"></div>
                        <div>
                            <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                            <p>مصمم</p>
                        </div>
                    </div>
                </div>
                <div class="box item p-4 pt-5">
                    <div class="stars mb-4">
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                    </div>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                        العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                    <div class="d-flex mt-4">
                        <div class="user-avatar me-3"></div>
                        <div>
                            <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                            <p>مصمم</p>
                        </div>
                    </div>
                </div>
                <div class="box item p-4 pt-5">
                    <div class="stars mb-4">
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                        <i class="fas fa-star full"></i>
                    </div>
                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                        العربى،
                        حيث
                        يمكنك
                        أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                    <div class="d-flex mt-4">
                        <div class="user-avatar me-3"></div>
                        <div>
                            <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                            <p>مصمم</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

            </div>
        </div>
    </div>
</section>

<section class="faq-section pt-0 position-relative z-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header border-0" id="headingOne">
                            <button class="accordion-button border border-bottom-0 border-0 text-decoration-none py-1"
                                type="button" data-bs-toggle="collapse" data-bs-target="#item1"
                                aria-expanded="false" aria-controls="item1">
                                <div class="d-flex align-items-center">
                                    <span class="h1 bullet">&#8226;</span>
                                    &nbsp; &nbsp; &nbsp;
                                    <span>
                                        هذا النص هو مثال لنص يمكن أن
                                        يستبدل في نفس ؟
                                    </span>
                                </div>
                            </button>
                        </h2>
                        <div id="item1" class="accordion-collapse border-0 collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Maiores, facere
                                voluptas eius cumque fuga ipsa quasi
                                blanditiis rerum veniam, deserunt
                                repellat dolores impedit recusandae
                                ipsam fugiat ex assumenda velit
                                asperiores.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header border-0" id="headingTwo">
                            <button
                                class="accordion-button border border-bottom-0 border-0 text-decoration-none collapsed py-1"
                                type="button" data-bs-toggle="collapse" data-bs-target="#item2"
                                aria-expanded="false" aria-controls="item2">
                                <div class="d-flex align-items-center">
                                    <span class="h1">&#8226;</span>
                                    &nbsp; &nbsp; &nbsp;
                                    <span>
                                        هذا النص هو مثال لنص يمكن أن
                                        يستبدل في نفس ؟
                                    </span>
                                </div>
                            </button>
                        </h2>
                        <div id="item2" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Earum provident
                                eligendi, autem assumenda placeat
                                inventore. Dolore optio, minus
                                repellendus ea sed quas! Reprehenderit
                                suscipit totam sequi autem ab tempore
                                corrupti.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header border-0" id="headingThree">
                            <button
                                class="accordion-button border border-bottom-0 border-0 text-decoration-none collapsed py-1"
                                type="button" data-bs-toggle="collapse" data-bs-target="#item3"
                                aria-expanded="false" aria-controls="item3">
                                <div class="d-flex align-items-center">
                                    <span class="h1">&#8226;</span>
                                    &nbsp; &nbsp; &nbsp;
                                    <span>
                                        هذا النص هو مثال لنص يمكن أن
                                        يستبدل في نفس ؟
                                    </span>
                                </div>
                            </button>
                        </h2>
                        <div id="item3" class="accordion-collapse border-0 collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Praesentium, nesciunt.
                                A vel veniam labore dolorum accusantium
                                quaerat fuga et, voluptas aliquid error?
                                Doloribus, ullam cupiditate est expedita
                                adipisci dignissimos explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header border-0" id="headingThree">
                            <button
                                class="accordion-button border border-bottom-0 border-0 text-decoration-none collapsed py-1"
                                type="button" data-bs-toggle="collapse" data-bs-target="#item4"
                                aria-expanded="false" aria-controls="item4">
                                <div class="d-flex align-items-center">
                                    <span class="h1">&#8226;</span>
                                    &nbsp; &nbsp; &nbsp;
                                    <span>
                                        هذا النص هو مثال لنص يمكن أن
                                        يستبدل في نفس ؟
                                    </span>
                                </div>
                            </button>
                        </h2>
                        <div id="item4" class="accordion-collapse border-0 collapse"
                            aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Praesentium, nesciunt.
                                A vel veniam labore dolorum accusantium
                                quaerat fuga et, voluptas aliquid error?
                                Doloribus, ullam cupiditate est expedita
                                adipisci dignissimos explicabo.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <center class="mt-4">
                    <img src="{{ asset('assets/img/FAQ-vector.png') }}" width="70%" />
                </center>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

@if (app()->isLocale('ar'))
    <script src="{{ asset('assets/js/owl-ar.js') }}"></script>
@else
    <script src="{{ asset('assets/js/owl-en.js') }}"></script>
@endif
@endsection
