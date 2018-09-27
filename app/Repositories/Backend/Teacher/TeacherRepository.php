<?php

namespace App\Repositories\Backend\Teacher;

use DB;
use Carbon\Carbon;
use App\Models\Teacher\Teacher;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TeacherRepository.
 */
class TeacherRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Teacher::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.teachers.table').'.id',
                config('module.teachers.table').'.created_at',
                config('module.teachers.table').'.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        $teacher = self::MODEL;
        $teacher = new $teacher();
        if ($teacher->create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.teachers.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Teacher $teacher
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Teacher $teacher, array $input)
    {
    	if ($teacher->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.teachers.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Teacher $teacher
     * @throws GeneralException
     * @return bool
     */
    public function delete(Teacher $teacher)
    {
        if ($teacher->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.teachers.delete_error'));
    }
}
