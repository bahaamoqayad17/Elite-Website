@extends('site.master')

@section('title', config('app.name') . ' | User Profile')

@section('content')

@section('background-image')
    <img class="d-none d-sm-block position-absolute profile-image z-n1"
        src="{{ asset('assets/img/profile-image' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />

@endsection

<section class="user-profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card user-information border-0 p-4 mb-4">
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <div>
                            <img width="40" src="{{ asset('assets/img/personal-information.svg') }}">
                            <span class="ms-3">{{ __('معلومات المستخدم') }}</span>
                        </div>
                        <i data-bs-toggle="modal" data-bs-target="#EditUser" class="far fa-edit fa-lg"></i>
                    </div>
                    <hr class="mt-0">

                    <div class="d-flex justify-content-between align-items-center p-2">
                        <span>{{ __('الاسم بالكامل') }}</span>
                        <span class="fw-bold">محمد علي محمد احمد</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <span>{{ __('البريد الإلكتروني') }}</span>
                        <span class="fw-bold">Eliteacd@gmail.com</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <span>{{ __('رقم الجوال') }}</span>
                        <span class="fw-bold">+972590000000</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-2">
                        <span>{{ __('العنوان') }}</span>
                        <span class="fw-bold">قلسطين - غزة</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="card border-0 pb-4 mb-4">
                    <div class="card_background_img"></div>
                    <div class="ms-5">
                        <div class="card_profile_img mb-2 position-relative">
                            <div class="camera-img position-absolute rounded-circle">
                                <img class="p-2" width="30" src="{{ asset('assets/img/camera.svg') }}">
                            </div>
                        </div>
                        <div class="user_details">
                            <h3 class="fw-bold">محمد أحمد</h3>
                            <div class="verify mb-1">
                                <span class="ms-1">{{ __('غير مفعل') }}</span>
                            </div>
                            <span><img class="me-2" width="20"
                                    src="{{ asset('assets/img/pin-location.svg') }}">فلسطين -
                                غزة</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card elite-agents p-4 border-0 mb-5">
                    <div class="text-center mb-3">
                        <h2 class="fw-bold mb-4">{{ __('وكلاء إليت') }}</h2>
                        <div class="card bg-fa mb-3 p-4 border-0 shadow-none w-75 m-auto">
                            <h4 class="fw-bold">{{ __('الصبيح للصرافة') }}</h4>
                            <p class="mb-2">{{ __('العنوان') }}: شارع الوحدة - مقابل
                                معهد الأمل</p>
                            <p>{{ __('رقم الجوال') }}: 0594320007</p>
                        </div>
                        <div class="card bg-fa mb-3 p-4 border-0 shadow-none w-75 m-auto">
                            <h4 class="fw-bold">{{ __('الصبيح للصرافة') }}</h4>
                            <p class="mb-2">{{ __('العنوان') }}: شارع الوحدة - مقابل
                                معهد الأمل</p>
                            <p>{{ __('رقم الجوال') }}: 0594320007</p>
                        </div>
                        <div class="card bg-fa mb-3 p-4 border-0 shadow-none w-75 m-auto">
                            <h4 class="fw-bold">{{ __('الصبيح للصرافة') }}</h4>
                            <p class="mb-2">{{ __('العنوان') }}: شارع الوحدة - مقابل
                                معهد الأمل</p>
                            <p>{{ __('رقم الجوال') }}: 0594320007</p>
                        </div>
                        <div class="card bg-fa mb-3 p-4 border-0 shadow-none w-75 m-auto">
                            <h4 class="fw-bold">{{ __('الصبيح للصرافة') }}</h4>
                            <p class="mb-2">{{ __('العنوان') }}: شارع الوحدة - مقابل
                                معهد الأمل</p>
                            <p>{{ __('رقم الجوال') }}: 0594320007</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="card border-0 py-3">
                    <nav>
                        <div class="nav nav-tabs d-flex justify-content-around" id="nav-tab" role="tablist">
                            <button class="nav-link mb-0 active" id="nav-wallet-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-wallet" type="button" role="tab" aria-controls="nav-wallet"
                                aria-selected="false">{{ __('المحفظة') }}</button>

                            <button class="nav-link mb-0" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">{{ __('البوت') }}</button>

                            <button class="nav-link mb-0 " id="nav-settings-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-settings" type="button" role="tab"
                                aria-controls="nav-settings" aria-selected="false">{{ __('الإعدادات') }}</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade p-5 pt-4" id="nav-profile" role="tabpanel"
                            aria-labelledby="nav-profile-tab" tabindex="0">
                            <div class="d-none d-sm-flex flex-row-reverse mb-4">
                                <a href="{{ route('site.create_bot') }}"
                                    class="btn button-fill w-25">{{ __('إنشاء بوت جديد') }}</a>
                            </div>
                            <div class="d-flex d-sm-none justify-content-center mb-4 w-100">
                                <a href="{{ route('site.create_bot') }}"
                                    class="btn button-fill w-50">{{ __('إنشاء بوت جديد') }}</a>
                            </div>
                            <div id="active-bot-archive" class="mb-4 end-bot bg-fa p-2 rounded">
                                <img width="45" src="{{ asset('assets/img/bot.svg') }}" alt="">
                                <span class="ms-2 h5">{{ __('أرشيف البوت المنتهي') }}</span>
                            </div>
                            {{-- Bot Archive --}}
                            <div class="bot-money bg-fa bot-archive d-none position-relative p-4 mb-4">
                                <div class="d-flex position-absolute flex-row-reverse d-none d-sm-flex"
                                    style="{{ app()->isLocale('ar') ? 'left: 30px;' : 'right: 30px;' }}top: 30px;">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#BotMoves">
                                        <img width="40" src="{{ asset('assets/img/help-icon.svg') }}">
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between w-50">
                                    <p>{{ __('رأس المال') }}</p>
                                    <p>600.00</p>
                                </div>
                                <div class="d-flex justify-content-between w-50">
                                    <p>{{ __('ربحك') }}</p>
                                    <p>206.02</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between w-50">
                                    <p>{{ __('الإجمالي') }}</p>
                                    <p>857.53</p>
                                </div>
                                <a href="{{ route('site.bot_transactions') }}"
                                    class="btn button-fill me-2 mb-2 position-absolute d-none   d-sm-block"
                                    style="{{ app()->isLocale('ar') ? 'left: 100px; bottom: 25px;' : 'right: 100px; bottom: 25px;' }}">{{ __('حركات البوت') }}</a>
                                <center>
                                    <div
                                        class="d-flex justify-content-center align-items-center flex-column mb-2 d-sm-none">
                                        <a class="mb-2" href="#" data-bs-toggle="modal"
                                            data-bs-target="#BotMoves">
                                            <img width="40" src="{{ asset('assets/img/help-icon.svg') }}">
                                        </a>
                                        <a href="{{ route('site.bot_transactions') }}"
                                            class="btn button-fill me-2 mb-2">{{ __('حركات البوت') }}</a>
                                    </div>

                                </center>
                            </div>
                            <div class="bot-money bg-fa bot-archive d-none position-relative p-4 mb-4">
                                <div class="d-flex position-absolute flex-row-reverse d-none d-sm-flex"
                                    style="{{ app()->isLocale('ar') ? 'left: 30px;' : 'right: 30px;' }}top: 30px;">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#BotMoves">
                                        <img width="40" src="{{ asset('assets/img/help-icon.svg') }}">
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between w-50">
                                    <p>{{ __('رأس المال') }}</p>
                                    <p>600.00</p>
                                </div>
                                <div class="d-flex justify-content-between w-50">
                                    <p>{{ __('ربحك') }}</p>
                                    <p>206.02</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between w-50">
                                    <p>{{ __('الإجمالي') }}</p>
                                    <p>857.53</p>
                                </div>
                                <a href="{{ route('site.bot_transactions') }}"
                                    class="btn button-fill me-2 mb-2 position-absolute d-none d-sm-block"
                                    style="{{ app()->isLocale('ar') ? 'left: 100px; bottom: 25px;' : 'right: 100px; bottom: 25px;' }}">{{ __('حركات البوت') }}</a>
                                <center>
                                    <div
                                        class="d-flex justify-content-center align-items-center flex-column mb-2 d-sm-none">
                                        <a class="mb-2" href="#" data-bs-toggle="modal"
                                            data-bs-target="#BotMoves">
                                            <img width="40" src="{{ asset('assets/img/help-icon.svg') }}">
                                        </a>
                                        <a href="{{ route('site.bot_transactions') }}"
                                            class="btn button-fill me-2 mb-2">{{ __('حركات البوت') }}</a>
                                    </div>

                                </center>
                            </div>
                            {{-- Bot Archive --}}

                            {{-- Active Bot --}}
                            <div class="bot-money bg-fa active-bot position-relative p-4 mb-4">
                                <div class="d-flex position-absolute flex-row-reverse d-none d-sm-flex"
                                    style="{{ app()->isLocale('ar') ? 'left: 30px;' : 'right: 30px;' }}top: 30px;">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#BotMoves">
                                        <img width="40" src="{{ asset('assets/img/help-icon.svg') }}">
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between w-50">
                                    <p>{{ __('رأس المال') }}</p>
                                    <p>600.00</p>
                                </div>
                                <div class="d-flex justify-content-between w-50">
                                    <p>{{ __('ربحك') }}</p>
                                    <p>206.02</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between w-50">
                                    <p>{{ __('الإجمالي') }}</p>
                                    <p>857.53</p>
                                </div>

                                <div class="d-flex flex-sm-row flex-column align-items-center justify-content-center">
                                    <a class="mb-2 d-block d-sm-none" href="#" data-bs-toggle="modal"
                                        data-bs-target="#BotMoves">
                                        <img width="40" src="{{ asset('assets/img/help-icon.svg') }}">
                                    </a>
                                    <a href="{{ route('site.bot_transactions') }}"
                                        class="btn button-fill me-2 mb-2">{{ __('حركات البوت') }}</a>
                                    <a href=""
                                        class="btn stop-bot me-2 mb-2 fw-bold text-light">{{ __('طلب إيقاف البوت') }}</a>
                                </div>
                            </div>

                            {{-- Active Bot --}}


                        </div>
                        <div class="tab-pane fade p-4 active show" id="nav-wallet" role="tabpanel"
                            aria-labelledby="nav-wallet-tab" tabindex="0">
                            <div
                                class="d-flex justify-content-between {{ app()->isLocale('ar') ? 'w-60' : 'w-75' }} my-2 links">
                                <a class="fw-bold mb-3"
                                    href="{{ route('site.create_bot') }}">{{ __('إنشاء بوت جديد') }}</a>
                                <span class="d-none d-sm-block">|</span>
                                <a href="" class="fw-bold mb-3" data-bs-toggle="modal"
                                    data-bs-target="#DepositWallet">{{ __('شحن المحفظة') }}</a>
                                <span class="d-none d-sm-block">|</span>
                                <a href="" class="fw-bold mb-3" data-bs-toggle="modal"
                                    data-bs-target="#TransferWallet">{{ __('تحويل') }}</a>
                                <span class="d-none d-sm-block">|</span>
                                <a id="WithRequest" class="fw-bold rounded px-2"
                                    href="">{{ __('طلب سحب من المحفظة') }}</a>
                            </div>
                            <div id="withdrawal-request" class="withdrawl p-4 bg-fa d-none">
                                <div class="d-flex justify-content-between mb-3">
                                    <p>{{ __('قيمة المحفظة') }} &nbsp;&nbsp;&nbsp; (0.00000 USDT)</p>
                                    <a data-bs-toggle="modal" data-bs-target="#WithReq"
                                        class="btn button-fill w-25">{{ __('طلبات السحب') }}</a>
                                </div>
                                <form action="">
                                    <div class="form-group mb-3">
                                        <label class="mb-2">{{ __('قيمة السحب (*)') }}</label>
                                        <input type="number" class="form-control" step="any"
                                            placeholder="{{ __('قيمة السحب') }}" name="binance-address" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label id="withdrawl" class="mb-2">{{ __('طريقة السحب (*)') }}</label>
                                        <select class="form-control" name="gender" id="withdrawl">
                                            <option selected></option>
                                            <option value="1">حساب باي بال</option>
                                            <option value="2">حساب بنكي</option>
                                        </select>
                                    </div>
                                    <button class="btn button-fill w-100">{{ __('إرسال الطلب') }}</button>
                                </form>
                            </div>
                            <div id="withdrawal-history" class="wallet">
                                <div class="wallet-details bg-fa p-4 mb-3 pb-1">
                                    <div class="d-flex flex-sm-row flex-column justify-content-between">
                                        <div class="details">
                                            <div class="underline ps-2 position-relative">
                                                <div
                                                    class="d-flex flex-sm-row flex-column align-items-center mb-3 justify-content-between">
                                                    <p class="w-100">{{ __('عنوان المحفظة') }}</p>
                                                    <p class="text-wrap w-100">
                                                        ZQOSC6Xss558vhIA2aRxWt2B8DOoMjSNoWGs
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="underline px-2 position-relative">
                                                <div
                                                    class="d-flex flex-sm-row flex-column align-items-center mb-3 w-60 justify-content-between">
                                                    <p>{{ __('قيمة المحفظة') }}</p>
                                                    <p>(0.00000 USDT)</p>
                                                </div>
                                            </div>
                                            <div class="px-2 position-relative">
                                                <div
                                                    class="d-flex flex-sm-row flex-column align-items-center mb-3 w-75
                                                justify-content-between">
                                                    <p>{{ __('قيمة السحب') }}</p>
                                                    <p>(0.00 USDT)</p>
                                                </div>
                                            </div>
                                        </div>
                                        <center>
                                            <img width="100%" src="{{ asset('assets/img/qr-code.svg') }}"
                                                alt="">
                                        </center>
                                    </div>
                                </div>

                                <div
                                    class="d-flex justify-content-between align-items-center binance-address bg-fa p-3 mb-3">
                                    <p>{{ __('عنوان محفظة بينانس (TRC20):') }}</p>
                                    <a href="" class="btn button-fill" data-bs-toggle="modal"
                                        data-bs-target="#BinanceAddress">{{ __('إضافة') }}</a>
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-center binance-address bg-fa p-3 mb-3">
                                    <p>{{ __('بيانات Api Binance') }}</p>
                                    <a href="" class="btn button-fill" data-bs-toggle="modal"
                                        data-bs-target="#BinanceApi">{{ __('إضافة') }}</a>
                                </div>
                                <div class="alert alert-warning" role="alert">
                                    <span>0.035010201685687</span>&nbsp;&nbsp;&nbsp;
                                    <span class="bitcoin">{{ __('(تعادل بتكوين)') }}</span>
                                    <p>857.53029</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-5" id="nav-settings" role="tabpanel"
                            aria-labelledby="nav-settings-tab" tabindex="0">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button
                                            class="accordion-button bg-fa{{ app()->isLocale('ar') ? '' : 'accordion-button-en' }} collapsed fw-normal"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            {{ __('تغيير كلمة المرور') }}
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body bg-fa">
                                            <div class="mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ __('كلمة المرور القديمة') }}">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ __('كلمة المرور الجديدة') }}">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="{{ __('تأكيد كلمة المرور الجديدة') }}">
                                            </div>
                                            <div class="d-flex flex-row-reverse">
                                                <button class="btn button-fill">{{ __('تغيير') }}</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button
                                            class="accordion-button bg-fa{{ app()->isLocale('ar') ? '' : 'accordion-button-en' }} collapsed fw-normal"
                                            data-bs-toggle="modal" data-bs-target="#lang" type="button">
                                            {{ __('اللغة') }}
                                        </button>
                                    </h2>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button
                                            class="accordion-button bg-fa{{ app()->isLocale('ar') ? '' : 'accordion-button-en' }} collapsed fw-normal"
                                            type="button" data-bs-toggle="modal" data-bs-target="#VerifyUser"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            {{ __('التحقق من الحساب') }}
                                        </button>
                                    </h2>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button
                                            class="accordion-button bg-fa{{ app()->isLocale('ar') ? '' : 'accordion-button-en' }} delete-account collapsed fw-normal"
                                            type="button" aria-expanded="true" aria-controls="collapseOne">
                                            {{ __('حذف الحساب') }}
                                        </button>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="table-responsive" id="wallet-table">
            <table class="table table-hover text-center mt-5 bg-fa">
                <thead>
                    <th>#</th>
                    <th>{{ __('المبلغ') }}</th>
                    <th>{{ __('رسوم الشحن الالكتروني') }}</th>
                    <th>{{ __('نوع الحركة') }}</th>
                    <th>{{ __('حالة الحركة') }}</th>
                    <th>{{ __('من خلال') }}</th>
                    <th>{{ __('الملاحظة') }}</th>
                    <th>{{ __('تاريخ الحركة') }}</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr class="table-danger">
                        <td>784532</td>
                        <td>-600.00</td>
                        <td>0.00</td>
                        <td>سحب</td>
                        <td>ناجحة</td>
                        <td>wallet</td>
                        <td>تم إنشاء بوت جديد بقيمة 600 USDT</td>
                        <td>12-02-2023</td>
                        <td><a href="" class="btn button-fill">{{ __('طباعة الفاتورة') }}</a></td>
                    </tr>
                    <tr class="table-success">
                        <td>784532</td>
                        <td>600.00</td>
                        <td>0.00</td>
                        <td>سحب</td>
                        <td>ناجحة</td>
                        <td>wallet</td>
                        <td>تم إنشاء بوت جديد بقيمة 600 USDT</td>
                        <td>12-02-2023</td>
                        <td><a href="" class="btn button-fill">{{ __('طباعة الفاتورة') }}</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

{{-- ------------------------------------------------------- Modals ------------------------------------- --}}


{{-- Edit User --}}
<div class="modal fade" id="EditUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <div class="modal-header border-0">
                <h1 class="modal-title border-0 fs-5">
                    <div>
                        <img width="40" src="{{ asset('assets/img/personal-information.svg') }}">
                        <span class="ms-3">{{ __('معلومات المستخدم') }}</span>
                    </div>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div id="edit-user" class="forms">
                    <div class="container">
                        <div>
                            <form action="" id="edit-user" enctype="multipart/form-data" method="post">
                                <div class="form-group mb-3">
                                    <label class="mb-2">{{ __('رقم الهوية') }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('رقم الهوية') }}"
                                        name="national_id" />
                                </div>
                                <div class="d-flex mb-3">

                                    <div class="col">
                                        <label class="mb-2">{{ __('الاسم') }}</label>
                                        <input type="text" class="form-control me-2"
                                            placeholder="{{ __('الاسم') }}" name="first_name" />
                                    </div>
                                    <div class="col ms-2">
                                        <label class="mb-2">{{ __('اسم الأب') }}</label>
                                        <input type="text" class="form-control"
                                            placeholder="{{ __('اسم الأب') }}" name="father_name" />
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <div class="col">
                                        <label class="mb-2">{{ __('اسم الجد') }}</label>
                                        <input type="text" class="form-control me-2"
                                            placeholder="{{ __('اسم الجد') }}" name="grandfather_name" />
                                    </div>
                                    <div class="col ms-2">
                                        <label class="mb-2">{{ __('اسم العائلة') }}</label>
                                        <input type="text" class="form-control"
                                            placeholder="{{ __('اسم العائلة') }}" name="last_name" />
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2">{{ __('البريد الإلكتروني') }}</label>
                                    <input type="email" class="form-control"
                                        placeholder="{{ __('البريد الإلكتروني') }}" name="email" />
                                </div>

                                <div class="form-group mb-3">
                                    <label class="mb-2">{{ __('رقم الجوال') }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('رقم الجوال') }}"
                                        name="mobile_no" />
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2">{{ __('العنوان') }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('العنوان') }}"
                                        name="address" />
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2">{{ __('تاريخ الميلاد') }}</label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ __('تاريخ الميلاد') }}" name="date" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button class="btn button-fill">{{ __('حفظ التعديلات') }}</button>
                    </form>
                    <button type="button" class="btn button-notfill"
                        data-bs-dismiss="modal">{{ __('إغلاق') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Verify Account --}}

<div class="modal fade" id="VerifyUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content p-3">
            <div class="modal-header border-0">
                <h1 class="modal-title border-0 fs-5">
                    <div>
                        <img width="40" src="{{ asset('assets/img/personal-information.svg') }}">
                        <span class="ms-3">{{ __('التحقق من الحساب') }}</span>
                    </div>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="forms">
                    <div class="container">
                        <div>
                            <form action="" id="verify-user" enctype="multipart/form-data" method="post">
                                <div class="form-group mb-3">
                                    <label class="mb-2">{{ __('رقم الهوية') }}</label>
                                    <input type="text" class="form-control" placeholder="{{ __('رقم الهوية') }}"
                                        name="national_id" />
                                </div>

                                <div class="form-group mb-3">
                                    <label class="mb-2">{{ __('تاريخ الميلاد') }}</label>
                                    <input type="date" class="form-control"
                                        placeholder="{{ __('تاريخ الميلاد') }}" name="birthdate" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="file" class="mb-2">{{ __('صورة الهوية') }}</label>
                                    <input id="file" type="file" class="form-control"
                                        placeholder="{{ __('صورة الهوية') }}" name="file" />
                                </div>
                                <div class="form-group mb-3">
                                    <label for="selfi" class="mb-2">{{ __('صورة السيلفي') }}</label>
                                    <input id="selfi" type="file" class="form-control"
                                        placeholder="{{ __('صورة الهوية') }}" name="selfi" />
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button class="btn button-fill">{{ __('تأكيد طلب التحقق') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Delete Account --}}
<div class="modal fade" id="lang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog my-auto p-5">
        <div class="modal-content p-5">
            <div class="modal-header mb-3 justify-content-center">
                <h1 class="modal-title fw-bold fs-5">
                    {{ __('اللغة') }}
                </h1>
            </div>

            <div class="modal-body p-0">
                <div class="form-check d-flex justify-content-between px-4">
                    <label class="form-check-label" for="flexRadioDefault1">
                        {{ __('العربية') }}
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                </div>
                <hr>
                <div class="form-check d-flex justify-content-between px-4">
                    <label class="form-check-label" for="flexRadioDefault2">
                        {{ __('الإنجليزية') }}
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                </div>
                <hr>
                <div class="form-check d-flex justify-content-between px-4">
                    <label class="form-check-label" for="flexRadioDefault3">
                        {{ __('التركية') }}
                    </label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Bot Moves --}}

<div class="modal fade" id="BotMoves" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog p-5">
        <div class="modal-content p-4">
            <div class="modal-header px-1 text-center mb-3">
                <h1 class="modal-title fw-bold fs-5">
                    <img width="45" src="{{ asset('assets/img/bot.svg') }}" alt="">
                    <h3 class="h3 mt-2 d-inline">{{ __('تفاصيل البوت') }}</h3>
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body p-0">
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('رقم البوت') }}</p>
                    <p>10841</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('نوع البوت') }}</p>
                    <p>شهري</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('رأس المال') }}</p>
                    <p>600.00</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('نسبة البوت') }}</p>
                    <p>20</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('ربح البوت') }}</p>
                    <p>51.51</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('ربحك') }}</p>
                    <p>206.02</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('قيمة الحساب') }}</p>
                    <p>857.53</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('صافي قيمة الحساب') }}</p>
                    <p>806.02</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('تاريخ الايداع') }}</p>
                    <p>12-02-2023</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('تاريخ الانتهاء') }}</p>
                    <p>12-03-2023</p>
                </div>
                <div class="d-flex justify-content-between px-2">
                    <p>{{ __('الحالة') }}</p>
                    <p>ساري</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Binance Address --}}

<div class="modal fade" id="BinanceAddress" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog p-5">
        <div class="modal-content p-4">
            <div class="modal-header px-1 mb-4">
                <h1 class="modal-title fw-bold fs-5">
                    {{ __('عنوان محفظة بينانس') }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <form action="">
                    <div class="form-group mb-3">
                        <label class="mb-3">{{ __('عنوان محفظة بينانس (TRC20) (*)') }}</label>
                        <input type="text" class="form-control"
                            placeholder="{{ __('عنوان محفظة بينانس الخاص بك') }}" name="binance-address" />
                    </div>
                    <div class="float-end">
                        <button class="btn button-fill me-2">{{ __('حفظ البيانات') }}</button>
                        <button type="button" class="btn close"
                            data-bs-dismiss="modal">{{ __('إغلاق') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Binance Api --}}
<div class="modal fade" id="BinanceApi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog p-5" role="document">
        <div class="modal-content p-4">
            <div class="modal-header px-1 mb-4">
                <h1 class="modal-title fw-bold fs-5">
                    {{ __('بيانات Api Binance') }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <form>
                    <div class="form-group mb-3">
                        <label>Proxy (*)</label>
                        <label class="btn h-50 button-fill btn-sm float-end mb-2" id="generate_ip_proxy">Generate ip
                            proxy</label>
                        <input type="text" name="proxy" step="any" class="form-control" autocomplete="off"
                            disabled>
                    </div>
                    <div class="form-group mb-3">
                        <label>Api Key (*)</label>
                        <input type="text" name="apiKey" step="any" class="form-control"
                            autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label>Api Secret (*)</label>
                        <input type="text" name="apiSecret" step="any" class="form-control"
                            autocomplete="off">
                    </div>
                    <div class="float-end">
                        <button type="submit" class="btn button-fill ml-2">{{ __('حفظ البيانات') }}</button>
                        <button type="button" class="btn close"
                            data-bs-dismiss="modal">{{ __('إغلاق') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Tranfer Wallet --}}

<div class="modal fade" id="TransferWallet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog p-5" role="document">
        <div class="modal-content p-4">
            <div class="modal-header px-1">
                <h1 class="modal-title fw-bold fs-5">
                    {{ __('تحويل من محفظة لمحفظة') }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 mt-2">
                <form>
                    <div class="form-group mb-3">
                        <label class="mb-2">{{ __('عنوان المحفظة (*)') }}</label>
                        <input type="text" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2">{{ __('قيمة المبلغ (*)') }}</label>
                        <input type="number" step="any" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2">{{ __('رقم بطاقة المشترك (*)') }}</label>
                        <input type="text" class="form-control" autocomplete="off">
                    </div>

                    <center>
                        <button type="submit" class="btn button-fill ml-2">{{ __('متابعة العملية') }}</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Withdrawl Requests --}}
<div class="modal fade" id="WithReq" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog p-5" role="document">
        <div class="modal-content p-4">
            <div class="modal-header px-1">
                <h1 class="modal-title fw-bold fs-5">
                    {{ __('طلبات السحب') }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <th>#</th>
                            <th>{{ __('قيمة السحب') }}</th>
                            <th>{{ __('طريقة السحب') }}</th>
                            <th>{{ __('تاريخ الإنشاء') }}</th>
                            <th>{{ __('تاريخ التسليم') }}</th>
                        </thead>
                        <tbody>
                            {{--
                            <tr>
                                <td>1</td>
                                <td>1000</td>
                                <td>بنك الراجحي</td>
                                <td>2021-01-01</td>
                                <td>2021-01-01</td>
                            </tr>
                            --}}
                            <tr>
                                <td colspan="10">
                                    <div class="alert alert-danger p-3 text-center">
                                        {{ __('لا يوجد طلبات سحب') }}
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Deposit Wallet --}}
<div class="modal fade" id="DepositWallet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog p-5" role="document">
        <div class="modal-content p-4">
            <div class="modal-header px-1">
                <h1 class="modal-title fw-bold fs-5">
                    {{ __('شحن المحفظة') }}
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="alert alert-danger mb-3 p-2">
                    {{ __('سيتم خصم 3%، كرسوم شحن إلكتروني من المبلغ الذي يتم شحنه') }}
                </div>
                <form>
                    <div class="form-group mb-3">
                        <label class="mb-3">{{ __('المبلغ بالدولار (*)') }}</label>
                        <input type="number" step="any" class="form-control" autocomplete="off"
                            placeholder="{{ __('قيمة السحب') }}">
                    </div>

                    <div class="float-end">
                        <button class="btn button-fill me-2">{{ __('حفظ البيانات') }}</button>
                        <button type="button" class="btn close"
                            data-bs-dismiss="modal">{{ __('إغلاق') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
