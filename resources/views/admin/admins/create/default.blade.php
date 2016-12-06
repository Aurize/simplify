@extends('admin.layout.layout')

@section('title')
    {{ ucfirst(trans('admin/admins/default.admins')) }}
@stop

@section('page-header')
    <h1>
        {{ ucfirst(trans('admin/admins/default.admins')) }}
        <small> {{ ucfirst(trans('admin/global.new')) }}</small>
    </h1>
@stop

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ ucfirst(trans('admin/global.catalogue')) }}</a></li>
        <li><a href="{{ route('admin.admins.index') }}">{{ ucfirst(trans('admin/admins/default.admins')) }}</a></li>
        <li class="active">{{ ucfirst(trans('admin/global.new')) }}</li>
    </ol>
@stop

@section('content')
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#info" data-toggle="tab">{{ ucfirst(trans('admin/global.catalogue')) }}</a></li>
            <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="info">
                {!! Form::model($admin = new \App\Admin,array('route' => array('admin.admins.store'))) !!}
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
            </div>
        </div>
    </div>
@stop

@section('footer')
    <script type="text/javascript">
        $( document ).ready(function() {

        });
    </script>
@stop