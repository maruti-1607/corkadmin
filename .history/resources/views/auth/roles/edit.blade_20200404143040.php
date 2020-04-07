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
                    <div class="col-md-4 mb-4">
                        <label for="validationCustom01">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Shaun" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="validationCustom02">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Park" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <label for="validationCustomUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <label for="validationCustom03">City</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="validationCustom04">State</label>
                        <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <label for="validationCustom05">Zip</label>
                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <div class="form-check pl-0">
                        <div class="custom-control custom-checkbox checkbox-success">
                            <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                            <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit">Submit form</button>
            </form>

            <div class="code-section-container">

                <button class="btn toggle-code-snippet"><span>HTML</span></button>
                <div class="code-section text-left">
                    <pre>
===============
HTML
===============

&lt;form class="needs-validation" novalidate action="javascript:void(0);"&gt;
&lt;div class="form-row"&gt;
&lt;div class="col-md-4 mb-4"&gt;
&lt;label for="validationCustom01"&gt;First name&lt;/label&gt;
&lt;input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Shaun" required&gt;
&lt;div class="valid-feedback"&gt;
Looks good!
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-md-4 mb-4"&gt;
&lt;label for="validationCustom02"&gt;Last name&lt;/label&gt;
&lt;input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Park" required&gt;
&lt;div class="valid-feedback"&gt;
Looks good!
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-md-4 mb-4"&gt;
&lt;label for="validationCustomUsername"&gt;Username&lt;/label&gt;
&lt;div class="input-group"&gt;
&lt;div class="input-group-prepend"&gt;
&lt;span class="input-group-text" id="inputGroupPrepend"&gt;@&lt;/span&gt;
&lt;/div&gt;
&lt;input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required&gt;
&lt;div class="invalid-feedback"&gt;
Please choose a username.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-row"&gt;
&lt;div class="col-md-6 mb-4"&gt;
&lt;label for="validationCustom03"&gt;City&lt;/label&gt;
&lt;input type="text" class="form-control" id="validationCustom03" placeholder="City" required&gt;
&lt;div class="invalid-feedback"&gt;
Please provide a valid city.
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-md-3 mb-4"&gt;
&lt;label for="validationCustom04"&gt;State&lt;/label&gt;
&lt;input type="text" class="form-control" id="validationCustom04" placeholder="State" required&gt;
&lt;div class="invalid-feedback"&gt;
Please provide a valid state.
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="col-md-3 mb-4"&gt;
&lt;label for="validationCustom05"&gt;Zip&lt;/label&gt;
&lt;input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required&gt;
&lt;div class="invalid-feedback"&gt;
Please provide a valid zip.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class="form-group mb-4"&gt;
&lt;div class="form-check pl-0"&gt;
&lt;div class="custom-control custom-checkbox checkbox-success"&gt;
&lt;input type="checkbox" class="custom-control-input" id="invalidCheck" required&gt;
&lt;label class="custom-control-label" for="invalidCheck"&gt;Agree to terms and conditions&lt;/label&gt;
&lt;div class="invalid-feedback"&gt;
You must agree before submitting.
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;button class="btn btn-primary mt-3" type="submit"&gt;Submit form&lt;/button&gt;
&lt;/form&gt;
</pre>
                </div>
            </div>

            <div class="code-section-container">

                <button class="btn toggle-code-snippet"><span>JS</span></button>
                <div class="code-section text-left">
                    <pre>
===============
Javascript
===============

window.addEventListener('load', function() {
// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.getElementsByClassName('needs-validation');
// Loop over them and prevent submission
var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
event.preventDefault();
event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
</pre>
                </div>
            </div>

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
