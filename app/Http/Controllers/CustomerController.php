<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Maria Santos', 'email' => 'maria.santos@gmail.com', 'phone' => '0917-123-4567', 'city' => 'Quezon City'],
            ['id' => 2, 'name' => 'Juan Dela Cruz', 'email' => 'juan.delacruzgmail.com', 'phone' => '0918-234-5678', 'city' => 'Manila'],
            ['id' => 3, 'name' => 'Ana Reyes', 'email' => 'ana.reyes@gmail.com', 'phone' => '0919-345-6789', 'city' => 'Makati'],
            ['id' => 4, 'name' => 'Carlos Garcia', 'email' => 'carlos.garcoa@gmail.com', 'phone' => '0920-456-7890', 'city' => 'Pasig'],
            ['id' => 5, 'name' => 'Liza Mendoza', 'email' => 'liza.mendoza@gmail.com', 'phone' => '0921-567-8901', 'city' => 'Taguig'],
            ['id' => 6, 'name' => 'Paolo Villanueva', 'email' => 'paolo.villanueva@gmail.com', 'phone' => '0922-678-9012', 'city' => 'Mandaluyong'],
        ];

        return view('customers', ['customers' => $customers]);
    }
}
