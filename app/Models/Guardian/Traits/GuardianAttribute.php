<?php

namespace App\Models\Guardian\Traits;

/**
 * Class GuardianAttribute.
 */
trait GuardianAttribute
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
                '.$this->getEditButtonAttribute("edit-guardian", "admin.guardians.edit").'
                '.$this->getViewButtonAttribute("view-guardian", "admin.guardians.show").'
                '.$this->getDeleteButtonAttribute("delete-guardian", "admin.guardians.destroy").'
                </div>';
    }
}
