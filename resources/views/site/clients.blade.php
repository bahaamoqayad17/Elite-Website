@extends('site.master')

@section('title', config('app.name'))

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/animation.css') }}">
@endsection

@section('content')

    <section class="elite-clients pb-0">

        <div class="text-center">
            <h1 class="fw-bold">{{ __('عملاء إليت') }}</h1>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                حيث
                يمكنك
                أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>
        </div>
        <div>
            <div class="reverse-curved curved">

            </div>

            <div class="curved">
                <div class="owl-carousel owl-clients">
                    <div class="box mb-4 item p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                    <div class="box item p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex mt-4">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                    <div class="box item p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex mt-4">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                    <div class="box item p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex mt-4">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                    <div class="box item p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex mt-4">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">

                </div>
            </div>
        </div>
    </section>

    <section class="elite-clients-section pt-5 position-relative z-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box p-4 pt-5 mb-4">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box mb-4 p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box mb-4 p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box mb-4 p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box mb-4 p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box mb-4 p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box mb-4 p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box mb-4 p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="box mb-4 p-4 pt-5">
                        <div class="stars mb-4">
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                            <i class="fas fa-star full"></i>
                        </div>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث
                            يمكنك
                            أن تولد مثل هذا النص أو العديد من النصوص الاخرى</p>

                        <div class="d-flex">
                            <div class="user-avatar me-3"></div>
                            <div>
                                <h5 class="fw-bold">{{ __('اسم العميل') }}</h5>
                                <p>مصمم</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example" class="m-0">
                <ul class="pagination float-end">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    @if (app()->isLocale('ar'))
        <script src="{{ asset('assets/js/owl-ar.js') }}"></script>
    @else
        <script src="{{ asset('assets/js/owl-en.js') }}"></script>
    @endif

@endsection
