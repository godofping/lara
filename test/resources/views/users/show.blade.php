@extends('layouts.layout')

@section('title','View User')

@section('extendedcss')
    
@endsection

@section('page', 'View')

@section('breadcrumps')
<div class="col-md-7 align-self-center">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menus</li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Manage</li>
        <li class="breadcrumb-item active">View</li>
    </ol>
</div>
@endsection

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
           
                </div>
                <div class="card-body">
                  
                
    
                        <div class="form-body">
                            <h3 class="card-title">User Info</h3>
                            <hr>
                            <div class="row p-t-20">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $user->name }}" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Username</label>
                                        <input type="text" name="username" class="form-control" value="{{ $user->username }}" disabled>
                                    </div>
                                </div>

                            </div>

                            <div class="row p-t-20">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <input type="text" name="address" class="form-control" value="{{ $user->address }}" disabled>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="text" name="password" class="form-control" value="{{ $user->password }}" disabled>
                                    </div>
                                </div>

                            </div>
                   
                        
                        </div>
            
            
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