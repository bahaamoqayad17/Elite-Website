@extends('site.master')

@section('title', config('app.name') . ' | Code Bot')

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

<section class="create-bot">
    <div class="container">
        <div class="card border-0 p-4">
            <h3 class="fw-bold mb-0">
                {{ __('إنشاء بوت جديد') }}
            </h3>
            <div class="line mb-4"></div>

            <div class="alert alert-danger" role="alert">
                <h4 class="fw-bold">{{ __('تنويه هام بخصوص البوت الإلكتروني') }}</h4>
                <ul class="dashed">
                    <li>{{ __('بعد اتمام الإشتراك في البوت، سيتم تفعيل البوت مدة أقصاها 24 ساعة.') }}</li>
                    <li>{{ __('مدة البوت، هو المدة الزمنية التي يعمل بها البوت.') }}</li>
                    <li>{{ __('أقل مبلغ للإشتراك في البوت 500 USDT.') }}</li>
                    <li>{{ __('عند عملية حفظ البيانات سيتم خصم اشتراك البوت من المحفظة بشكل مباشر.') }}</li>
                    <li>{{ __('نسبة البوت (1-3 أشهر: 30%) ، (4-6 أشهر: 25%) ، (7-12 شهر: 20%) .') }}</li>
                    <li>{{ __('نوع البوت الشهري يجب أن يكون مدة البوت 12 شهراً فقط') }}</li>
                </ul>

            </div>
            <form action="">
                <div class="d-flex mb-3">
                    <div class="col">
                        <label class="mb-2" for="inputGroupSelect01">{{ __('مدة البوت (*)') }}</label>
                        <select class="form-select" name="type_id" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col ms-2">
                        <label class="mb-2" for="inputGroupSelect02">{{ __('نوع البوت (*)') }}</label>
                        <select class="form-select" name="investment_group_id" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 me-2 mb-4">
                    <label class="mb-2" for="inputGroupSelect03">{{ __('قيمة الإشتراك (USDT) (*)') }}</label>
                    <input type="number" class="form-control" id="inputGroupSelect03" name="capital_amount">
                </div>
                <button class="btn button-fill w-100 mb-4">{{ __('حفظ البيانات') }}</button>
            </form>
        </div>
    </div>

</section>


@endsection
