<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
/*
|--------------------------------------------------------------------------
|   This command is used for user creation by Obaid sAMIM
|--------------------------------------------------------------------------
|
| During this click on the root of your project and write like bellow to add user in the database for login
|PS E:\sonware.com> php artisan adduser
*/
Artisan::command('adduser', function(){
    $user = new App\Models\User();
    $user->password = Hash::make('Omar@4433');
    $user->email = 'omarsamim@gmail.com';
    $user->name = 'OmarSamim';
    $user->save();
})->describe('Add user');