@extends('site.master')

@section('title', config('app.name') . ' | Blogs')

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

<header class="blogs-header headers">
    <div class="container align-items-center">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="headers-text">
                    <h1 class="fw-bold">{{ __('مدوناتنا') }}</h1>
                    <p>
                        لديك أي استفسار أو مشكلة ؟ لا تتردد في التواصل معنا
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <img class="d-none d-sm-block" width="700" src="assets/img/Blogs.png" />
            </div>
        </div>
    </div>
</header>

<section class="blogs pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card border-0 mb-6">
                            <div class="position-relative">
                                <img src="{{ asset('assets/img/blog-image.png') }}" class="card-img-top" />
                                <span class="badge text-bg-warning position-absolute p-3 badge-card">تداول العملات
                                    الرقمية</span>
                            </div>
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title fw-bold">عنوان المقالة</h5>
                                    <span class="text-left text-secondary">2022 July,10</span>
                                </div>
                                <p class="card-text mb-5">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                    توليد هذا النص من مولد النص العربى
                                </p>
                                <a href="{{ route('site.blog', 1) }}" class="btn button-notfill float-end rounded">اقرأ
                                    المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card border-0 mb-6">
                            <div class="position-relative">
                                <img src="{{ asset('assets/img/blog-image.png') }}" class="card-img-top" />
                                <span class="badge text-bg-warning position-absolute p-3 badge-card">تداول العملات
                                    الرقمية</span>
                            </div>
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title fw-bold">عنوان المقالة</h5>
                                    <span class="text-left text-secondary">2022 July,10</span>
                                </div>
                                <p class="card-text mb-5">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                    توليد هذا النص من مولد النص العربى
                                </p>
                                <a href="{{ route('site.blog', 1) }}" class="btn button-notfill float-end rounded">
                                    {{ __('اقرأ المزيد') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card border-0 mb-6">
                            <div class="position-relative">
                                <img src="{{ asset('assets/img/blog-image.png') }}" class="card-img-top" />
                                <span class="badge text-bg-warning position-absolute p-3 badge-card">تداول العملات
                                    الرقمية</span>
                            </div>
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title fw-bold">عنوان المقالة</h5>
                                    <span class="text-left text-secondary">2022 July,10</span>
                                </div>
                                <p class="card-text mb-5">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                    توليد هذا النص من مولد النص العربى
                                </p>
                                <a href="{{ route('site.blog', 1) }}" class="btn button-notfill float-end rounded">
                                    {{ __('اقرأ المزيد') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card border-0 mb-6">
                            <div class="position-relative">
                                <img src="{{ asset('assets/img/blog-image.png') }}" class="card-img-top" />
                                <span class="badge text-bg-warning position-absolute p-3 badge-card">تداول العملات
                                    الرقمية</span>
                            </div>
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title fw-bold">عنوان المقالة</h5>
                                    <span class="text-left text-secondary">2022 July,10</span>
                                </div>
                                <p class="card-text mb-5">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                    توليد هذا النص من مولد النص العربى
                                </p>
                                <a href="{{ route('site.blog', 1) }}" class="btn button-notfill float-end rounded">
                                    {{ __('اقرأ المزيد') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card border-0 mb-6">
                            <div class="position-relative">
                                <img src="{{ asset('assets/img/blog-image.png') }}" class="card-img-top" />
                                <span class="badge text-bg-warning position-absolute p-3 badge-card">تداول العملات
                                    الرقمية</span>
                            </div>
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title fw-bold">عنوان المقالة</h5>
                                    <span class="text-left text-secondary">2022 July,10</span>
                                </div>
                                <p class="card-text mb-5">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                    توليد هذا النص من مولد النص العربى
                                </p>
                                <a href="{{ route('site.blog', 1) }}" class="btn button-notfill float-end rounded">
                                    {{ __('اقرأ المزيد') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card border-0 mb-6">
                            <div class="position-relative">
                                <img src="{{ asset('assets/img/blog-image.png') }}" class="card-img-top" />
                                <span class="badge text-bg-warning position-absolute p-3 badge-card">تداول العملات
                                    الرقمية</span>
                            </div>
                            <div class="card-body p-3">
                                <div class="d-flex justify-content-between">
                                    <h5 class="card-title fw-bold">عنوان المقالة</h5>
                                    <span class="text-left text-secondary">2022 July,10</span>
                                </div>
                                <p class="card-text mb-5">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                    توليد هذا النص من مولد النص العربى
                                </p>
                                <a href="{{ route('site.blog', 1) }}" class="btn button-notfill float-end rounded">
                                    {{ __('اقرأ المزيد') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                <div class="container">
                    <aside class="last-blogs">
                        <div class="mb-5">
                            <h1>{{ __('آخر مدوناتنا') }}</h1>
                            <div class="line mb-4"></div>
                            <div class="single-last-blog">
                                <div class="d-flex mb-3">
                                    <div class="image-holder bg-light p-1 me-3">
                                        <img width="60" height="60"
                                            src="{{ asset('assets/img/blog-image.png') }}" alt="" />
                                    </div>
                                    <div class="d-flex flex-column last-blogs-text">
                                        <small>27 July,2022</small>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-last-blog">
                                <div class="d-flex mb-3">
                                    <div class="image-holder bg-light p-1 me-3">
                                        <img width="60" height="60"
                                            src="{{ asset('assets/img/blog-image.png') }}" alt="" />
                                    </div>
                                    <div class="d-flex flex-column last-blogs-text">
                                        <small>27 July,2022</small>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single-last-blog">
                                <div class="d-flex mb-3">
                                    <div class="image-holder bg-light p-1 me-3">
                                        <img width="60" height="60"
                                            src="{{ asset('assets/img/blog-image.png') }}" alt="" />
                                    </div>
                                    <div class="d-flex flex-column last-blogs-text">
                                        <small>27 July,2022</small>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="social-media mb-5">
                            <div class="social-media mb-5">
                                <h1>{{ __('تابعنا') }}</h1>
                                <div class="line mb-4"></div>
                                <div class="d-flex justify-content-between icons w-100">
                                    <a href="#"><i class="p-2 rounded-circle fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="p-2 rounded-circle fab fa-instagram"></i></a>
                                    <a href="#"><i class="p-2 rounded-circle fab fa-twitter"></i></a>
                                    <a href="#"><i class="p-2 rounded-circle fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                    </aside>
                </div>
            </div>

            <div class="pagination-holder rounded-4 d-none d-sm-flex justify-content-center fw-bold w-100">
                <nav class="pag mt-3 mx-0" aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                @if (app()->isLocale('ar'))
                                    <span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                                @else
                                    <span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
                                @endif
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link page-active" href="#">10</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">...</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                @if (app()->isLocale('ar'))
                                    <span aria-hidden="true"><i class="fas fa-arrow-left"></i></span>
                                @else
                                    <span aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
