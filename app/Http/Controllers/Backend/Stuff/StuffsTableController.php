<?php

namespace App\Http\Controllers\Backend\Stuff;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Stuff\StuffRepository;
use App\Http\Requests\Backend\Stuff\ManageStuffRequest;

/**
 * Class StuffsTableController.
 */
class StuffsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var StuffRepository
     */
    protected $stuff;

    /**
     * contructor to initialize repository object
     * @param StuffRepository $stuff;
     */
    public function __construct(StuffRepository $stuff)
    {
        $this->stuff = $stuff;
    }

    /**
     * This method return the data of the model
     * @param ManageStuffRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageStuffRequest $request)
    {
        return Datatables::of($this->stuff->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($stuff) {
                return Carbon::parse($stuff->created_at)->toDateString();
            })
            ->addColumn('actions', function ($stuff) {
                return $stuff->action_buttons;
            })
            ->make(true);
    }
}
