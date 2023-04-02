@extends('site.master')

@section('title', config('app.name') . ' | Recorded Course')

@section('content')

@section('background-image')
    <img class="d-none d-sm-block position-absolute z-n1" src="{{ asset('assets/img/recorded-course.svg') }}" width="100%" />
@endsection

<header class="recorded-course-header">
    <div class="container">
        <center class="text-center">
            <h1 class="fw-bold">
                دورة تجارة الكترونية
            </h1>
            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك
                أن تولد مثل هذا النص أو العديد من النصوص الاخرى
            </p>
        </center>
    </div>
</header>

<section class="recorded-course">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="card mb-4 border-0">
                    <div class="position-relative">
                        <div class="overlay-video position-absolute">
                            <div
                                class="play-button z-1 rounded-circle position-absolute d-flex justify-content-center align-items-center">
                                <img width="25" src="{{ asset('assets/img/play-icon.svg') }}">
                            </div>
                        </div>
                        <video id="course-video" controls
                            src="{{ asset('assets/img/Valorant_03-06-2023_23-44-23-33.mp4') }}"
                            class="card-img-top"></video>
                    </div>
                    <div class="p-2">
                        <h3 class="fw-bold">دورة تجارة الكترونية</h3>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="titles p-3 border-0 z-1">
                    <div class="mb-3">
                        <div class="d-flex mb-3 align-items-center">
                            <div
                                class="checked select-icon rounded-circle d-flex justify-content-center align-items-center">
                                <img src="{{ asset('assets/img/checked.svg') }}">
                            </div>
                            <h4 class="fw-bold ms-2 mb-0">
                                {{ __('قسم التعريفات') }}
                            </h4>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded selected-title">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="select-icon rounded-circle">
                            </div>
                            <h4 class="fw-bold ms-2 mb-0">
                                {{ __('قسم التعريفات') }}
                            </h4>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="select-icon rounded-circle">
                            </div>
                            <h4 class="fw-bold ms-2 mb-0">
                                {{ __('قسم التعريفات') }}
                            </h4>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="select-icon rounded-circle">
                            </div>
                            <h4 class="fw-bold ms-2 mb-0">
                                {{ __('قسم التعريفات') }}
                            </h4>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                        <div class="d-flex ps-2 py-2 rounded">
                            <div class="not-fill-circle rounded-circle"></div>
                            <p class="ms-2 mb-0">
                                إلى عدد أكبر من الفقرات يتيح لك مولد
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
