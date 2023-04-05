@extends('site.master')

@section('title', config('app.name') . ' | Notifications')

@section('content')
@section('background-image')
    {{-- <img class="d-none d-sm-block position-absolute notification-image z-n1"
        src="{{ asset('assets/img/login' . app()->isLocale('ar') ? '' : '-en' . '.svg') }}" /> --}}
    <img class="d-none d-sm-block position-absolute notification-image z-n1"
        src="{{ asset('assets/img/login' . (app()->isLocale('ar') ? '' : '-en') . '.svg') }}" />
@endsection

<section class="notification">
    <div class="container">
        <div class="card border-0 p-5">
            <h1 class="fw-bold">{{ __('إشعاراتي') }}</h1>
            <div class="line mb-4"></div>
            <div class="card shadow-none border-0 notify bg-fa p-4 mb-3">
                <h5>حركة استثمار جديدة</h5>
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                    <p>قيمة حركة عقود دوري: 1.46%(مضاربة أسهم مالية رقمية)</p>
                    <p>12-02-2023</p>
                </div>
            </div>
            <div class="card shadow-none border-0 notify bg-fa p-4 mb-3">
                <h5>حركة استثمار جديدة</h5>
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                    <p>قيمة حركة عقود دوري: 1.46%(مضاربة أسهم مالية رقمية)</p>
                    <p>12-02-2023</p>
                </div>
            </div>
            <div class="card shadow-none border-0 notify bg-fa p-4 mb-3">
                <h5>حركة استثمار جديدة</h5>
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                    <p>قيمة حركة عقود دوري: 1.46%(مضاربة أسهم مالية رقمية)</p>
                    <p>12-02-2023</p>
                </div>
            </div>
            <div class="card shadow-none border-0 notify bg-fa p-4 mb-3">
                <h5>حركة استثمار جديدة</h5>
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                    <p>قيمة حركة عقود دوري: 1.46%(مضاربة أسهم مالية رقمية)</p>
                    <p>12-02-2023</p>
                </div>
            </div>
            <div class="card shadow-none border-0 notify bg-fa p-4 mb-3">
                <h5>حركة استثمار جديدة</h5>
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                    <p>قيمة حركة عقود دوري: 1.46%(مضاربة أسهم مالية رقمية)</p>
                    <p>12-02-2023</p>
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
    </div>
</section>
@endsection
