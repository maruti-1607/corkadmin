@extends('layouts.admin')

@section('title', 'Users')

@permission('create-auth-users')
    @section('new_button')
        <a href="{{ route('users.create') }}" class="btn btn-success btn-sm header-button-top"><span class="fa fa-plus"></span> &nbsp;{{ trans('general.add_new') }}</a>
    @endsection
@endpermission

@section('content')

<div class="col-lg-12">
    <div class="statbox widget box box-shadow">
        <div class="widget-content widget-content-area">
            <div class="table-responsive mb-4">
                <table id="style-2" class="table style-2  table-hover">
                    <thead>
                        <tr>
                            <th class="checkbox-column"> Record Id </th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>Description</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts_start')
    <script src="{{ asset('public/js/auth/users.js?v=' . version('short')) }}"></script>
@endpush
