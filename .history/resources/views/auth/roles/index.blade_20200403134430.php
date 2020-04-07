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
<div class="row layout-top-spacing layout-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Style 1</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive mb-4">
                    <table id="style-2" class="table style-2  table-hover">
                        <thead>
                            <tr>
                                <th class="checkbox-column"> Record Id </th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile No.</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="checkbox-column"> 1 </td>
                                <td>Jane</td>
                                <td>Lamb</td>
                                <td>johndoe@yahoo.com</td>
                                <td>555-555-5555</td>
                                <td class="text-center">
                                    <span><img src="assets/img/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 2 </td>
                               <td>Linda</td>
                                <td>Nelson</td>
                                <td>linda@gmail.com</td>
                                <td>555-555-6666</td>
                                <td class="text-center">
                                    <span><img src="assets/img/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 3 </td>
                                <td>Kelly</td>
                                <td>Young</td>
                                <td>kelly@live.com</td>
                                <td>777-555-5555</td>
                                <td class="text-center">
                                    <span><img src="assets/img/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 4 </td>
                                <td>Vincent</td>
                                <td>Carpenter</td>
                                <td>vinnyc@outlook.com</td>
                                <td>555-666-5555</td>
                                <td class="text-center">
                                    <span><img src="assets/img/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 5 </td>
                                <td>Lila</td>
                                <td>Perry</td>
                                <td>lila@adobe.com</td>
                                <td>444-444-4444</td>
                                <td class="text-center">
                                    <span><img src="assets/img/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 6 </td>
                                <td>Traci</td>
                                <td>Lopez</td>
                                <td>traci@gmail.com</td>
                                <td>111-111-1111</td>
                                <td class="text-center">
                                    <span><img src="assets/img/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                            <tr>
                                <td class="checkbox-column"> 7 </td>
                                <td>Nia</td>
                                <td>Hillyer</td>
                                <td>niaHill@yahoo.com</td>
                                <td>111-666-1111</td>
                                <td class="text-center">
                                    <span><img src="assets/img/90x90.jpg" class="rounded-circle profile-img" alt="avatar"></span>
                                </td>
                                <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                <td class="text-center"><a href="javascript:void(0);" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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
