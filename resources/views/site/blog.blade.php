@extends('site.master')


@section('title', config('app.name') . ' | Blog')
@section('content')

@section('background-image')
    <img class="d-none d-sm-block position-absolute blog-image z-n1"
        src={{ asset('assets/img/single-blog-header' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }} />
@endsection

<header class="single-blog-header headers">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="headers-text">
                    <h1 class="fw-bold">{{ __('المدونة') }}</h1>
                    <p>
                        هذا النص هو مثال لنص يمكن أن يستبدل، لقد تم توليد هذا النص من
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="single-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <article>
                    <div class="card shadow-none border-0">
                        <div class="position-relative">
                            <img src={{ asset('assets/img/blog-image.png') }} class="card-img-top" />
                            <span class="badge text-bg-warning position-absolute p-3 badge-card">تداول العملات
                                الرقمية</span>
                        </div>
                        <di class="d-flex flex-row-reverse date align-items-center">
                            <span class="text-secondary p-2">10:20:12Pm
                                02-01-2023 </span>
                            <img class="me-3 mb-1" width="20" src="{{ asset('assets/img/clock.svg') }}">

                        </di>

                        <div class="card-text mb-4">
                            <h3 class="fw-bold mb-5">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                توليد هذا النص من مولد النص العربى
                            </h3>
                            <p class="mb-4">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                                هذا النص أو العديد من النصوص الاخرى إضافة إلى زيادة عدد
                                الحروف التى يولدها التطبيق.
                            </p>

                            <p class="mb-4">
                                ه إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد
                                الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية،
                                مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                                يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية
                                لتصميم الموق
                            </p>
                            <h3 class="fw-bold mb-5">
                                هذا النص هو مثال لنص يمكن أن يستبدل
                            </h3>
                            <p class="mb-4">
                                ه إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد
                                الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية،
                                مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                                يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية
                                لتصميم الموق
                            </p>
                            <div class="images mb-3 d-flex justify-content-between">
                                <img src={{ asset('assets/img/blog-image.png') }} width="49%" />
                                <img src={{ asset('assets/img/blog-image.png') }} width="49%" />
                            </div>
                            <img class="mb-3" src={{ asset('assets/img/blog-image.png') }} width="100%" />

                            <p class="mb-4">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                                هذا النص أو العديد من النصوص الاخرى إضافة إلى زيادة عدد
                                الحروف التى يولدها التطبيق.
                            </p>

                            <p class="blog-text p-3">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                                هذا النص أو العديد من النصوص الاخرى إضافة إلى زيادة عدد
                                الحروف التى يولدها التطبيق.
                            </p>

                            <p class="mb-4">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                                هذا النص أو العديد من النصوص الاخرى إضافة إلى زيادة عدد
                                الحروف التى يولدها التطبيق.
                            </p>
                        </div>

                        {{-- <div class="comments">
                            <h3>{{ __('التعليقات') }}</h3>
                            <div class="line mb-4"></div>

                            <div class="comment mb-5 d-flex">
                                <div class="image-holder bg-light p-1">
                                    <img width="50" height="50" src={{ asset('assets/img/avatar.png') }}
                                        alt="" />
                                </div>

                                <div class="comment-details ms-3">
                                    <div class="d-flex">
                                        <span>محمد أحمد</span>
                                        <div class="stars ms-2">
                                            <i class="fas fa-star full"></i>
                                            <i class="fas fa-star full"></i>
                                            <i class="fas fa-star full"></i>
                                            <i class="fas fa-star full"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <small>June 26, 2022</small>
                                    <p>
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة لقد
                                        تم توليد هذا النص من مولد النص العربى
                                    </p>
                                </div>
                            </div>
                            <hr />
                            <div class="comment mb-5 d-flex">
                                <div class="image-holder bg-light p-1">
                                    <img width="50" height="50" src={{ asset('assets/img/avatar.png') }} />
                                </div>

                                <div class="comment-details ms-3">
                                    <div class="d-flex">
                                        <span>محمد أحمد</span>
                                        <div class="stars ms-2">
                                            <i class="fas fa-star full"></i>
                                            <i class="fas fa-star full"></i>
                                            <i class="fas fa-star full"></i>
                                            <i class="fas fa-star full"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                    </div>
                                    <small>June 26, 2022</small>
                                    <p>
                                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة لقد
                                        تم توليد هذا النص من مولد النص العربى
                                    </p>
                                </div>
                            </div>
                            <hr />
                        </div> --}}
                    </div>
                </article>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 p-0">
                <div class="container">
                    <aside class="last-blogs">
                        <div class="mb-5">
                            <h1>{{ __('آخر مدوناتنا') }}</h1>
                            <div class="line mb-4"></div>
                            <div class="single-last-blog">
                                <div class="d-flex mb-3">
                                    <div class="image-holder bg-light p-1 me-3">
                                        <img width="60" height="60" src={{ asset('assets/img/blog-image.png') }}
                                            alt="" />
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
                                        <img width="60" height="60" src={{ asset('assets/img/blog-image.png') }}
                                            alt="" />
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
                                        <img width="60" height="60" src={{ asset('assets/img/blog-image.png') }}
                                            alt="" />
                                    </div>
                                    <div class="d-flex flex-column last-blogs-text">
                                        <small>27 July,2022</small>
                                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="social-media mb-5">
                            <h1>{{ __('تابعنا') }}</h1>
                            <div class="line mb-4"></div>
                            <div class="d-flex justify-content-around icons w-60">
                                <a href="#"><i class="p-2 rounded-circle fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="p-2 rounded-circle fab fa-instagram"></i></a>
                                <a href="#"><i class="p-2 rounded-circle fab fa-twitter"></i></a>
                                <a href="#"><i class="p-2 rounded-circle fab fa-facebook-f"></i></a>
                    </aside>
                </div>
            </div>
        </div>
        <form action="" id="add-comment" method="post">
            <div class="input-group mb-5">
                <input type="text" class="rounded form-control" id="name" name="name"
                    placeholder="{{ __('الاسم') }}" />
                <input type="text" class="rounded form-control ms-4" id="name" name="name"
                    placeholder="{{ __('البريد الإلكتروني') }}" />
            </div>
            <div class="mb-5">
                <textarea class="form-control" name="message" style="resize: none" rows="7"></textarea>
            </div>
            <button class="btn button-notfill rounded float-start">{{ __('أرسل') }}</button>
        </form>
    </div>
</section>
@endsection
