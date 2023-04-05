@extends('site.master')

@section('title', config('app.name') . ' | Blogs')

@section('content')

@section('background-image')
    <img class="d-none d-sm-block position-absolute image-login z-n1"
        src="{{ asset('assets/img/login' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />
@endsection

<header class="blogs-header headers pt-5">
    <div class="container align-items-center">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="headers-text">
                    <h1 class="fw-bold">{{ __('مدوناتنا') }}</h1>
                    <p>
                        هنا يتم توليد النص و عشوائي و هيك اشي
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 p-0">
                <img class="d-none d-sm-block" width="700" src="assets/img/Blogs.png" />
            </div>
        </div>
    </div>
</header>

<section class="blogs pt-5">
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
                                <a href="{{ route('site.blog', 1) }}" class="btn button-notfill float-end rounded">
                                    {{ __('اقرأ المزيد') }}</a>
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
                <nav aria-label="Page navigation example" class="m-0">
                    <ul class="pagination float-end">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
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
        </div>
    </div>
</section>
@endsection
