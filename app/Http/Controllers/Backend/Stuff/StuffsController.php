<?php

namespace App\Http\Controllers\Backend\Stuff;

use App\Models\Stuff\Stuff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Stuff\StuffRepository;
use App\Http\Requests\Backend\Stuff\ManageStuffRequest;
use App\Http\Requests\Backend\Stuff\CreateStuffRequest;
use App\Http\Requests\Backend\Stuff\StoreStuffRequest;
use App\Http\Requests\Backend\Stuff\EditStuffRequest;
use App\Http\Requests\Backend\Stuff\ShowStuffRequest;
use App\Http\Requests\Backend\Stuff\UpdateStuffRequest;
use App\Http\Requests\Backend\Stuff\DeleteStuffRequest;
use App\Http\Responses\Backend\Stuff\ShowResponse;

/**
 * StuffsController
 */
class StuffsController extends Controller
{
    /**
     * variable to store the repository object
     * @var StuffRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param StuffRepository $repository;
     */
    public function __construct(StuffRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Stuff\ManageStuffRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageStuffRequest $request)
    {
        return view('backend.stuffs.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateStuffRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateStuffRequest $request)
    {
        return view('backend.stuffs.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreStuffRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStuffRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.stuffs.index')->withFlashSuccess(trans('alerts.backend.stuffs.created'));
    }
    /**
     * Show single stuff
     * @param \App\Models\Stuff\                         $guardian
     * @param \App\Http\Requests\Backend\Stuff\ShowStuffRequest $request
     *
     * @return \App\Http\Responses\Backend\Stuff\ShowResponse
     */
    public function show(Stuff $stuff, ShowStuffRequest $request)
    {
        return new ShowResponse($stuff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Stuff\Stuff  $stuff
     * @param  EditStuffRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Stuff $stuff, EditStuffRequest $request)
    {
        return view('backend.stuffs.edit', compact('stuff'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateStuffRequestNamespace  $request
     * @param  App\Models\Stuff\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStuffRequest $request, Stuff $stuff)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $stuff, $input );
        //return with successfull message
        return redirect()->route('admin.stuffs.index')->withFlashSuccess(trans('alerts.backend.stuffs.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteStuffRequestNamespace  $request
     * @param  App\Models\Stuff\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stuff $stuff, DeleteStuffRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($stuff);
        //returning with successfull message
        return redirect()->route('admin.stuffs.index')->withFlashSuccess(trans('alerts.backend.stuffs.deleted'));
    }
    
}
