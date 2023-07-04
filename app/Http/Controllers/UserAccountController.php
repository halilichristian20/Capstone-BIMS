<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Resident;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    //GET All user accounts
    public function index(){
        return view('adminlinks.userAccounts', [
            'residents' => Resident::latest()->filter(request(["search"]))->paginate(10)->appends(request(["search"]))
        ]);
    }
}
