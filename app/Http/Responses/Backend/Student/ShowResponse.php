<?php

namespace App\Http\Responses\Backend\Student;

use Illuminate\Contracts\Support\Responsable;

class ShowResponse implements Responsable
{
    /**
     * @var \App\Models\Access\User\User
     */
    protected $student;

    /**
     * @param \App\Models\Access\User\User $user
     */
    public function __construct($student)
    {
        $this->student = $student;
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
        return view('backend.students.show')->withStudent($this->student);
    }
}
