<?php

namespace App\Http\Controllers\Backend\Teacher;

use App\Models\Teacher\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Teacher\TeacherRepository;
use App\Http\Requests\Backend\Teacher\ManageTeacherRequest;
use App\Http\Requests\Backend\Teacher\CreateTeacherRequest;
use App\Http\Requests\Backend\Teacher\StoreTeacherRequest;
use App\Http\Requests\Backend\Teacher\EditTeacherRequest;
use App\Http\Requests\Backend\Teacher\UpdateTeacherRequest;
use App\Http\Requests\Backend\Teacher\DeleteTeacherRequest;
use App\Http\Requests\Backend\Teacher\ShowTeacherRequest;
use App\Http\Responses\Backend\Teacher\ShowResponse;

/**
 * TeachersController
 */
class TeachersController extends Controller
{
    /**
     * variable to store the repository object
     * @var TeacherRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param TeacherRepository $repository;
     */
    public function __construct(TeacherRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Teacher\ManageTeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageTeacherRequest $request)
    {
        return view('backend.teachers.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateTeacherRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateTeacherRequest $request)
    {
        return view('backend.teachers.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreTeacherRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeacherRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.teachers.index')->withFlashSuccess(trans('alerts.backend.teachers.created'));
    }
    /**
     * @param \App\Models\Teacher\                         $guardian
     * @param \App\Http\Requests\Backend\Teacher\ShowTeacherRequest $request
     *
     * @return \App\Http\Responses\Backend\Teacher\ShowResponse
     */
    public function show(Teacher $teacher, ShowTeacherRequest $request)
    {
        return new ShowResponse($teacher);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Teacher\Teacher  $teacher
     * @param  EditTeacherRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher, EditTeacherRequest $request)
    {
        return view('backend.teachers.edit', compact('teacher'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateTeacherRequestNamespace  $request
     * @param  App\Models\Teacher\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $teacher, $input );
        //return with successfull message
        return redirect()->route('admin.teachers.index')->withFlashSuccess(trans('alerts.backend.teachers.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteTeacherRequestNamespace  $request
     * @param  App\Models\Teacher\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher, DeleteTeacherRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($teacher);
        //returning with successfull message
        return redirect()->route('admin.teachers.index')->withFlashSuccess(trans('alerts.backend.teachers.deleted'));
    }
    
}
