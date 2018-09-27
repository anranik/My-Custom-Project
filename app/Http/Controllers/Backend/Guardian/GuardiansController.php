<?php

namespace App\Http\Controllers\Backend\Guardian;

use App\Models\Guardian\Guardian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Guardian\GuardianRepository;
use App\Http\Requests\Backend\Guardian\ManageGuardianRequest;
use App\Http\Requests\Backend\Guardian\CreateGuardianRequest;
use App\Http\Requests\Backend\Guardian\StoreGuardianRequest;
use App\Http\Requests\Backend\Guardian\EditGuardianRequest;
use App\Http\Requests\Backend\Guardian\UpdateGuardianRequest;
use App\Http\Requests\Backend\Guardian\DeleteGuardianRequest;
use App\Http\Requests\Backend\Guardian\ShowGuardianRequest;
use App\Http\Responses\Backend\Guardian\ShowResponse;

/**
 * GuardiansController
 */
class GuardiansController extends Controller
{
    /**
     * variable to store the repository object
     * @var GuardianRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param GuardianRepository $repository;
     */
    public function __construct(GuardianRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Guardian\ManageGuardianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageGuardianRequest $request)
    {
        return view('backend.guardians.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateGuardianRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateGuardianRequest $request)
    {
        return view('backend.guardians.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreGuardianRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuardianRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.guardians.index')->withFlashSuccess(trans('alerts.backend.guardians.created'));
    }


    /**
     * @param \App\Models\Guardian                         $guardian
     * @param \App\Http\Requests\Backend\Guardian\ShowGuardianRequest $request
     *
     * @return \App\Http\Responses\Backend\Guardian\ShowResponse
     */
    public function show(Guardian $guardian, ShowGuardianRequest $request)
    {
        return new ShowResponse($guardian);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Guardian\Guardian  $guardian
     * @param  EditGuardianRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */

    public function edit(Guardian $guardian, EditGuardianRequest $request)
    {
        return view('backend.guardians.edit', compact('guardian'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateGuardianRequestNamespace  $request
     * @param  App\Models\Guardian\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuardianRequest $request, Guardian $guardian)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $guardian, $input );
        //return with successfull message
        return redirect()->route('admin.guardians.index')->withFlashSuccess(trans('alerts.backend.guardians.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteGuardianRequestNamespace  $request
     * @param  App\Models\Guardian\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardian $guardian, DeleteGuardianRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($guardian);
        //returning with successfull message
        return redirect()->route('admin.guardians.index')->withFlashSuccess(trans('alerts.backend.guardians.deleted'));
    }
    
}
