@extends('site.master')

@section('title', config('app.name') . ' | Forget Password')

@section('content')
@section('background-image')
    <img class="d-none d-sm-block position-absolute image-login z-n1"
        src="{{ asset('assets/img/login' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />
@endsection

<section id="forget-password-1" class="forms">
    <div class="container">
        <div class="card p-5 w-75 m-auto">
            <div class="text-center">
                <img width="200" src="{{ asset('assets/img/logo.png') }}" alt="" />
            </div>
            <h2 class="text-center fw-bold pb-5">{{ __('إعادة تعيين كلمة المرور') }}</h2>
            <form action="" id="forget-password-1" method="post">
                <div class="form-group mb-3">
                    <div class="form-group mb-5">
                        <input type="text" class="form-control" name="mobile_no"
                            placeholder="{{ __('رقم الجوال') }}" />
                    </div>
                </div>
                <button class="btn col-12">{{ __('إرسال') }}</button>
            </form>
        </div>
    </div>
</section>

<section id="forget-password-2" class="forms">
    <div class="container">
        <div class="card p-5 w-50 m-auto">
            <div class="text-center">
                <img width="200" src="{{ asset('assets/img/logo.png') }}" alt="" />
            </div>
            <h2 class="text-center fw-bold pb-5">{{ __('إعادة تعيين كلمة المرور') }}</h2>
            <form action="" id="forget-password-2" method="post">
                <div class="form-group mb-3">
                    <label class="mb-5">{{ __('أدخل الرمز الخاص بك') }}</label>
                    <div class="form-group mb-5 mt-3">
                        <div class="pin-code d-flex justify-content-around">
                            <input class="text-center border-0" name="code" maxlength="1" />
                            <input class="text-center border-0" name="code" maxlength="1" />
                            <input class="text-center border-0" name="code" maxlength="1" />
                            <input class="text-center border-0" name="code" maxlength="1" />
                            <input class="text-center border-0" name="code" maxlength="1" />
                        </div>
                    </div>
                </div>
                <button class="btn col-12">{{ __('إرسال') }}</button>
            </form>
            <a href="#" class="text-center mt-4 text-dark">{{ __('إرسال الرمز مرة أخرى') }} (24)</a>
        </div>
    </div>
</section>

<section id="forget-password-3" class="forms text-right">
    <div class="container">
        <div class="card p-5 w-75 m-auto">
            <div class="text-center">
                <img width="200" src="{{ asset('assets/img/logo.png') }}" alt="" />
            </div>
            <h2 class="text-center fw-bold pb-5">{{ __('إعادة تعيين كلمة المرور') }}</h2>
            <form action="" id="forget-password-3" method="post">
                <div class="form-group mb-5">
                    <div class="mb-4">
                        <input type="text" class="form-control" name="new_password"
                            placeholder="{{ __('كلمة المرور الجديدة') }}" />
                    </div>
                    <input type="text" class="form-control" name="new_password_confirm"
                        placeholder="{{ __('تأكيد كلمة المرور الجديدة') }}" />
                </div>
                <button class="btn col-12">{{ __('إرسال') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
