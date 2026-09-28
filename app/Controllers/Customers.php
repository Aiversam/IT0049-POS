<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Aiver Sam Santiago',
                'email' => 'aiver@gmail.com',
                'phone' => '09171234567'
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@gmail.com',
                'phone' => '09181234567'
            ],
            [
                'full_name' => 'Pedro Reyes',
                'email' => 'pedro@gmail.com',
                'phone' => '09191234567'
            ],
            [
                'full_name' => 'Ana Garcia',
                'email' => 'ana@gmail.com',
                'phone' => '09201234567'
            ],
            [
                'full_name' => 'Mark Villanueva',
                'email' => 'mark@gmail.com',
                'phone' => '09211234567'
            ]
        ];

        return view('customers', [
            'customers' => $customers
        ]);
    }
}