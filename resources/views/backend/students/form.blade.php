<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <div class="col-lg-10">
            <div class="form-group">
                {{ Form::label('name', trans('validation.attributes.backend.students.name'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.name')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('gender', trans('validation.attributes.backend.students.gender'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{Form::select('gender', ['male' => 'Male', 'female' => 'Female','others'=>'Others'], null, ['class' => 'form-control box-size','placeholder' => 'Gender...'])}}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('guardians', 'Guardian', ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    @if(!empty($guardians))
                        {{ Form::select('guardian_id', $guardians, null, ['class' => 'form-control tags box-size select2', 'required' => 'required','placeholder' => 'Guardian...']) }}
                    @else
                        {{ Form::select('guardian_id', $guardians, null, ['class' => 'form-control tags box-size', 'required' => 'required']) }}
                    @endif
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('class', trans('validation.attributes.backend.students.class'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('class', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.class'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('section', trans('validation.attributes.backend.students.section'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('section', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.class'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('roll', trans('validation.attributes.backend.students.roll'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('roll', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.roll'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('birthday', trans('validation.attributes.backend.students.birthday'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::date('birthday', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.birthday'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('previous_school', trans('validation.attributes.backend.students.previous_school'), ['class' => 'col-lg-2 control-label']) }}

                <div class="col-lg-10">
                    {{ Form::text('previous_school', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.previous_school')]) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('present_address', trans('validation.attributes.backend.students.present_address'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('present_address', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.present_address'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->

            <div class="form-group">
                {{ Form::label('permanent_address', trans('validation.attributes.backend.students.permanent_address'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('permanent_address', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.permanent_address'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            <div class="form-group">
                {{ Form::label('phone', trans('validation.attributes.backend.students.phone'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('phone', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.phone'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->






            <div class="form-group">
                {{ Form::label('email', trans('validation.attributes.backend.students.email'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('email', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.email'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->



            <div class="form-group">
                {{ Form::label('password', trans('validation.attributes.backend.students.password'), ['class' => 'col-lg-2 control-label required']) }}

                <div class="col-lg-10">
                    {{ Form::text('password', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.students.password'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form control-->


            {{--student image--}}
            <div class="form-group">
                {{ Form::label('student_image', trans('validation.attributes.backend.students.image'), ['class' => 'col-lg-2 control-label required']) }}
                @if(!empty($student->featured_image))
                    <div class="col-lg-1">
                        <img src="{{ Storage::disk('public')->url('img/student/' . $student->featured_image) }}" height="80" width="80">
                    </div>
                    <div class="col-lg-5">
                        <div class="custom-file-input">
                            <input type="file" name="featured_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                            <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                        </div>
                    </div>
                @else
                    <div class="col-lg-5">
                        <div class="custom-file-input">
                            <input type="file" name="student_image" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                            <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                        </div>
                    </div>
                @endif
            </div><!--form control-->
            <!-- Create Your Input Field Here -->
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
