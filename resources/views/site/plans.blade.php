@extends('site.master')

@section('title', config('app.name') . ' | Plans')

@section('content')
@section('background-image')

    <img class="d-none d-sm-block position-absolute plans-image z-n1"
        src="{{ asset('assets/img/plans-image' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />
@endsection

<section class="plans">
    <div class="container">
        <div class="card p-5">
            <h1 class="fw-bold">{{ __('الباقات') }}</h1>
            <div class="line mb-5"></div>
            <div class="plan rounded bg-fa p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <div class="position-relative fw-bold">
                        <div class="ball position-absolute rounded-circle"></div>
                        <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('شهرياً') }}</p>
                            <p>25$</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('نسبة ربح الشركة') }}</p>
                            <p>30%</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
                    </div>
                </div>
            </div>
            <div class="plan rounded bg-fa p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <div class="position-relative fw-bold">
                        <div class="ball position-absolute rounded-circle"></div>
                        <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('شهرياً') }}</p>
                            <p>25$</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('نسبة ربح الشركة') }}</p>
                            <p>30%</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
                    </div>
                </div>
            </div>
            <div class="plan rounded bg-fa p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <div class="position-relative fw-bold">
                        <div class="ball position-absolute rounded-circle"></div>
                        <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('شهرياً') }}</p>
                            <p>25$</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('نسبة ربح الشركة') }}</p>
                            <p>30%</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
                    </div>
                </div>
            </div>
            <div class="plan rounded bg-fa p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <div class="position-relative fw-bold">
                        <div class="ball position-absolute rounded-circle"></div>
                        <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('شهرياً') }}</p>
                            <p>25$</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('نسبة ربح الشركة') }}</p>
                            <p>30%</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
                    </div>
                </div>
            </div>
            <div class="plan rounded bg-fa p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <div class="position-relative fw-bold">
                        <div class="ball position-absolute rounded-circle"></div>
                        <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('شهرياً') }}</p>
                            <p>25$</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('نسبة ربح الشركة') }}</p>
                            <p>30%</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
                    </div>
                </div>
            </div>
            <div class="plan rounded bg-fa p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <div class="position-relative fw-bold">
                        <div class="ball position-absolute rounded-circle"></div>
                        <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('شهرياً') }}</p>
                            <p>25$</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('نسبة ربح الشركة') }}</p>
                            <p>30%</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
                    </div>
                </div>
            </div>
            <div class="plan rounded bg-fa p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <div class="position-relative fw-bold">
                        <div class="ball position-absolute rounded-circle"></div>
                        <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('شهرياً') }}</p>
                            <p>25$</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('نسبة ربح الشركة') }}</p>
                            <p>30%</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
                    </div>
                </div>
            </div>
            <div class="plan rounded bg-fa p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <div class="position-relative fw-bold">
                        <div class="ball position-absolute rounded-circle"></div>
                        <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('شهرياً') }}</p>
                            <p>25$</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('نسبة ربح الشركة') }}</p>
                            <p>30%</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
                    </div>
                </div>
            </div>
            <div class="plan rounded bg-fa p-4 mb-4">
                <div class="d-flex justify-content-between align-items-center flex-sm-row flex-column">
                    <div class="position-relative fw-bold">
                        <div class="ball position-absolute rounded-circle"></div>
                        <h1 class="mb-4 fw-bold">{{ __('باقة') }} 1000$ - 3000$</h1>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('شهرياً') }}</p>
                            <p>25$</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>{{ __('نسبة ربح الشركة') }}</p>
                            <p>30%</p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="btn button-fill">{{ __('اشترك') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
