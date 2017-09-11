<?php

namespace App\Http\Controllers;

class CommonController extends Controller
{
    /**
     * Show the home page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showHome()
    {
        $this->setSeo('common.home');

        return view('common.home');
    }

    public function showTos()
    {

    }
}
