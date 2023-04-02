@extends('site.master')

@section('title', config('app.name') . ' | Login')

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

<section id="login" class="forms">
    <div class="container">
        <div class="card p-5 w-75 m-auto">
            <h2 class="text-center fw-bold pb-5 before">{{ __('تسجيل الدخول') }}</h2>
            <form action="" id="login-user" method="post">
                <div class="form-group mb-3">
                    <div class="form-group mb-4">
                        <label class="mb-3">{{ __('رقم الجوال - البريد الإلكتروني') }}</label>
                        <input type="text" class="form-control" name="email" />
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-3">{{ __('كلمة المرور') }}</label>
                        <input type="password" class="form-control" name="password" />
                    </div>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="me-1" name="remember-me" id="remember-me" />
                        <label for="remember-me">{{ __('تذكرني') }}</label>
                    </div>
                </div>
                <button class="btn col-12">{{ __('تسجيل الدخول') }}</button>
            </form>
            <a href="{{ route('site.forget_password') }}" class="text-center mt-3">{{ __('نسيت كلمة المرور ؟') }}</a>
            <a href="{{ route('site.register') }}" class="text-center mt-3">{{ __('ليس لديك حساب ؟') }}</a>
        </div>
    </div>
</section>
@endsection
