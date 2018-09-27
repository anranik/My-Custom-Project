<?php

namespace App\Repositories\Backend\Guardian;

use DB;
use Carbon\Carbon;
use App\Models\Guardian\Guardian;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class GuardianRepository.
 */
class GuardianRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Guardian::class;

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
                config('module.guardians.table').'.id',
                config('module.guardians.table').'.name',
                config('module.guardians.table').'.created_at',
                config('module.guardians.table').'.updated_at',
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
        $guardian = self::MODEL;
        $guardian = new $guardian();
        if ($guardian->create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.guardians.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Guardian $guardian
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Guardian $guardian, array $input)
    {
    	if ($guardian->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.guardians.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Guardian $guardian
     * @throws GeneralException
     * @return bool
     */
    public function delete(Guardian $guardian)
    {
        if ($guardian->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.guardians.delete_error'));
    }
}
