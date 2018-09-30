<?php

namespace App\Models\Stuff\Traits;

/**
 * Class StuffAttribute.
 */
trait StuffAttribute
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
                '.$this->getEditButtonAttribute("edit-stuff", "admin.stuffs.edit").'
                '.$this->getViewButtonAttribute("edit-stuff", "admin.stuffs.show").'
                '.$this->getDeleteButtonAttribute("delete-stuff", "admin.stuffs.destroy").'
                </div>';
    }
}
