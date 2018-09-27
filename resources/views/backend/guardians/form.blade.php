<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{-- {{ Form::label('name', trans('labels.backend.blogs.title'), ['class' => 'col-lg-2 control-label required']) }} --}}

        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <div class="form-group">
                {{ Form::label('name', trans('validation.attributes.backend.guardians.name'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.guardians.name'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('gender', trans('validation.attributes.backend.guardians.gender'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{Form::select('gender', ['male' => 'Male', 'female' => 'Female','others'=>'Others'], null, ['class' => 'form-control box-size','placeholder' => 'Gender...'])}}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('occupation', trans('validation.attributes.backend.guardians.occupation'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('occupation', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.guardians.occupation'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('phone', trans('validation.attributes.backend.guardians.phone'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('phone', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.guardians.phone'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('address', trans('validation.attributes.backend.guardians.address'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('address', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.guardians.address'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('email', trans('validation.attributes.backend.guardians.email'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::email('email', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.guardians.email'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('password', trans('validation.attributes.backend.guardians.password'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::password('password', ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.guardians.password'), 'required' => 'required']) }}
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
