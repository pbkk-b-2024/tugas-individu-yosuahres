<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class AdminController extends Controller
{
    public function dashboard()
    {
        $rooms = Room::all();
        return view('admin.dashboard', ['rooms' => $rooms]);
    }
}