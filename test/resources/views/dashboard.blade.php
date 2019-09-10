@extends('layouts.layout')

@section('title','Dashboard')

@section('extendedcss')
    
@endsection

@section('page', 'Dashboard')

@section('breadcrumps')
<div class="col-md-7 align-self-center">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menus</li>
        <li class="breadcrumb-item">Dashboard</li>
        <li class="breadcrumb-item active">View</li>
    </ol>
</div>
@endsection

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                    <h1>users</h1>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
    
@endsection


@section('extendedjs')
    
@endsection