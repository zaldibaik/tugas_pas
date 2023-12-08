@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <canvas class="my-4 w-100 chartjs-render-monitor" id="myChart" width="1610" height="678"
                            style="display: block; width: 805px; height: 339px;"></canvas>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footer.guest.footer')
    </div>
@endsection
