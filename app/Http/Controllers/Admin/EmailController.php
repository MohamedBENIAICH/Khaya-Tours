<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\UserRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Notification;

class EmailController extends Controller
{
    public function index(): View
{
    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $users = User::whereDoesntHave('roles', function ($query) {
        $query->where('name', 'admin');
    })->get();

    return view('admin.email.email', compact('users'));
}
public function send_email($id)
{
    $user = User::findOrFail($id); // Assuming you have a User model imported at the top
    return view('admin.email.send_email', compact('user'));
}
public function mail(Request $request, $id){
    $user = User::find($id);
    $details = [
        'subject' => $request->subject,
        'message' => $request->message
    ];

    Notification::send($user, new EmailNotification($details));

    return redirect()->back();
}
}
