@extends('layouts.main')
@section('content')

<style>
    .card {
        /* max-width: 400px; */
        margin: 0 auto;
        animation: fadeInUp 1s ease-in-out forwards;
    }

    .card-header {
        background-color: #f8f9fa;
    }

    .progress-bar {
        transition: width 2s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 3;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes progressWidth {
        from {
            width: 0;
        }
    }
</style>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Welcome to <b>My Employee Dashboard</b></h6>
    </div>
    <div class="card-body">
        <h4 class="small font-weight-bold">Progress!<span
                class="float-right">20%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Routine!<span
                class="float-right">40%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Goal!<span
                class="float-right">60%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 60%"
                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Productivity!!<span
                class="float-right">80%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Overall!<span
                class="float-right">Complete!</span></h4>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>
@endsection