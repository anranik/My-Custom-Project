<?php

namespace App\Models\Teacher;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher\Traits\TeacherAttribute;
use App\Models\Teacher\Traits\TeacherRelationship;

class Teacher extends Model
{
    use ModelTrait,
        TeacherAttribute,
    	TeacherRelationship {
            // TeacherAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'teachers';

    /**
     * Mass Assignable fields of model
     * @var array
     */

    protected $fillable = [
        'name','qualification','designation','birthday','gender','phone','present_address','permanent_address','previous_school','email','password',
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
        'updated_at',
        'deleted_at'
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
}
