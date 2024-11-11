@extends('dashboard.main')

@section('custom-css')
@endsection

@section('content')
    {{-- Page Header --}}
    <div class="page-header d-print-none mt-2">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h3 class="page-title">
                        {{ $title }}
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    {{-- <div class="row row-cards">
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-teal text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-share" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h3"></path>
                                                    <path d="M16 22l5 -5"></path>
                                                    <path d="M21 21.5v-4.5h-4.5"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="fw-bold">
                                                {{ $total_visitor }}
                                            </div>
                                            <div class="text-muted">
                                                visitor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-indigo text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                                                    <path d="M16 3l0 4"></path>
                                                    <path d="M8 3l0 4"></path>
                                                    <path d="M4 11l16 0"></path>
                                                    <path d="M8 15h2v2h-2z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="fw-bold">
                                                {{ $total_visitor_today }}
                                            </div>
                                            <div class="text-muted">
                                                visitor today
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-azure text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard-list" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                                                    <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z"></path>
                                                    <path d="M9 12l.01 0"></path>
                                                    <path d="M13 12l2 0"></path>
                                                    <path d="M9 16l.01 0"></path>
                                                    <path d="M13 16l2 0"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="fw-bold">
                                                {{ $total_portfolio }}
                                            </div>
                                            <div class="text-muted">
                                                portfolio
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <span class="bg-cyan text-white avatar">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                    <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                                                    <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                    <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                                                    <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                    <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col">
                                            <div class="fw-bold">
                                                {{ $total_partner }}
                                            </div>
                                            <div class="text-muted">
                                                partner
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">
                                        Visitor Statistics 
                                        <span class="text-muted fs-5 d-none d-lg-inline-block">(last 30 days)</span>
                                    </h3>
                                    <div id="visitorChart" class="chart-lg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card" style="height: 30rem">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Latest Visitors 
                                        <span class="text-muted fs-5 d-none d-lg-inline-block">(latest 50)</span>
                                    </h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table card-table table-vcenter" style="white-space: nowrap;">
                                        <thead class="sticky-top">
                                            <tr>
                                                <th>Time</th>
                                                <th>IP Address</th>
                                                <th>City</th>
                                                <th>Country</th>
                                                <th>ISP</th>
                                                <th>User Agent</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($latest_visitors as $visitor)
                                                <tr class="text-muted">
                                                    <td>
                                                        {{ formatDate($visitor->created_at, 'd M Y H:i') }}
                                                    </td>
                                                    <td>
                                                        <span {{ add_title_tooltip($visitor->ip_address ?? '-', 15) }}>
                                                            {{ mb_strimwidth($visitor->ip_address ?? '-', 0, 15, '...') }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $visitor->city }}</td>
                                                    <td>
                                                        <span {{ add_title_tooltip($visitor->country ?? '-', 15) }}>
                                                            {{ mb_strimwidth($visitor->country ?? '-', 0, 15, '...') }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span {{ add_title_tooltip($visitor->isp ?? '-', 24) }}>
                                                            {{ mb_strimwidth($visitor->isp ?? '-', 0, 24, '...') }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span {{ add_title_tooltip($visitor->user_agent ?? '-', 24) }}>
                                                            {{ mb_strimwidth($visitor->user_agent ?? '-', 0, 24, '...') }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @if ($latest_visitors->count() == 0)
                                                <tr class="text-center">
                                                    <td colspan="3">
                                                        <div class="empty bg-transparent" style="height: 292px">
                                                            <div class="empty-img"><img
                                                                    src="{{ asset('img\error\undraw_quitting_time_dm8t.svg') }}"
                                                                    height="128">
                                                            </div>
                                                            <p class="empty-title">No visitors</p>
                                                            <p class="empty-subtitle text-muted">
                                                                There are no visitors who have entered your website
                                                            </p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('library-js')
@endsection

@section('custom-js')
    <script>
    </script>
@endsection