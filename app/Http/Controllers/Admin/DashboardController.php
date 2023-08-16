<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'count_barang' => Barang::count(),
            'barang' => Barang::all(),
            'user' => User::count()
        ];
        return view('admin.dashboard.index', $data);
    }
}
