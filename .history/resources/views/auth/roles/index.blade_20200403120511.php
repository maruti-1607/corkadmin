@extends('layouts.admin')

@section('title', trans_choice('general.roles', 2))

@permission('create-auth-roles')
@section('new_button')
<span class="new-button"><a href="{{ url('auth/roles/create') }}" class="btn btn-success btn-sm btn-raised btn-flat"><span class="fa fa-plus"></span> &nbsp;{{ trans('general.add_new') }}</a></span>
@endsection
@endpermission

@section('head')
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/custom_dt_miscellaneous.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/table/datatable/dt-global_style.css') }}">
@endsection

@section('body-end')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('plugins/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('plugins/table/datatable/custom_miscellaneous.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
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
