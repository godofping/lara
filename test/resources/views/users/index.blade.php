@extends('layouts.layout')

@section('title','Users')

@section('extendedcss')
    
@endsection


@section('page', 'Manage')

@section('breadcrumps')
<div class="col-md-7 align-self-center">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Menus</li>
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Manage</li>
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
                <h4 class="card-title">Manage Users</h4>
                <h6 class="card-subtitle">View, add , edit, delete users.</h6>

                <a href="users/create"><button class="btn btn-success">Add</button></a>

                <div class="table-responsive m-t-40">
                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <form action="/users/{{ $user->id }}" method="POST"> @method('DELETE') @csrf
                                    <a href="/users/{{ $user->id }}/edit"><button type="button" class="btn btn-primary btn-circle"><i class="fa fa-pencil"></i></button></a>
                                    <button type="submit" class="btn btn-danger btn-circle"><i class="fa fa-close"></i></button>
                                    <a href="/users/{{ $user->id }}"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-eye"></i></button></a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
<!-- This is data table -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->

<script type="text/javascript">
	var title = "Users";
    var dataTable = $('#example23').DataTable({
        "order":[],
    
        "columnDefs":[
            {
                "targets":[5],
                "orderable":false,
            },
        ],
         buttons: [
       
        {
            extend: 'print',
            title: title,
            exportOptions: {
                columns: "thead th:not(.noExport)"
            }

        }

    ],
        dom: 'Bfrltip',
        language: { search: "",searchPlaceholder: "Search" },

        "info":     true,
        "bFilter":     true,
        responsive: true,
        autoWidth: false,
    });

</script>
    
@endsection