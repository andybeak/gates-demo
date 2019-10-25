<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;
use Auth;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @param int $userId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewProfile(Request $request, int $userId)
    {

        if (Gate::allows('view-profile', $userId )) {

            return view('profile');

        } else {

            abort(403);

        }

    }
}
