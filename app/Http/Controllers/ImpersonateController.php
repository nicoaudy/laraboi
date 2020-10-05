<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\DataTables\ImpersonateDataTable;

class ImpersonateController extends Controller
{
    public function index(ImpersonateDataTable $datatable)
    {
        return $datatable->render('impersonate.index');
    }

    public function impersonate($id)
    {
        $user = User::find($id);
        if ($user->role <> 'Super User') {
            auth()->user()->setImpersonating($user->id);
        } else {
            noty()->danger('Whops!', 'Impersonate disabled for this role');
        }
        return redirect()->route('home');
    }

    public function stopImpersonating()
    {
        auth()->user()->stopImpersonating();

        noty()->flash('Hey!', 'Welcome Back');
        return redirect()->route('home');
    }
}
