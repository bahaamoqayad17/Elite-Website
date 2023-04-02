@extends('site.master')

@section('title', config('app.name') . ' | Register')

@section('content')

@section('background-image')
    @if (app()->isLocale('ar'))
        <img class="d-none d-sm-block position-absolute register-image z-n1" src="{{ asset('assets/img/register.svg') }}"
            width="57%" />
    @else
        <img class="d-none d-sm-block position-absolute register-image-en z-n1"
            src="{{ asset('assets/img/register-en.svg') }}" width="57%" />
    @endif
@endsection


<section id="register" class="forms">
    <div class="container">
        <div class="card p-5 w-75 m-auto">
            <h2 class="text-center fw-bold pb-5 before">{{ __('التسجيل') }}</h2>
            <form action="" id="register-user" enctype="multipart/form-data" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control me-2" placeholder="{{ __('الاسم') }}"
                        name="first_name" />
                    <input type="text" class="form-control" placeholder="{{ __('اسم الأب') }}" name="father_name" />
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control me-2" placeholder="{{ __('اسم الجد') }}"
                        name="grandfather_name" />
                    <input type="text" class="form-control" placeholder="{{ __('اسم العائلة') }}" name="last_name" />
                </div>
                @if (!app()->isLocale('en'))
                    <div class="input-group mb-3">
                        <input type="text" class="form-control me-2" placeholder="الاسم (En)" name="first_name_en" />
                        <input type="text" class="form-control" placeholder="اسم العائلة (En)" name="last_name_en" />
                    </div>
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="{{ __('رقم الهوية (الرقم الوطني)') }}"
                        name="national_id" />
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="{{ __('البريد الإلكتروني') }}"
                        name="email" />
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="{{ __('رقم الجوال') }}" name="mobile_no" />
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="{{ __('كلمة المرور') }}"
                        name="password" />
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="{{ __('تأكيد كلمة المرور') }}"
                        name="confirm_password" />
                </div>
                <div class="d-flex mb-3">
                    <div class="col">
                        <label for="birthdate">{{ __('تاريخ الميلاد') }}</label>
                        <input type="date" class="form-control" name="birthdate" id="birthdate" />
                    </div>
                    <div class="col ms-2">
                        <label for="gender">{{ __('الجنس') }}</label>
                        <select class="form-control" name="gender" id="gender">
                            <option selected></option>
                            <option value="1">{{ __('ذكر') }}</option>
                            <option value="2">{{ __('أنثى') }}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="image">{{ __('صورة الهوية أو جواز السفر') }}</label>
                    <input type="file" class="form-control" name="image" id="image" />
                </div>
                <div class="form-group mb-3">
                    <label for="selfi">{{ __('صورة السيلفي') }}</label>
                    <input type="file" class="form-control" name="selfi" id="selfi" />
                </div>
                <div class="input-group mb-3">
                    <input type="checkbox" class="me-1" name="accept_privacy_policy" id="accept_privacy_policy" />
                    <label for="accept_privacy_policy"
                        style="color: #009ee3">{{ __('الموافقة على سياسة الخصوصية') }}</label>
                </div>

                <button class="btn col-12">{{ __('التسجيل') }}</button>
            </form>
            <a href="{{ route('site.login') }}" class="text-center mt-3">{{ __('لديك حساب ؟') }}</a>
        </div>
    </div>
</section>
@endsection
