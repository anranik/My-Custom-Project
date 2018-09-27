<?php

namespace App\Http\Responses\Backend\Teacher;

use Illuminate\Contracts\Support\Responsable;

class ShowResponse implements Responsable
{
    /**
     * @var \App\Models\Access\User\User
     */
    protected $teacher;

    /**
     * @param \App\Models\Access\User\User $user
     */
    public function __construct($teacher)
    {
        $this->teacher = $teacher;
    }

    /**
     * In Response.
     *
     * @param \App\Http\Requests\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function toResponse($request)
    {
        return view('backend.teachers.show')->withTeacher($this->teacher);
    }
}
