<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{userId}/chats', function ($userId) {
    $user = User::find($userId);
    return response()->json([
        'user' => $user,
        'chats' => $user->chats()->get(),
        'created_chats' => $user->createdChats()->get(),
    ]);
});
