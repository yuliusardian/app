@extends('layouts.app')

@section('content')
    <div class="ms_weekly_wrapper">
        <div class="ms_weekly_inner">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ms_heading">
                        <h1>Hasil pencarian ' {{ $keyword }} ' adalah @if(!empty($result)) {{ count($result) }} @else {{ 0 }} @endif</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection