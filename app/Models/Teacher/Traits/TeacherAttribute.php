<?php

namespace App\Models\Teacher\Traits;

/**
 * Class TeacherAttribute.
 */
trait TeacherAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                '.$this->getEditButtonAttribute("edit-teacher", "admin.teachers.edit").'
                '.$this->getViewButtonAttribute("view-teacher", "admin.teachers.show").'
                '.$this->getDeleteButtonAttribute("delete-teacher", "admin.teachers.destroy").'
                </div>';
    }
}
