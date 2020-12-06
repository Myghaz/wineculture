<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
class AdminController extends Controller
{
    public function dashboard() {
        $usersJan = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 1)
            ->get();
        $usersFev = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 2)
            ->get();
        $usersMar = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 3)
            ->get();
        $usersAbr = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 4)
            ->get();
        $usersMai = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 5)
            ->get();
        $usersJun = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 6)
            ->get();
        $usersJul = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 7)
            ->get();
        $usersAgo = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 8)
            ->get();
        $usersSet = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 9)
            ->get();
        $usersOut = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 10)
            ->get();
        $usersNov = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 11)
            ->get();
        $usersDez = User::whereYear('created_at', '=', 2020)
            ->whereMonth('created_at', '=', 12)
            ->get();
        $totalJan = $usersJan->count();
        $totalFev = $usersFev->count();
        $totalMar = $usersMar->count();
        $totalAbr = $usersAbr->count();
        $totalMai = $usersMai->count();
        $totalJun = $usersJun->count();
        $totalJul = $usersJul->count();
        $totalAgo = $usersAgo->count();
        $totalSet = $usersSet->count();
        $totalOut = $usersOut->count();
        $totalNov = $usersNov->count();
        $totalDez = $usersDez->count();
        $totalUsers = User::whereYear('created_at', '=', 2020)->count();
        return view('paginas.backend.dashboard', compact([
        'totalJan', 
        'totalFev', 
        'totalMar', 
        'totalAbr', 
        'totalMai', 
        'totalJun', 
        'totalJul', 
        'totalAgo', 
        'totalSet', 
        'totalOut', 
        'totalNov', 
        'totalDez',
        'totalUsers']));
    }
}
