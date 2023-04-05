@extends('site.master')

@section('title', config('app.name') . ' | FAQ')

@section('content')

@section('background-image')
    <img class="d-none d-sm-block position-absolute image-login z-n1"
        src="{{ asset('assets/img/login' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />
@endsection

<header class="faq-header">
    <div class="container">
        <h1 class="mb-3 ms-5 fw-bold">{{ __('الأسئلة الشائعة') }}</h1>
        <hr class="mb-3 bg-dark" />
        <p>
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
            توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل
            هذا النص أو العديد من النصوص الاخرى هذا النص هو مثال لنص
            يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
            النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من
            النصوص الاخرى
        </p>

        <center>
            <img src="{{ asset('assets/img/FAQ.png') }}" width="100%" />
        </center>
    </div>
</header>

<section class="faq-section">
    <div class="container">
        <center class="mb-5">
            <h1 class="fw-bold">{{ __('الأسئلة الشائعة') }}</h1>
            <p class="px-5">
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد
                مثل هذا النص أو العديد من النصوص الاخرى
            </p>
        </center>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="accordion mt-5" id="accordionExample">
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header border-0" id="headingOne">
                            <button class="accordion-button border border-bottom-0 border-0 text-decoration-none py-1"
                                type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false"
                                aria-controls="item1">
                                <div class="d-flex align-items-center">
                                    <span class="h1 bullet">&#8226;</span>
                                    &nbsp; &nbsp; &nbsp;
                                    <span>
                                        هذا النص هو مثال لنص يمكن أن
                                        يستبدل في نفس ؟
                                    </span>
                                </div>
                            </button>
                        </h2>
                        <div id="item1" class="accordion-collapse border-0 collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Maiores, facere
                                voluptas eius cumque fuga ipsa quasi
                                blanditiis rerum veniam, deserunt
                                repellat dolores impedit recusandae
                                ipsam fugiat ex assumenda velit
                                asperiores.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header border-0" id="headingTwo">
                            <button
                                class="accordion-button border border-bottom-0 border-0 text-decoration-none collapsed py-1"
                                type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false"
                                aria-controls="item2">
                                <div class="d-flex align-items-center">
                                    <span class="h1">&#8226;</span>
                                    &nbsp; &nbsp; &nbsp;
                                    <span>
                                        هذا النص هو مثال لنص يمكن أن
                                        يستبدل في نفس ؟
                                    </span>
                                </div>
                            </button>
                        </h2>
                        <div id="item2" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit. Earum provident
                                eligendi, autem assumenda placeat
                                inventore. Dolore optio, minus
                                repellendus ea sed quas! Reprehenderit
                                suscipit totam sequi autem ab tempore
                                corrupti.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header border-0" id="headingThree">
                            <button
                                class="accordion-button border border-bottom-0 border-0 text-decoration-none collapsed py-1"
                                type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false"
                                aria-controls="item3">
                                <div class="d-flex align-items-center">
                                    <span class="h1">&#8226;</span>
                                    &nbsp; &nbsp; &nbsp;
                                    <span>
                                        هذا النص هو مثال لنص يمكن أن
                                        يستبدل في نفس ؟
                                    </span>
                                </div>
                            </button>
                        </h2>
                        <div id="item3" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Praesentium, nesciunt.
                                A vel veniam labore dolorum accusantium
                                quaerat fuga et, voluptas aliquid error?
                                Doloribus, ullam cupiditate est expedita
                                adipisci dignissimos explicabo.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3 border-0">
                        <h2 class="accordion-header border-0" id="headingThree">
                            <button
                                class="accordion-button border border-bottom-0 border-0 text-decoration-none collapsed py-1"
                                type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false"
                                aria-controls="item4">
                                <div class="d-flex align-items-center">
                                    <span class="h1">&#8226;</span>
                                    &nbsp; &nbsp; &nbsp;
                                    <span>
                                        هذا النص هو مثال لنص يمكن أن
                                        يستبدل في نفس ؟
                                    </span>
                                </div>
                            </button>
                        </h2>
                        <div id="item4" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Praesentium, nesciunt.
                                A vel veniam labore dolorum accusantium
                                quaerat fuga et, voluptas aliquid error?
                                Doloribus, ullam cupiditate est expedita
                                adipisci dignissimos explicabo.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <center class="mt-4">
                    <img src="{{ asset('assets/img/FAQ-vector.png') }}" width="70%" />
                </center>
            </div>
        </div>
    </div>
</section>
@endsection
