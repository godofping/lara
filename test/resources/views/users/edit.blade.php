@extends('layouts.layout')

@section('title','Update Users')

@section('extendedcss')
    
@endsection

@section('page', 'Update')

@section('breadcrumps')
<div class="col-md-7 align-self-center">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menus</li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Manage</li>
        <li class="breadcrumb-item active">Update</li>
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
                    <form action="/users/{{ $user->id }}" method="POST">
                        @method('PATCH')
                        @csrf

                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li> 
                                @endforeach
                            </ul>
                        @endif
                        
                        <div class="form-body">
                            <h3 class="card-title">User Info</h3>
                            <hr>
                            <div class="row p-t-20">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Username</label>
                                        <input type="text" name="username" class="form-control" value="{{ $user->username }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row p-t-20">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <input type="text" name="address" class="form-control" value="{{ $user->address }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="text" name="password" class="form-control" value="{{ $user->password }}">
                                    </div>
                                </div>

                            </div>
                   
                        
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Save</button>
                            <a href="/users"><button type="button" class="btn btn-inverse">Cancel</button></a>
                        </div>
                    </form>
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