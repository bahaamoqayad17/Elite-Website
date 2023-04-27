@extends('site.master')

@section('title', config('app.name') . ' | Plan')

@section('content')
@section('background-image')
    <img class="d-none d-sm-block position-absolute image-login z-n1"
        src="{{ asset('assets/img/login' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />
@endsection

<section class="single-plan-section">
    <div class="container">
        <div class="card p-5 w-75 m-auto">
            <div class="d-flex justify-content-center">
                <div class="title mb-5">
                    <div class="ball position-absolute rounded-circle"></div>
                    <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                </div>
            </div>

            <div class="plan-content">
                <div class="d-flex fw-bold justify-content-between">
                    <p>{{ __('شهرياً') }}</p>
                    <p>25$</p>
                </div>
                <div class="d-flex fw-bold justify-content-between">
                    <p>{{ __('نسبة ربح الشركة') }}</p>
                    <p>30%</p>
                </div>
            </div>
            <hr class="mb-5">
            <center>
                <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
            </center>
        </div>
    </div>
</section>
@endsection
