<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Log::info('User logging out:', ['user_id' => Auth::id(), 'session_id' => session()->getId()]);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Log::info('User logged out:', ['user_id' => Auth::id(), 'session_id' => session()->getId()]);
        return redirect('/')->with('success', 'You have been logged out successfully.');
    }
}