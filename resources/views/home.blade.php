@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">@if(Auth::user()) Welcome {{Auth::user()->name}}@endif</div>
                <div class="card-body">


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->role=='client')


                        View reports
                    @endif
                    @if(Auth::user()->role=='practitioner')
                        <a href="#">Start Appointment</a>
                    @endif
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
