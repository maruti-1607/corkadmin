@extends('layouts.admin')

@section('title', 'Edit Role')

@section('content')

<div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
    <div class="statbox widget box box-shadow">
        {{-- <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Custom styles</h4>
                </div>
            </div>
        </div> --}}
        <div class="widget-content widget-content-area">
            <form class="needs-validation" novalidate action="javascript:void(0);">
                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <label for="validationCustom01">Name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Shaun" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="validationCustom02">Code</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Park" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>


                <button class="btn btn-primary mt-3" type="submit">Save</button>
            </form>

        </div>
    </div>
</div>
    <!-- Default box -->
    {{-- <div class="box box-success">
        {!! Form::model($role, [
            'method' => 'PATCH',
            'url' => ['auth/roles', $role->id],
            'role' => 'form'
        ]) !!}

        <div class="box-body">
            {{ Form::textGroup('display_name', trans('general.name'), 'id-card-o') }}

            {{ Form::textGroup('name', trans('general.code'), 'code') }}

            {{ Form::textareaGroup('description', trans('general.description')) }}

            {{ Form::checkboxGroup('permissions', trans_choice('general.permissions', 2), $permissions, 'display_name') }}
        </div>
        <!-- /.box-body -->

        @permission('update-auth-roles')
        <div class="box-footer">
            {{ Form::saveButtons('auth/roles') }}
        </div>
        <!-- /.box-footer -->
        @endpermission

        {!! Form::close() !!}
    </div> --}}
@endsection