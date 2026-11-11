<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'name' => 'Thomas Cedric Smith', 'username' => 'tsmith', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'name' => 'Rhea Fernandez', 'username' => 'rfernandez', 'role' => 'Manager', 'status' => 'Active'],
            ['id' => 3, 'name' => 'Miguel Torres', 'username' => 'mtorres', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 4, 'name' => 'Isabel Navarro', 'username' => 'inavarro', 'role' => 'Cashier', 'status' => 'Inactive'],
            ['id' => 5, 'name' => 'Daniel Ramos', 'username' => 'dramos', 'role' => 'Inventory Clerk', 'status' => 'Active'],
        ];

        return view('users', ['users' => $users]);
    }
}
