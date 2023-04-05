@extends('site.master')


@section('title', config('app.name') . ' | Course')
@section('content')


    <header class="course-header pt-5 pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <center class="col-lg-12">
                    <img width="45%" src="{{ asset('assets/img/single-course.svg') }}" />
                </center>
            </div>
        </div>
    </header>

    <section class="single-course">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <article class="mb-5">
                        <div class="card shadow-none border-0">
                            <div class="position-relative">
                                <img src={{ asset('assets/img/single-course.png') }} class="card-img-top" />
                                <span class="badge text-bg-warning position-absolute p-3 badge-card">100 USD</span>
                            </div>
                            <span class="text-secondary p-2">10 July,2022</span>

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

                                <p class="mb-4">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                    توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
                                    هذا النص أو العديد من النصوص الاخرى إضافة إلى زيادة عدد
                                    الحروف التى يولدها التطبيق.
                                </p>

                                <p class="course-text p-3">
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

                            <div class="d-flex share-course bg-fa p-2 px-4 justify-content-between align-items-center">
                                <div>
                                    <h5 class="fw-bold">تداول العملات الرقمية</h5>
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل،</p>
                                </div>
                                <a href="#">
                                    <img width="30" src="{{ asset('assets/img/share.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <aside class="course-details ms-5">
                        <div class="card p-5 border-0 rounded">
                            <h3 class="text-center fw-bold mb-4">{{ __('تفاصيل الدورة') }}</h3>
                            <div class="d-flex bg-fa justify-content-between mb-3 p-2 px-3 rounded">
                                <span class="fw-bold">{{ __('السعر') }}</span>
                                <span>100 USD</span>
                            </div>
                            <div class="d-flex bg-fa justify-content-between mb-3 p-2 px-3 rounded">
                                <span class="fw-bold">{{ __('المحاضر') }}</span>
                                <span>محمود صبيح</span>
                            </div>
                            <div class="d-flex bg-fa justify-content-between mb-3 p-2 px-3 rounded">
                                <span class="fw-bold">{{ __('عدد الدروس') }}</span>
                                <span>22</span>
                            </div>
                            <div class="d-flex bg-fa justify-content-between mb-3 p-2 px-3 rounded">
                                <span class="fw-bold">{{ __('المدة الزمنية') }}</span>
                                <span>24 ساعة</span>
                            </div>
                            <div class="d-flex bg-fa justify-content-between mb-3 p-2 px-3 rounded">
                                <span class="fw-bold">{{ __('عدد الطلاب') }}</span>
                                <span>112 طالب</span>
                            </div>
                            <div class="d-flex bg-fa justify-content-between mb-3 p-2 px-3 rounded">
                                <span class="fw-bold">{{ __('اللغة') }}</span>
                                <span>العربية</span>
                            </div>
                            <div class="d-flex justify-content-center">
                                <a class="btn button-fill rounded" data-bs-toggle="modal" data-bs-target="#req-join">
                                    {{ __('طلب الالتحاق') }}
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
    </section>

    {{-- Request Join --}}
    <div class="modal fade" id="req-join" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="container">
            <div class="modal-dialog">
                <div class="modal-content p-3">
                    <div class="modal-header border-0">
                        <h4 class="modal-title before border-0 fw-bold">
                            {{ __('تفاصيل الدورة') }}
                        </h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="sub-form p-3 mb-4">
                            <div class="d-flex mb-3 flex-sm-row flex-column">
                                <div class="col">
                                    <label class="mb-2" for="course_id">{{ __('رقم الدورة') }}</label>
                                    <input disabled type="text" id="course_id" class="form-control" name="course_id"
                                        value="8" />
                                </div>
                                <div class="col ms-2">
                                    <label class="mb-2" for="course_name">{{ __('اسم الدورة') }}</label>
                                    <input disabled type="text" id="course_name" class="form-control" name="course_name"
                                        value="التحليل الفني للعملات الرقمية" />
                                </div>
                            </div>

                            <div class="d-flex mb-3 flex-sm-row flex-column">
                                <div class="col">
                                    <label class="mb-2" for="course_hours_number">{{ __('عدد ساعات الدورة') }}</label>
                                    <input disabled type="text" id="course_hours_number" class="form-control"
                                        name="course_hours_number" value="29" />
                                </div>
                                <div class="col ms-2">
                                    <label class="mb-2" for="course_price">{{ __('سعر الدورة') }}</label>
                                    <input disabled type="text" id="course_price" class="form-control"
                                        name="course_price" value="100" />
                                </div>
                                <div class="col ms-2">
                                    <label class="mb-2" for="course_currency">{{ __('عملة الدورة') }}</label>
                                    <input disabled type="text" id="course_currency" class="form-control"
                                        name="course_currency" value="USD" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="sub-form px-2 py-2 mb-4">
                                    <h4 class="before mb-4 fw-bold px-3">{{ __('تفاصيل الطلب') }}</h4>
                                    <div class="d-flex justify-content-between px-3">
                                        <p class="mb-1">التحليل الفني للعملات الرقمية</p>
                                        <p class="mb-1">100 USD</p>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between px-3">
                                        <p class="mb-1">{{ __('مجموع الطلب') }}</p>
                                        <p class="mb-1">100 USD</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="input-group mb-3">
                            <input type="checkbox" class="me-1" name="accept_cancel_terms" id="accept_cancel_terms" />
                            <label for="accept_cancel_terms">{{ __('الموافقة على شروط الإرجاع والإلغاء') }}</label>
                        </div>

                        <div class="payment mt-5 col-6">
                            <h3 class="before mb-4 fw-bold">{{ __('ادفع باستخدام') }}</h3>
                            <div class="d-flex justify-content-between mb-4 align-items-center flex-sm-row flex-column">
                                <div class="d-flex justify-content-around w-100 align-items-center mb-2">
                                    <a href="">
                                        <img width="95" src="{{ asset('assets/img/Master card.svg') }}">
                                    </a>
                                    <a href="">
                                        <img width="95" src="{{ asset('assets/img/Visa.svg') }}">
                                    </a>
                                </div>
                                <div class="d-flex justify-content-around w-100 align-items-center mb-2">
                                    <a href="">
                                        <img width="95" src="{{ asset('assets/img/Paypal.svg') }}">
                                    </a>
                                    <a href="">
                                        <img width="95" src="{{ asset('assets/img/elite-wallet.svg') }}">
                                    </a>
                                </div>
                            </div>
                            <button class="btn button-fill w-100 mb-4">{{ __('بطاقة الخصم أو الائتمان') }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
