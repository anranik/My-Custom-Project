<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Requests\Backend\Student\ShowStudentRequest;
use App\Models\Student\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Student\StudentRepository;
use App\Http\Requests\Backend\Student\ManageStudentRequest;
use App\Http\Requests\Backend\Student\CreateStudentRequest;
use App\Http\Requests\Backend\Student\StoreStudentRequest;
use App\Http\Requests\Backend\Student\EditStudentRequest;
use App\Http\Requests\Backend\Student\UpdateStudentRequest;
use App\Http\Requests\Backend\Student\DeleteStudentRequest;
use App\Models\Guardian\Guardian;
use App\Http\Responses\Backend\Student\ShowResponse;




/**
 * StudentsController
 */
class StudentsController extends Controller
{
    /**
     * contructor to initialize repository object
     * @param StudentRepository $repository;
     */

    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * variable to store the repository object
     * @var StudentRepository
     */
    protected $repository;



    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Student\ManageStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageStudentRequest $request)
    {
        return view('backend.students.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateStudentRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateStudentRequest $request)
    {
        $guardiansData = Guardian::getSelectData();

        $guardians =array();
        foreach($guardiansData as $key => $value){
            $guardians[$key] = $value.' (id:'.$key.' )';
        }
        //dd($guardians);
        return view('backend.students.create',compact('guardians'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreStudentRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.students.index')->withFlashSuccess(trans('alerts.backend.students.created'));
    }
    /**
     * @param \App\Models\Student\                         $guardian
     * @param \App\Http\Requests\Backend\Student\ShowStudentRequest $request
     *
     * @return \App\Http\Responses\Backend\Teacher\ShowResponse
     */
    public function show(Student $student, ShowStudentRequest $request)
    {
        return new ShowResponse($student);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Student\Student  $student
     * @param  EditStudentRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, EditStudentRequest $request)
    {
        $guardiansData = Guardian::getSelectData();

        $guardians =array();
        foreach($guardiansData as $key => $value){
            $guardians[$key] = $value.' (id:'.$key.' )';
        }
        return view('backend.students.edit', compact('student','guardians'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateStudentRequestNamespace  $request
     * @param  App\Models\Student\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $student, $input );
        //return with successfull message
        return redirect()->route('admin.students.index')->withFlashSuccess(trans('alerts.backend.students.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteStudentRequestNamespace  $request
     * @param  App\Models\Student\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, DeleteStudentRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($student);
        //returning with successfull message
        return redirect()->route('admin.students.index')->withFlashSuccess(trans('alerts.backend.students.deleted'));
    }
    
}
