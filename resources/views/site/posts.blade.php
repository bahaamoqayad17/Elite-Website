@extends('site.master')

@section('title', config('app.name') . ' | Posts')

@section('content')

@section('background-image')
    @if (app()->isLocale('ar'))
        <img style="top: -284px;
    right: -173px;" class="d-none d-sm-block position-absolute z-n1"
            src="{{ asset('assets/img/register.svg') }}" width="57%" />
    @else
        <img style="top: -284px;
    left: -173px;" class="d-none d-sm-block position-absolute z-n1"
            src="{{ asset('assets/img/register-en.svg') }}" width="57%" />
    @endif
@endsection

<section class="posts-section">
    <div class="container">
        <center class="mb-5">
            <h1 class="fw-bold">{{ __('جميع المنشورات') }}</h1>
            <div class="line mb-5"></div>
        </center>
        <div class="mx-auto">
            <div class="post mt-5 item p-5 position-relative">
                <img class="image-logo position-absolute" width="30%" src="{{ asset('assets/img/logo.png') }}">
                <p class="text-center post-content mb-4">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                    حيث
                    يمكنك
                    أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                    حيث
                    يمكنك
                    أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                </p>
                <div class="interactions">
                    <div class="d-flex justify-content-between">
                        <p class="comments-number">30 {{ __('تعليق') }}</p>
                        <div class="d-flex d-sm-none">
                            <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                {{ __('تفاعل') }}</p>
                            <img class="icons mb-3" src="{{ asset('assets/img/likes-comment.svg') }}">
                            <img class="icons mb-3" src="{{ asset('assets/img/love-comment.svg') }}">
                        </div>
                    </div>

                    <hr>
                    <div class="likes d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between like-comment">
                            <div class="interaction rounded-circle p-3">
                                <img class="interaction-icons" src="{{ asset('assets/img/like.svg') }}">
                            </div>

                            <div class="interaction rounded-circle p-3">
                                <img class="interaction-icons" src="{{ asset('assets/img/comment.svg') }}">
                            </div>

                            <div class="interaction rounded-circle p-3">
                                <img class="interaction-icons" src="{{ asset('assets/img/share-post.svg') }}">
                            </div>

                        </div>
                        <div class="d-flex">
                            <div class="d-flex d-none d-sm-flex">
                                <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                    {{ __('تفاعل') }}</p>
                                <img src="{{ asset('assets/img/likes-comment.svg') }}" alt="">
                                <img src="{{ asset('assets/img/love-comment.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="comments d-flex flex-column">
                        <div class="comment mb-3">
                            <div class="comment-content rounded bg-fa d-flex p-2 ">
                                <div class="user-avatar me-3"></div>
                                <div>
                                    <h4 class="fw-bold text-dark">محمد احمد</h4>
                                    <p class="comment-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس </p>
                                </div>
                            </div>
                            <div class="float-end">
                                <a href="">
                                    <span class="me-3">{{ __('إعجاب') }}</span>
                                </a>
                                <a href="">
                                    <span>{{ __('رد') }}</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="post mt-5 item p-5 position-relative">
                <img class="image-logo position-absolute" width="30%" src="{{ asset('assets/img/logo.png') }}"
                    alt="">
                <p class="text-center post-content mb-4">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                    حيث
                    يمكنك
                    أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                    حيث
                    يمكنك
                    أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                </p>
                <div class="interactions">
                    <div class="d-flex justify-content-between">
                        <p class="comments-number">30 {{ __('تعليق') }}</p>
                        <div class="d-flex d-sm-none">
                            <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                {{ __('تفاعل') }}</p>
                            <img class="icons mb-3" src="{{ asset('assets/img/likes-comment.svg') }}">
                            <img class="icons mb-3" src="{{ asset('assets/img/love-comment.svg') }}">
                        </div>
                    </div>

                    <hr>
                    <div class="likes d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between like-comment">
                            <div class="interaction rounded-circle p-3">
                                <img class="interaction-icons" src="{{ asset('assets/img/like.svg') }}">
                            </div>

                            <div class="interaction rounded-circle p-3">
                                <img class="interaction-icons" src="{{ asset('assets/img/comment.svg') }}">
                            </div>

                            <div class="interaction rounded-circle p-3">
                                <img class="interaction-icons" src="{{ asset('assets/img/share-post.svg') }}">
                            </div>

                        </div>
                        <div class="d-flex">
                            <div class="d-flex d-none d-sm-flex">
                                <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                    {{ __('تفاعل') }}</p>
                                <img src="{{ asset('assets/img/likes-comment.svg') }}" alt="">
                                <img src="{{ asset('assets/img/love-comment.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="comments d-flex flex-column">
                        <div class="comment mb-3">
                            <div class="comment-content rounded bg-fa d-flex p-2 ">
                                <div class="user-avatar me-3"></div>
                                <div>
                                    <h4 class="fw-bold text-dark">محمد احمد</h4>
                                    <p class="comment-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس </p>
                                </div>
                            </div>
                            <div class="float-end">
                                <a href="">
                                    <span class="me-3">{{ __('إعجاب') }}</span>
                                </a>
                                <a href="">
                                    <span>{{ __('رد') }}</span>

                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="post mt-5 item p-5 position-relative">
                <img class="image-logo position-absolute" width="30%" src="{{ asset('assets/img/logo.png') }}"
                    alt="">
                <p class="text-center post-content mb-4">
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                    حيث
                    يمكنك
                    أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                    حيث
                    يمكنك
                    أن تولد مثل هذا النص أو العديد من النصوص الاخرى
                </p>
                <div class="interactions">
                    <div class="d-flex justify-content-between">
                        <p class="comments-number">30 {{ __('تعليق') }}</p>
                        <div class="d-flex d-sm-none">
                            <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                {{ __('تفاعل') }}</p>
                            <img class="icons mb-3" src="{{ asset('assets/img/likes-comment.svg') }}">
                            <img class="icons mb-3" src="{{ asset('assets/img/love-comment.svg') }}">
                        </div>
                    </div>

                    <hr>
                    <div class="likes d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between like-comment">
                            <div class="interaction rounded-circle p-3">
                                <img class="interaction-icons" src="{{ asset('assets/img/like.svg') }}">
                            </div>

                            <div class="interaction rounded-circle p-3">
                                <img class="interaction-icons" src="{{ asset('assets/img/comment.svg') }}">
                            </div>

                            <div class="interaction rounded-circle p-3">
                                <img class="interaction-icons" src="{{ asset('assets/img/share-post.svg') }}">
                            </div>

                        </div>
                        <div class="d-flex">
                            <div class="d-flex d-none d-sm-flex">
                                <p class="mb-0 mt-1 me-1 comments-number users-number">50
                                    {{ __('تفاعل') }}</p>
                                <img src="{{ asset('assets/img/likes-comment.svg') }}" alt="">
                                <img src="{{ asset('assets/img/love-comment.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="comments d-flex flex-column">
                        <div class="comment mb-3">
                            <div class="comment-content rounded bg-fa d-flex p-2 ">
                                <div class="user-avatar me-3"></div>
                                <div>
                                    <h4 class="fw-bold text-dark">محمد احمد</h4>
                                    <p class="comment-text">هذا النص هو مثال لنص يمكن أن يستبدل في نفس </p>
                                </div>
                            </div>
                            <div class="float-end">
                                <a href="">
                                    <span class="me-3">{{ __('إعجاب') }}</span>
                                </a>
                                <a href="">
                                    <span>{{ __('رد') }}</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
