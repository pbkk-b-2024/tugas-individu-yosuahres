<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class UserController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('user.dashboard', ['rooms' => $rooms]);
    }
}