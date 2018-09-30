@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.stuffs.management') . ' | ' . trans('labels.backend.stuffs.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.stuffs.management') }}
        <small>{{ trans('labels.backend.stuffs.create') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::open(['route' => 'admin.stuffs.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-stuff']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.stuffs.create') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.stuffs.partials.stuffs-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.stuffs.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.stuffs.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.create'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!-- form-group -->
            </div><!--box-body-->
        </div><!--box box-success-->
    {{ Form::close() }}
@endsection
