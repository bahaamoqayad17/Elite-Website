@extends('site.master')

@section('title', config('app.name') . ' | Crypto Currencies')

@section('content')

@section('background-image')
    @if (app()->isLocale('ar'))
        <img class="d-none d-sm-block position-absolute register-image z-n1" src="{{ asset('assets/img/register.svg') }}"
            width="56%" />
    @else
        <img class="d-none d-sm-block position-absolute register-image-en z-n1"
            src="{{ asset('assets/img/register-en.svg') }}" width="56%" />
    @endif
@endsection

<section class="crypto-currencies">
    <div class="container">
        <div class="d-flex mb-4">
            <div class="col">
                <label class="mb-2">{{ __('البحث في العملات') }}</label>
                <input type="text" class="form-control" placeholder="{{ __('البحث...') }}" />
            </div>
            <div class="col ms-2">
                <label class="mb-2" for="filter_legality">{{ __('المشروعية') }}</label>
                <select class="form-control" name="filter_legality" id="filter_legality">
                    <option selected></option>
                    <option value="مباح">{{ __('مباح') }}</option>
                    <option value="غير مباح">{{ __('غير مباح') }}</option>
                    <option value="شبهة شرعية">{{ __('شبهة شرعية') }}</option>
                </select>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover text-center bg-fa">
                <thead>
                    <th>#</th>
                    <th>{{ __('اختصار العملة') }}</th>
                    <th>{{ __('اسم العملة الكامل') }}</th>
                    <th>{{ __('استخدام مشروع العملة') }}</th>
                    <th>{{ __('مشروعيتها') }}</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>BTC</td>
                        <td>BITCOIN</td>
                        <td>حفظ القيمه / الدفع من شركه الي شركه / اساس التكنولوجيا الي أغلب العملات الرقمية</td>
                        <td>شبهة شرعية</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="float-end text-secondary">{{ __('قائمة من العملات المحرمة والمباحة') }}</p>
    </div>
</section>


@endsection
