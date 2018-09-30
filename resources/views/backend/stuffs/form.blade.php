<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{-- {{ Form::label('name', trans('labels.backend.blogs.title'), ['class' => 'col-lg-2 control-label required']) }} --}}
        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <div class="form-group">
                {{ Form::label('name', trans('validation.attributes.backend.stuffs.name'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.stuffs.name'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('position', trans('validation.attributes.backend.stuffs.position'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{Form::text('position', null, ['class' => 'form-control box-size','placeholder' => 'position...'])}}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('qualification', trans('validation.attributes.backend.stuffs.qualification'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{Form::text('qualification', null, ['class' => 'form-control box-size','placeholder' => 'Qualification...'])}}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('birthday', trans('validation.attributes.backend.stuffs.birthday'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::date('birthday', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.stuffs.birthday'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('blood_group', trans('validation.attributes.backend.stuffs.blood_group'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('blood_group', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.stuffs.blood_group')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('gender', trans('validation.attributes.backend.stuffs.gender'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{Form::select('gender', ['male' => 'Male', 'female' => 'Female','others'=>'Others'], null, ['class' => 'form-control box-size','placeholder' => 'Gender...'])}}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('phone', trans('validation.attributes.backend.stuffs.phone'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('phone', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.stuffs.phone'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('job_started', trans('validation.attributes.backend.stuffs.job_started'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::date('job_started', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.stuffs.job_started')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('present_address', trans('validation.attributes.backend.stuffs.present_address'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('present_address', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.stuffs.present_address'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('permanent_address', trans('validation.attributes.backend.stuffs.permanent_address'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('permanent_address', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.stuffs.permanent_address'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('email', trans('validation.attributes.backend.stuffs.email'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::email('email', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.stuffs.email'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('password', trans('validation.attributes.backend.stuffs.password'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::password('password', ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.stuffs.password'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <!-- Look Below Example for reference -->
            {{-- {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.blogs.title'), 'required' => 'required']) }} --}}
        </div><!--col-lg-10-->
    </div><!--form-group-->
</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
