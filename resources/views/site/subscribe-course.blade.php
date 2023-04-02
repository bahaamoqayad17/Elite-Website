@extends('site.master')

@section('title', config('app.name') . ' | Register')

@section('content')

@section('background-image')
    @if (app()->isLocale('ar'))
        <img class="d-none register-image d-sm-block position-absolute z-n1" src="{{ asset('assets/img/register.svg') }}"
            width="57%" />
    @else
        <img class="d-none register-image-en d-sm-block position-absolute z-n1"
            src="{{ asset('assets/img/register-en.svg') }}" width="57%" />
    @endif
@endsection

<section id="subscribe-course" class="forms">
    <div class="container">
        <div class="card p-5 w-75 m-auto">
            <h2 class="text-center fw-bold pb-5 before">{{ __('التسجيل في دورة') }}</h2>
            <form action="" id="subscribe-course" method="post">
                <div class="sub-form p-3 mb-4">
                    <div class="form-group mb-3">
                        <label class="mb-2" for="name">{{ __('الاسم') }}</label>
                        <input type="text" id="name" class="form-control" placeholder="{{ __('الاسم') }}"
                            name="first_name" />
                    </div>
                    <div class="d-flex mb-3">
                        <div class="col">
                            <label class="mb-2" for="email">{{ __('البريد الإلكتروني') }}</label>
                            <input type="text" id="email" class="form-control"
                                placeholder="{{ __('البريد الإلكتروني') }}" name="email" />
                        </div>
                        <div class="col ms-2">
                            <label class="mb-2" for="mobile_no">{{ __('رقم الجوال') }}</label>
                            <input type="text" id="mobile_no" class="form-control"
                                placeholder="{{ __('رقم الجوال') }}" name="mobile_no" />
                        </div>
                    </div>
                </div>
                <div class="sub-form p-3 mb-3">
                    <h5 class="mb-3">{{ __('الدورة التي ترغب بالإلتحاق بها (*)') }}</h5>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="me-1" name="course_id" id="course-1" />
                        <label for="course-1">دورة تجارة إلكترونية</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="me-1" name="course_id" id="course-2" />
                        <label for="course-2">دورة التعليق الصوتي .</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="me-1" name="course_id" id="course-3" />
                        <label for="course-3">دورة المصمم المحترف ( جرافيك)</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="me-1" name="course_id" id="course-4" />
                        <label for="course-4">دورة المحاسبه الرقميه Digital Accounting</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="me-1" name="course_id" id="course-5" />
                        <label for="course-5">دبلوم تصميم وبرمجة مواقع الويب</label>
                    </div>
                    <div class="input-group mb-3">
                        <input type="checkbox" class="me-1" name="course_id" id="course-6" />
                        <label for="course-6">دبلوم التسويق الالكتروني</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="sub-form p-3 mb-3">
                            <h5 class="mb-3">{{ __('كيف تعرفت على تكنو إليت (*)') }}
                            </h5>
                            <div class="input-group mb-3">
                                <input type="radio" class="me-1" name="known_elite" id="facebook" />
                                <label for="facebook">{{ __('إعلان ممول عبر الفيس بوك') }}</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="radio" class="me-1" name="known_elite" id="insta" />
                                <label for="insta">{{ __('إعلان ممول عبر انستغرام') }}</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="radio" class="me-1" name="known_elite" id="google" />
                                <label for="google">{{ __('محرك البحث جوجل') }}</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="radio" class="me-1" name="known_elite" id="famous" />
                                <label for="famous">{{ __('مشاهير') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="sub-form form-group p-3 mb-3">
                            <h5 class="mb-3">{{ __('المحافظة (*)') }}</h5>
                            <div class="input-group mb-3">
                                <input type="radio" class="me-1" name="province_id" id="gaza"
                                    value="1" />
                                <label for="gaza">{{ __('غزة') }}</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="radio" class="me-1" name="province_id" id="north"
                                    value="2" />
                                <label for="north">{{ __('الشمال') }}</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="radio" class="me-1" name="province_id" id="middle"
                                    value="3" />
                                <label for="middle">{{ __('الوسطى') }}</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="radio" class="me-1" name="province_id" id="khan"
                                    value="4" />
                                <label for="khan">{{ __('خانيونس') }}</label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="radio" class="me-1" name="province_id" id="rafah"
                                    value="5" />
                                <label for="rafah">{{ __('رفح') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn col-12">{{ __('إرسال الطلب') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
