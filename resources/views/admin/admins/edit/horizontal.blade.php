@extends('admin.layout.layout')

@section('title')
    {{ ucfirst(trans('admin/admins/default.admins')) }}
@stop

@section('page-header')
    <h1>
        {{ ucfirst(trans('admin/admins/default.admins')) }}
        <small> {{ $admin->name }}</small>
    </h1>
@stop

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ ucfirst(trans('admin/global.catalogue')) }}</a></li>
        <li><a href="{{ route('admin.admins.index') }}">{{ ucfirst(trans('admin/admins/default.admins')) }}</a></li>
        <li class="active">{{ $admin->name }}</li>
    </ol>
@stop

@section('content')
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                @include('admin.admins.edit.tabs.horizontal.tab-nav')
            </ul>
            <div class="tab-content">
                 @include('admin.admins.edit.tabs.horizontal.tab-content')
            </div>
        </div>
@stop

@section('footer')
    <script type="text/javascript">
        $( document ).ready(function() {
            var locale = '{{ App::getLocale() }}';

            @stack('datatables')
        });
    </script>
@stop