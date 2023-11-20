<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public readonly User $user;

    public function __construct(){
        $this->user = new User();
    }

    public function index()
    {
        $users = $this->user->all();
        
        return view('users', ['users' => $users]);
    }

    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }
    
    public function destroy(string $id)
    {
        //
    }
}
