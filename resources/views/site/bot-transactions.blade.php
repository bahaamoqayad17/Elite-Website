@extends('site.master')

@section('title', config('app.name') . ' | Bot Moves')

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

<section class="bot-moves">
    <div class="container">
        <div class="card p-5">
            <h1 class="text-center">{{ __('حركات البوت') }}</h1>
            <div class="line m-auto mb-4"></div>
            <div class="table-responsive">
                <table class="table table-hover text-center bg-fa">
                    <thead>
                        <th>#</th>
                        <th>{{ __('رأس المال') }}</th>
                        <th>{{ __('نوع الحركة') }}</th>
                        <th>{{ __('نوع الحركة التجارية') }}</th>
                        <th>{{ __('قيمة الحركة') }}</th>
                        <th>{{ __('قيمة الحساب بعد الحركة') }}</th>
                        <th>{{ __('تاريخ الحركة') }}</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>784532</td>
                            <td>600</td>
                            <td>تداول</td>
                            <td>مضاربة أسهم مالية رقمية </td>
                            <td class="table-success">13.97</td>
                            <td class="table-success">857.79</td>
                            <td>12-02-2023</td>
                        </tr>
                        <tr>
                            <td>784532</td>
                            <td>600</td>
                            <td>تداول</td>
                            <td>مضاربة أسهم مالية رقمية </td>
                            <td class="table-success">13.97</td>
                            <td class="table-success">857.79</td>
                            <td>12-02-2023</td>
                        </tr>
                        <tr>
                            <td>784532</td>
                            <td>600</td>
                            <td>تداول</td>
                            <td>مضاربة أسهم مالية رقمية </td>
                            <td class="table-success">13.97</td>
                            <td class="table-success">857.79</td>
                            <td>12-02-2023</td>
                        </tr>
                        <tr>
                            <td>784532</td>
                            <td>600</td>
                            <td>تداول</td>
                            <td>مضاربة أسهم مالية رقمية </td>
                            <td class="table-success">13.97</td>
                            <td class="table-success">857.79</td>
                            <td>12-02-2023</td>
                        </tr>
                        <tr>
                            <td>784532</td>
                            <td>600</td>
                            <td>تداول</td>
                            <td>مضاربة أسهم مالية رقمية </td>
                            <td class="table-success">13.97</td>
                            <td class="table-success">857.79</td>
                            <td>12-02-2023</td>
                        </tr>
                        <tr>
                            <td>784532</td>
                            <td>600</td>
                            <td>تداول</td>
                            <td>مضاربة أسهم مالية رقمية </td>
                            <td class="table-success">13.97</td>
                            <td class="table-success">857.79</td>
                            <td>12-02-2023</td>
                        </tr>
                        <tr>
                            <td>784532</td>
                            <td>600</td>
                            <td>تداول</td>
                            <td>مضاربة أسهم مالية رقمية </td>
                            <td class="table-success">13.97</td>
                            <td class="table-success">857.79</td>
                            <td>12-02-2023</td>
                        </tr>
                        <tr>
                            <td>784532</td>
                            <td>600</td>
                            <td>تداول</td>
                            <td>مضاربة أسهم مالية رقمية </td>
                            <td class="table-success">13.97</td>
                            <td class="table-success">857.79</td>
                            <td>12-02-2023</td>
                        </tr>
                        <tr>
                            <td>784532</td>
                            <td>600</td>
                            <td>تداول</td>
                            <td>مضاربة أسهم مالية رقمية </td>
                            <td class="table-success">13.97</td>
                            <td class="table-success">857.79</td>
                            <td>12-02-2023</td>
                        </tr>
                    </tbody>
                </table>
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
