<?php

namespace App\Repositories\Backend\Stuff;

use DB;
use Carbon\Carbon;
use App\Models\Stuff\Stuff;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StuffRepository.
 */
class StuffRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Stuff::class;

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
                config('module.stuffs.table').'.id',
                config('module.stuffs.table').'.name',
                config('module.stuffs.table').'.position',
                config('module.stuffs.table').'.created_at',
                config('module.stuffs.table').'.updated_at',
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
        $stuff = self::MODEL;
        $stuff = new $stuff();
        if ($stuff->create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.stuffs.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Stuff $stuff
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Stuff $stuff, array $input)
    {
    	if ($stuff->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.stuffs.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Stuff $stuff
     * @throws GeneralException
     * @return bool
     */
    public function delete(Stuff $stuff)
    {
        if ($stuff->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.stuffs.delete_error'));
    }
}
