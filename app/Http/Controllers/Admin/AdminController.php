<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $user = auth()->user();

        if (! $user->admin) {
            //throw new HttpException(403);
        }
        */

        return view('admin.index')
            ->withUser($user);
    }
}
