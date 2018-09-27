<?php

namespace App\Models\Guardian;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guardian\Traits\GuardianAttribute;
use App\Models\Guardian\Traits\GuardianRelationship;

class Guardian extends Model
{
    use ModelTrait,
        GuardianAttribute,
    	GuardianRelationship {
            // GuardianAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'guardians';

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = [
        'name',
        'gender',
        'occupation',
        'phone',
        'address',
        'email',
        'password'
    ];

    /**
     * Default values for model fields
     * @var array
     */
    protected $attributes = [

    ];

    /**
     * Dates
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Guarded fields of model
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Constructor of Model
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    /**
     * Generate drop-down select data with basic IDs.
     *
     * @param null $id
     * @param null $val
     *
     * @return array
     */
    public static function getSelectData($field_name = 'name')
    {
        $collection = parent::all();

        return self::getItems($collection, $field_name);
    }

    /**
     * Generate items for drop-down select data with basic IDs.
     *
     * @param $collection
     *
     * @return array
     */
    public static function getItems($collection, $field_name)
    {
        $items = [];

        foreach ($collection as $model) {
            $items[$model->id] = [
                'id'    => $model->id,
                'name'  => $model->$field_name,
                'model' => $model,
            ];
        }

        foreach ($items as $id => $item) {
            $items[$item['id']] = $item['name'];
        }

        return $items;
    }
}
