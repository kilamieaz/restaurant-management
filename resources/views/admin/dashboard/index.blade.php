@extends('layouts.admin.master')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/chart.css') }}">
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Dashboard</h1>
</div>
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
            <div class="card-body">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-cart-outline font-size-20"></i>
                </div>
                <h2 class="m-1">{{$totalIncome}}</h2>
                <span class="badge badge-primary">Income</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
            <div class="card-body">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                    <i class="mdi mdi-food font-size-20"></i>
                </div>
                <h2 class="m-1">{{$totalMenu}}</h2>
                <span class="badge badge-success">Menu</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card card-mini  mb-4">
            <div class="card-body">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-danger text-white">
                    <i class="mdi mdi-human font-size-20"></i>
                </div>
                <h2 class="m-1">{{$totalEmployee}}</h2>
                <span class="badge badge-danger">Employee</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card card-mini mb-4">
            <div class="card-body">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                    <i class="mdi mdi-human-male-female font-size-20"></i>
                </div>
                <h2 class="m-1">{{$totalMember}}</h2>
                <span class="badge badge-warning">Member</span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="card card-mini">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">
                            <strong>Order: {{($periodOrder['0'])}} - {{$periodOrder['1']}}</strong>
                        </p>

                        <div class="chart">
                            {!! $chartOrder->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card card-mini">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">
                            <strong>Order: {{($periodOrder['0'])}} - {{$periodOrder['1']}}</strong>
                        </p>

                        <div class="chart">
                            {!! $chartMonthOrder->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script src="{{ asset('js/chart.js') }}" charset="utf-8"></script>
{!! $chartOrder->script() !!}
{!! $chartMonthOrder->script() !!}
@endpush
