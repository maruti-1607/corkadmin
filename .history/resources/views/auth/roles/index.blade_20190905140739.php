@extends('layouts.admin')

@section('title', trans_choice('general.roles', 2))

@permission('create-auth-roles')
@section('new_button')
<span class="new-button"><a href="{{ url('auth/roles/create') }}" class="btn btn-success btn-sm btn-raised btn-flat"><span class="fa fa-plus"></span> &nbsp;{{ trans('general.add_new') }}</a></span>
@endsection
@endpermission

@section('head')
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('body-end')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
@endsection

@section('content')
<!-- Default box -->
<div class="box box-success">

    <div class="box-body">
        <div class="table table-responsive">
            <table class="table table-striped table-hover" id="tbl-roles">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-4">{{ trans('general.name') }}</th>
                        <th class="col-md-3">{{ trans('general.code') }}</th>
                        <th class="col-md-4 hidden-xs">{{ trans('general.description') }}</th>
                        <th class="col-md-1 text-center">{{ trans('general.actions') }}</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.box -->
@endsection


@push('scripts')
<script type="text/javascript">
    var table = $('#tbl-roles').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('roles.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'display_name', name: 'code'},
            {data: 'description', name: 'description'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
</script>
@endpush
