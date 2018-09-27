<?php

namespace App\Http\Controllers\Backend\Guardian;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Guardian\GuardianRepository;
use App\Http\Requests\Backend\Guardian\ManageGuardianRequest;

/**
 * Class GuardiansTableController.
 */
class GuardiansTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var GuardianRepository
     */
    protected $guardian;

    /**
     * contructor to initialize repository object
     * @param GuardianRepository $guardian;
     */
    public function __construct(GuardianRepository $guardian)
    {
        $this->guardian = $guardian;
    }

    /**
     * This method return the data of the model
     * @param ManageGuardianRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageGuardianRequest $request)
    {
        return Datatables::of($this->guardian->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('name', function ($guardian) {
                return $guardian->name;
            })
            ->addColumn('created_at', function ($guardian) {
                return Carbon::parse($guardian->created_at)->toDateString();
            })
            ->addColumn('actions', function ($guardian) {
                return $guardian->action_buttons;
            })
            ->make(true);
    }
}
