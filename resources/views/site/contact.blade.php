@extends('site.master')

@section('title', config('app.name') . ' | Contact Us')

@section('content')
@section('background-image')
    <img class="d-none d-sm-block position-absolute image-login z-n1"
        src="{{ asset('assets/img/login' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />
@endsection

<header class="contact-us-header headers pt-5">
    <div class="container align-items-center">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="headers-text">
                    <h1 class="fw-bold contact-text">{{ __('تواصل معنا') }}</h1>
                    <p>
                        {{ __('لديك أي استفسار أو مشكلة ؟ لا تتردد في التواصل معنا') }}
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img class="d-none d-sm-block" width="100%" src="{{ asset('assets/img/contact.svg') }}" />
            </div>
        </div>
    </div>
</header>

<section class="contact-us-section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <aside>
                    <div class="card mb-5 border-0 p-5">
                        <h4 class="mb-5 before fw-bold">{{ __('معلومات الاتصال') }}</h4>
                        <a class="mb-4 " style="color:unset" href="#"><img class="me-3"
                                src="{{ asset('assets/img/phone.svg') }}" alt="">
                            <span>0594790590</span></a>
                        <a style="color:unset" href="mailto:info@eliteacd.com"><img width="35"
                                src="{{ asset('assets/img/letter.svg') }}" class="me-3">
                            <span>info@eliteCad.com</span></a>

                    </div>
                    <div class="card p-5 border-0 mb-5">
                        <h4 class="mb-5 before fw-bold">{{ __('مواعيد العمل') }}</h4>
                        <div class="times">
                            <ul class="p-0">
                                <li>
                                    <p><span class="me-1">{{ __('السبت') }} :</span> 9:00am - 2:00pm</p>
                                </li>
                                <li>
                                    <p><span class="me-3">{{ __('الأحد') }} :</span> 9:00am - 2:00pm</p>
                                </li>
                                <li>
                                    <p><span class="me-2">{{ __('الإثنين') }} :</span> 9:00am - 2:00pm</p>
                                </li>
                                <li>
                                    <p>
                                        <span class="me-2">{{ __('الثلاثاء') }} :</span> 9:00am - 2:00pm
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span class="me-1">{{ __('الأربعاء') }} :</span> 9:00am - 2:00pm
                                    </p>
                                </li>
                                <li>
                                    <p class="text-success">{{ __('الخميس') }} : 9:00am - 12:30pm</p>
                                </li>
                                <li>
                                    <p class="text-danger">{{ __('الجمعة') }} : {{ __('مغلق') }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <div class="card p-5 border-0">
                    <h4 class="fw-bold pb-3 before">{{ __('أرسل رسالتك') }}</h4>
                    <p class="mb-5">
                        هذا النص هو مثال لنص يمكن أن يستبدل، لقد تم توليد هذا النص من
                    </p>
                    <form action="" id="contact-us" method="post">
                        <div class="form-group mb-5">
                            <input type="text" class="form-control p-3" name="name"
                                placeholder="{{ __('الاسم') }}" />
                        </div>
                        <div class="form-group mb-5">
                            <input type="text" class="form-control p-3" name="email"
                                placeholder="{{ __('البريد الإلكتروني') }}" />
                        </div>
                        <div class="mb-5">
                            <textarea class="form-control" name="message" placeholder="{{ __('اكتب رسالتك') }}" style="resize: none"
                                rows="9"></textarea>
                        </div>
                        <button class="btn float-end button-fill rounded-pill">
                            {{ __('أرسل رسالتك') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex flex-row-reverse my-5">
            <img width="120" src="{{ asset('assets/img/fly.svg') }}" alt="">
        </div>
    </div>
</section>
@endsection
