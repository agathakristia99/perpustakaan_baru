<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = [
            ['name' => 'Andi Pratama', 'number' => 'M001'],
            ['name' => 'Budi Santoso', 'number' => 'M002'],
            ['name' => 'Citra Lestari', 'number' => 'M003'],
            ['name' => 'Dewi Anggraini', 'number' => 'M004'],
            ['name' => 'Eko Saputra', 'number' => 'M005'],
        ];

        return view('members.index', compact('members'));
    }
}
