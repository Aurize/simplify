{!! Form::model($admin, array('id' => 'admins-form', 'method' => 'PUT', 'route' => array('admin.admins.update', $admin->id))) !!}
<div class="box-body">
    @include('admin.admins.forms.default')
</div>
<div class="box-footer">
    <a href="{{ route('admin.admins.index') }}" class="btn btn-default">
        <i class="fa fa-reply"></i>
        @lang('admin/global.back')
    </a>
    <button type="submit" class="btn btn-success pull-right">
        <i class="fa fa-edit"></i>
        @lang('admin/global.save')
    </button>
</div>
{!! Form::close() !!}
