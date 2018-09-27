<?php

namespace App\Http\Controllers\Backend\Teacher;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Teacher\TeacherRepository;
use App\Http\Requests\Backend\Teacher\ManageTeacherRequest;

/**
 * Class TeachersTableController.
 */
class TeachersTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var TeacherRepository
     */
    protected $teacher;

    /**
     * contructor to initialize repository object
     * @param TeacherRepository $teacher;
     */
    public function __construct(TeacherRepository $teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * This method return the data of the model
     * @param ManageTeacherRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageTeacherRequest $request)
    {
        return Datatables::of($this->teacher->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($teacher) {
                return Carbon::parse($teacher->created_at)->toDateString();
            })
            ->addColumn('actions', function ($teacher) {
                return $teacher->action_buttons;
            })
            ->make(true);
    }
}
