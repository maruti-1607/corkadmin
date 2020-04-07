@extends('layouts.admin')

@section('title', 'Edit Role')

@section('content')
{!! Form::model($role, [
    'id' => 'role',
    'method' => 'PATCH',
    'route' => ['roles.update', $role->id],
    '@submit.prevent' => 'onSubmit',
    '@keydown' => 'form.errors.clear($event.target.name)',
    'files' => true,
    'role' => 'form',
    'class' => 'needs-validation',
    'novalidate' => true,
    'style' => 'width:100%;'
]) !!}
<div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
    <div class="statbox widget box box-shadow">

        <div class="widget-content widget-content-area">

                <div class="form-row">
                    <div class="col-md-6 mb-4">
                        <label for="display_name">Name</label>
                        <input type="text" name="display_name" class="form-control" id="display_name" placeholder="Enter Name" value="{{ $role->display_name }}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please choose a name.
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label for="name">Code</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Code" value="{{ $role->name }}" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please enter a code.
                        </div>
                    </div>

                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-4">
                        <div class="form-group mb-4">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3">{{ $role->description }}</textarea>
                        </div>
                    </div>
                </div>



        </div>
    </div>
</div>
<div id="role-permissions" class="col-lg-12 layout-spacing col-md-12">
    <div class="row">
        <div class="col-lg-12 col-12 layout-spacing">
            <label for="permissions" class="form-control-label d-block">Permissions</label>
            <span class="btn btn-outline-dark btn-sm" @click="permissionSelectAll">Select All</span>
            <span class="btn btn-outline-dark btn-sm" @click="permissionUnselectAll">Unselect All</span>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-12 layout-spacing">
            <div class="statbox widget box box-shadow">

                <div class="widget-content widget-content-area border-top-tab">
                    <ul class="nav nav-tabs mb-3 mt-3" id="borderTop" role="tablist">
                        @foreach($actions as $action)
                        @php $active_action_tab = ($action == 'read') ? 'active' : ''; @endphp

                        <li class="nav-item">
                            <a class="nav-link {{ $active_action_tab }}"
                                id="tabs-icons-text-1-tab"
                                data-toggle="tab"
                                href="#tab-{{ $action }}"
                                role="tab"
                                aria-controls="tabs-icons-text-1"
                                aria-selected="true">
                                {{ ucwords($action) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="borderTopContent">
                        @foreach($permissions as $action => $action_permissions)
                            @php $active_action_tab = ($action == 'read') ? 'active' : ''; @endphp
                            <div class="tab-pane fade show {{ $active_action_tab }}" id="tab-{{ $action }}"  role="tabpanel">
                                <span class="btn btn-dark btn-sm" @click="select('{{ $action }}')">Select All</span>
                                <span class="btn btn-dark btn-sm" @click="unselect('{{ $action }}')">Unselect All</span>

                                @stack('permissions_input_start')

                                <div class="form-group {{ $errors->has('permissions') ? 'has-error' : '' }}">
                                    <div class="row pt-4">
                                        @foreach($action_permissions as $item)

                                            <div class="col-md-4 role-list">
                                                <div class="n-chk">
                                                    <label class="new-control new-checkbox new-checkbox-text checkbox-primary" for="permissions-{{ $item->id }}">
                                                        {{ Form::checkbox('permissions', $item->id, null, ['id' => 'permissions-' . $item->id, 'class' => 'new-control-input', 'v-model' => 'form.permissions']) }}
                                                        <span class="new-control-indicator"></span><span class="new-chk-content">{{ $item->display_name }}</span>

                                                    </label>
                                                </div>
                                            </div>
                                            @if (($item->name == 'read-admin-panel') || ($item->name == 'read-client-portal'))
                                                {{ Form::hidden($item->name, $item->id, ['id' => $item->name]) }}
                                            @endif
                                        @endforeach
                                        {!! $errors->first('permissions', '<p class="help-block">:message</p>') !!}
                                    </div>
                                </div>

                                @stack('permissions_input_end')
                            </div>
                        @endforeach
                    </div>

                    @permission('update-auth-roles')
                    <button class="btn btn-dark mt-3" type="submit">Save</button>
                    @endpermission
                </div>

            </div>
        </div>
    </div>
</div>


{!! Form::close() !!}

@endsection


@push('scripts')
<script type="text/javascript">
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
</script>
