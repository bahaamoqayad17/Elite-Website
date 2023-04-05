@extends('site.master')

@section('title', config('app.name') . ' | Forget Password')

@section('content')
@section('background-image')
    <img class="d-none d-sm-block position-absolute image-login z-n1"
        src="{{ asset('assets/img/login' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />
@endsection

<section class="forms">
    <div class="container">
        <div class="card p-5 w-60 m-auto">
            <h2 class="text-center fw-bold pb-5 before">{{ __('البوت الخاص بك') }}</h2>
            <form action="" id="forget-password-1" method="post">
                <div class="form-group mb-3">
                    <div class="form-group mb-5">
                        <label class="mb-3">{{ __('يرجى ادخال آخر 8 أرقام من بطاقة الاستثمار:') }}</label>
                        <input type="text" class="form-control" />
                        <p class="text-secondary mt-2">
                            {{ __('لابد من ادخال آخر 8 أرقام من بطاقة الاستثمار للتمكن من الاطلاع على حركات استثمار الحساب') }}
                        </p>
                    </div>
                </div>
                <button class="btn col-12">{{ __('فحص الرقم') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
