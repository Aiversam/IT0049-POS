<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'John Admin',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Sarah Cruz',
                'role' => 'Cashier'
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Michael Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'David Reyes',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Lisa Garcia',
                'role' => 'Staff'
            ]
        ];

        return view('users', [
            'users' => $users
        ]);
    }
}