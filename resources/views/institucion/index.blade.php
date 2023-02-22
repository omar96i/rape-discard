@extends('layouts._app')

@section('title') Instituciones educativas @endsection

@section('css')
@vite('resources/css/app.css')
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="row row-bordered g-0">
        <!-- Title -->
        <div class="col-md-12">
            <h5 class="card-header m-0 me-2 pb-3">Instituciones educativas</h5>
        </div>
        <div class="col-md-12">
            <div class="card-body" id="app">
                <index-institucion></index-institucion>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@vite('resources/js/app.js')
@endsection
