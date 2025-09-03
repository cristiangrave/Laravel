<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
/* site key : 0x4AAAAAABxb4GK0g9meCpr0 
    private key : 0x4AAAAAABxb4GHxfkV-PFTrzuPibW4q7Ac
*/

    public function index()
    {
        return view('Login.login');
    }
}
