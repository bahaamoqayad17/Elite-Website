<!DOCTYPE html>
@if (app()->isLocale('ar'))
    <html lang="ar" dir="rtl">
@else
    <html lang="en">
@endif

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', config('app.name')) </title>


    @if (app()->isLocale('ar'))
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/ltr.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <style>

        </style>
    @endif

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/fontawesome.min.css') }}" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    @yield('styles')
</head>

<body data-bs-theme="light">
    @yield('background-image')

    <div class="switch-mode d-none d-sm-block">
        <i class="fas fa-moon fa-2x"></i>
        <i class="fas fa-sun fa-2x d-none"></i>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="{{ route('site.index') }}">
                <img class="object-fit-cover" width="110" height="70" src="{{ asset('assets/img/logo.png') }}" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-left mx-auto mb-2 mb-lg-0">
                    <li class="nav-item me-5">
                        <a class="nav-link fw-bold" href="{{ route('site.index') }}">{{ __('الرئيسية') }}</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link fw-bold" href="{{ route('site.courses') }}">{{ __('دوراتنا') }}</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link fw-bold" href="{{ route('site.blogs') }}">{{ __('مدوناتنا') }}</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link fw-bold" href="{{ route('site.faq') }}">
                            {{ __('الأسئلة الشائعة') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold" href="{{ route('site.contact') }}">{{ __('تواصل معنا') }}</a>
                    </li>
                </ul>

                @if (Auth::user())
                    <div class="d-flex align-items-center flex-row-reverse">
                        <a href="{{ route('site.profile') }}">
                            <div class="user-avatar mt-2 me-2"></div>
                        </a>
                        <a class="d-none d-sm-inline me-1 mt-2" href="{{ route('site.notification') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 27.422 31.421">
                                <path id="Path_3" data-name="Path 3"
                                    d="M37.14,26.252a10.285,10.285,0,0,0-7.713,9.959v6.855a1.144,1.144,0,0,1-1.141,1.144,2.285,2.285,0,1,0,0,4.57H51.132a2.285,2.285,0,1,0,0-4.57,1.14,1.14,0,0,1-1.141-1.144V36.211a10.286,10.286,0,0,0-7.713-9.959v-1.18a2.571,2.571,0,1,0-5.142,0ZM35.712,49.922h8a4,4,0,0,1-8,0Z"
                                    transform="translate(-26 -22.5)" fill="#009ee3" fill-rule="evenodd" />
                            </svg>
                        </a>

                        <div class="dropdown d-inline mt-2">
                            <button class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="42" height="40"
                                    viewBox="0 0 42 40">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_8091" data-name="Rectangle 8091" width="42"
                                                height="40" transform="translate(35 64)" fill="#6e6e6e"
                                                stroke="#707070" stroke-width="1" />
                                        </clipPath>
                                    </defs>
                                    <g id="Mask_Group_15760" data-name="Mask Group 15760" transform="translate(-35 -64)"
                                        clip-path="url(#clip-path)">
                                        <path id="language-svgrepo-com"
                                            d="M15.885,30.1A14.219,14.219,0,1,0,1.667,15.885,14.219,14.219,0,0,0,15.885,30.1Zm0,0c3.878,0,5.17-6.463,5.17-14.219S19.763,1.667,15.885,1.667s-5.17,6.463-5.17,14.219S12.007,30.1,15.885,30.1ZM2.959,21.056H28.811M2.959,10.715H28.811"
                                            transform="translate(40.115 68.115)" fill="none" stroke="#009ee3"
                                            stroke-width="1.4" />
                                    </g>
                                </svg>

                            </button>
                            <ul class="dropdown-menu dropdown-menu-end mt-3">
                                <li><a class="dropdown-item"
                                        href="{{ route('site.lang', 'ar') }}">{{ __('العربية') }}</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('site.lang', 'en') }}">{{ __('الإنجليزية') }}</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('site.lang', 'tr') }}">{{ __('التركية') }}</a></li>
                            </ul>
                        </div>

                        <div class="d-inline-block mt-2">
                            <div class="switch-mode d-sm-none position-static">
                                <i class="fas fa-moon fa-2x"></i>
                                <i class="fas fa-sun fa-2x d-none"></i>
                            </div>
                        </div>


                    </div>
                @else
                    <div class="btns d-flex justify-content-between">
                        <a href="{{ route('site.login') }}"
                            class="btn button-fill login-btn rounded-pill me-2">{{ __('تسجيل الدخول') }}</a>
                        <a href="{{ route('site.register') }}"
                            class="btn button-notfill register-btn rounded-pill">{{ __('التسجيل') }}</a>
                        <div class="dropdown d-inline">
                            <button class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">

                                <svg fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="42" height="40"
                                    viewBox="0 0 42 40">
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect id="Rectangle_8091" data-name="Rectangle 8091" width="42"
                                                height="40" transform="translate(35 64)" fill="#6e6e6e"
                                                stroke="#707070" stroke-width="1" />
                                        </clipPath>
                                    </defs>
                                    <g id="Mask_Group_15760" data-name="Mask Group 15760"
                                        transform="translate(-35 -64)" clip-path="url(#clip-path)">
                                        <path id="language-svgrepo-com"
                                            d="M15.885,30.1A14.219,14.219,0,1,0,1.667,15.885,14.219,14.219,0,0,0,15.885,30.1Zm0,0c3.878,0,5.17-6.463,5.17-14.219S19.763,1.667,15.885,1.667s-5.17,6.463-5.17,14.219S12.007,30.1,15.885,30.1ZM2.959,21.056H28.811M2.959,10.715H28.811"
                                            transform="translate(40.115 68.115)" fill="none" stroke="#009ee3"
                                            stroke-width="1.4" />
                                    </g>
                                </svg>

                            </button>
                            <ul class="dropdown-menu dropdown-menu-end mt-3">
                                <li><a class="dropdown-item"
                                        href="{{ route('site.lang', 'ar') }}">{{ __('العربية') }}</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('site.lang', 'en') }}">{{ __('الإنجليزية') }}</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('site.lang', 'tr') }}">{{ __('التركية') }}</a></li>
                            </ul>
                        </div>
                        <div class="d-inline-block mt-1">
                            <div class="switch-mode d-sm-none position-static">
                                <i class="fas fa-moon fa-2x"></i>
                                <i class="fas fa-sun fa-2x d-none"></i>
                            </div>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </nav>
    @yield('content')
    @if (!Auth::user())
        <div
            class="footer-mobile d-flex justify-content-around align-items-center fixed-bottom pt-2 text-center pb-1 d-sm-none">
            <div>
                <a href="{{ route('site.index') }}">
                    <img src="{{ asset('assets/img/home-icon.svg') }}">
                    <div class="f-s-12">{{ __('الرئيسية') }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('site.notification') }}">
                    <img src="{{ asset('assets/img/notification-icon.svg') }}">
                    <div class="f-s-12">{{ __('الإشعارات') }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('site.profile') }}">
                    <img src="{{ asset('assets/img/wallet-icon.svg') }}">
                    <div class="f-s-12">{{ __('المحفظة') }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('site.courses') }}">
                    <img src="{{ asset('assets/img/courses-icon.svg') }}">
                    <div class="f-s-12">{{ __('الدورات') }}</div>
                </a>
            </div>

            <div>
                <a href="{{ route('site.profile') }}">
                    <div class="user-avatar"></div>
                </a>
            </div>
        </div>
    @else
        <div class="footer-mobile d-flex justify-content-around fixed-bottom pt-2 text-center pb-1 d-sm-none">
            <div>
                <a href="{{ route('site.index') }}">
                    <img src="{{ asset('assets/img/home-icon.svg') }}">
                    <div class="f-s-12">{{ __('الرئيسية') }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('site.blogs') }}">
                    <img src="{{ asset('assets/img/blogs-icon.svg') }}">
                    <div class="f-s-12">{{ __('مدوناتنا') }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('site.posts') }}">
                    <img src="{{ asset('assets/img/posts-icon.svg') }}">
                    <div class="f-s-12">{{ __('منشوراتنا') }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('site.courses') }}">
                    <img src="{{ asset('assets/img/courses-icon.svg') }}">
                    <div class="f-s-12">{{ __('دوراتنا') }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('site.login') }}">
                    <img src="{{ asset('assets/img/user-icon.svg') }}">
                    <div class="f-s-12">{{ __('تسجيل الدخول') }}</div>
                </a>
            </div>
        </div>
    @endif
    <footer class="text-light pt-4 pb-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="pt-5">
                        <h3 class="before fw-bold mb-4">{{ __('حمل التطبيق الآن') }}</h3>
                        <div>
                            <a href=""><img width="190" class="mb-2"
                                    src="{{ asset('assets/img/google-play-badge.svg') }}"></a>
                        </div>
                        <div>
                            <a href=""><img width="190" class="mb-2"
                                    src="{{ asset('assets/img/app-store.svg') }}"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="pt-5">
                        <h3 class="before fw-bold mb-4">{{ __('معلومات التواصل') }}</h3>
                        <p><img width="23" src="{{ asset('assets/img/location-white.svg') }}"> <span
                                class="ms-2">{{ __('غزة -شارع الكنز- برج نعمة الطابق السابع') }}</span>
                        </p>
                        <p><a href="#"><i class="fas fa-phone-alt fa-lg me-2"></i>
                                <span>1700200020 - 0594790590</span></a></p>
                        <p><a href="mailto:info@eliteacd.com"><img class="me-2" width="23"
                                    src="{{ asset('assets/img/envelop.svg') }}">
                                <span>info@eliteCad.com</span></a></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="pt-5 other-links">
                        <h3 class="before fw-bold mb-4">{{ __('صفحات أخرى') }}</h3>
                        <p class="mb-1"><a href="{{ route('site.bot_terms') }}">{{ __('شروط البوت') }}</a></p>
                        <p class="mb-1"><a
                                href="{{ route('site.subscribe_course') }}">{{ __('سجل في دوراتنا') }}</a></p>
                        <p class="mb-1"><a href="{{ route('site.posts') }}">{{ __('منشوراتنا') }}</a>
                        </p>
                        <p class="mb-1"><a
                                href="{{ route('site.crypto_currencies') }}">{{ __('العملات المحرمة والمباحة') }}</a>
                        </p>
                        <p class="mb-1"><a
                                href="{{ route('site.privacy_policy') }}">{{ __('سياسة الخصوصية') }}</a></p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <div class="position-relative">
                        <img width="240" src="{{ asset('assets/img/logo-white.svg') }}">
                        <div class="{{ app()->isLocale('ar') ? 'icons' : 'icons-en' }} position-absolute">
                            <a href="">
                                <img src="{{ asset('assets/img/twitter.svg') }}" width="37">
                            </a>
                            <a href="">
                                <img src="{{ asset('assets/img/gmail.svg') }}" width="37">
                            </a>
                            <a href="">
                                <img src="{{ asset('assets/img/insta.svg') }}" width="37">
                            </a>
                            <a href="">
                                <img src="{{ asset('assets/img/facebook.svg') }}" width="37">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hr my-3 mt-5"></div>
            </div>
            <div class="d-flex justify-content-around w-50 mx-auto my-1 mb-1 links">
                <a class="fw-bold mb-3" href="{{ route('site.index') }}">{{ __('الرئيسية') }}</a>
                <span class="d-none d-sm-block">|</span>
                <a class="fw-bold mb-3" href="{{ route('site.courses') }}">{{ __('دوراتنا') }}</a>
                <span class="d-none d-sm-block">|</span>
                <a class="fw-bold mb-3" href="{{ route('site.blogs') }}">{{ __('مدوناتنا') }}</a>
                <span class="d-none d-sm-block">|</span>
                <a class="fw-bold mb-3" href="{{ route('site.subscribe_course') }}">{{ __('سجل في دوراتنا') }}</a>
                <span class="d-none d-sm-block">|</span>
                <a class="fw-bold mb-3" href="{{ route('site.contact') }}">{{ __('تواصل معنا') }}</a>
            </div>
            <p class="text-center">{{ __('تكنو إليت - جميع الحقوق محفوظة © 2023') }}</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    @yield('scripts')
</body>

</html>
