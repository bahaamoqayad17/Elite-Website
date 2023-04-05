@extends('site.master')

@section('title', config('app.name') . ' | Courses')

@section('content')
@section('background-image')
    <img class="d-none d-sm-block position-absolute image-login z-n1"
        src="{{ asset('assets/img/login' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />
@endsection

<header class="contact-us-courses headers pt-3">
    <div class="container align-items-center">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="headers-text">
                    <h1 class="fw-bold">{{ __('دوراتنا') }}</h1>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل،
                        لقد تم توليد هذا النص من

                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img class="d-none d-sm-block" src="{{ asset('assets/img/courses.svg') }}" />
            </div>
        </div>
    </div>
</header>

<section class="courses">
    <div class="container">
        <div class="px-5">
            <div class="row px-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card border-0 mb-4">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/single-course.png') }}" class="card-img-top" />
                            <span class="badge text-bg-warning position-absolute p-3 badge-card">100 USD</span>
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
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('site.course', 1) }}" class="btn button-notfill rounded">
                                    {{ __('طلب الالتحاق') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card border-0 mb-4">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/single-course.png') }}" class="card-img-top" />
                            <span class="badge text-bg-warning position-absolute p-3 badge-card">100 USD</span>
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
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('site.course', 1) }}" class="btn button-notfill rounded">
                                    {{ __('طلب الالتحاق') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card border-0 mb-4">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/single-course.png') }}" class="card-img-top" />
                            <span class="badge text-bg-warning position-absolute p-3 badge-card">100 USD</span>
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
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('site.course', 1) }}" class="btn button-notfill rounded">
                                    {{ __('طلب الالتحاق') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card border-0 mb-4">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/single-course.png') }}" class="card-img-top" />
                            <span class="badge text-bg-warning position-absolute p-3 badge-card">100 USD</span>
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
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('site.course', 1) }}" class="btn button-notfill rounded">
                                    {{ __('طلب الالتحاق') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row px-5">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card border-0 mb-4">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/single-course.png') }}" class="card-img-top" />
                            <span class="badge text-bg-warning position-absolute p-3 badge-card">100 USD</span>
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
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('site.course', 1) }}" class="btn button-notfill rounded">
                                    {{ __('طلب الالتحاق') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card border-0 mb-4">
                        <div class="position-relative">
                            <img src="{{ asset('assets/img/single-course.png') }}" class="card-img-top" />
                            <span class="badge text-bg-warning position-absolute p-3 badge-card">100 USD</span>
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
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('site.course', 1) }}" class="btn button-notfill rounded">
                                    {{ __('طلب الالتحاق') }}
                                </a>
                            </div>
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

    </div>
</section>
@endsection
