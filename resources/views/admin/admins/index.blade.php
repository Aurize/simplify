@extends('admin.layout.layout')

@section('title')
    {{ ucfirst(trans('admin/admins/default.admins')) }}
@stop

@section('page-header')
    <h1>
        {{ ucfirst(trans('admin/admins/default.admins')) }}
        <small> @lang('admin/global.catalogue')</small>
    </h1>
@stop

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ ucfirst(trans('admin/global.catalogue')) }}</a></li>
        <li><a href="{{ route('admin.admins.index') }}">{{ ucfirst(trans('admin/admins/default.admins')) }}</a></li>
        <li class="active">{{ ucfirst(trans('admin/global.everybody')) }}</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-th"></i> {{ ucfirst(trans('admin/admins/default.admins')) }}</h3>
            <div class="box-tools pull-right">
                <a href="{{ route('admin.admins.create') }}" class="btn btn-box-tool">
                    <i class="fa fa-plus"></i>
                </a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip">
                    <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip">
                    <i class="fa fa-times"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            @include('admin.admins.tables.default', ['admins' => $admins, 'buttons' => 'default', 'id' => "admins-table"])
        </div>
        <div class="box-footer">
            <div class="btn-group dropup">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Operacje grupowe <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Usuń zaznaczone</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Zaznacz wszystkie</a></li>
                    <li><a href="#">Odznacz wszystkie</a></li>
                </ul>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <script type="text/javascript">
        $( document ).ready(function() {
            var locale = '{{ App::getLocale() }}';

            @include('datatables.js.table', ['id' => 'admins-table', 'var' => 'admins_table'])
        });
    </script>
@stop