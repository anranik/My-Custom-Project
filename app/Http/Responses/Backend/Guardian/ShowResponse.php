<?php

namespace App\Http\Responses\Backend\Guardian;

use Illuminate\Contracts\Support\Responsable;

class ShowResponse implements Responsable
{
    /**
     * @var \App\Models\Access\User\User
     */
    protected $guardian;

    /**
     * @param \App\Models\Access\User\User $user
     */
    public function __construct($guardian)
    {
        $this->guardian = $guardian;
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
        return view('backend.guardians.show')->withGuardian($this->guardian);
    }
}
