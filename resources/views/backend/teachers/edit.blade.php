@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.teachers.management') . ' | ' . trans('labels.backend.teachers.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.teachers.management') }}
        <small>{{ trans('labels.backend.teachers.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($teacher, ['route' => ['admin.teachers.update', $teacher], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-teacher']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.teachers.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.teachers.partials.teachers-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.teachers.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.teachers.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
