<?php

namespace App\Service;

use App\Jobs\StoreUserJob;
use App\Mail\PasswordMail;
use App\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            // StoreUserJob::dispatch($data); ecли создать очередь, отдельный поток php artisan gueue:work
            $password = Str::random(10);
            $data['password'] = Hash::make($password); // for yourself password $data['password'] = Hash::make($data['password']);
            $user =  User::firstOrCreate(['email' => $data['email']], $data);
            Mail::to($data['email'])->send(new PasswordMail($password));
            event(new Registered($user));
            Db::commit();
        } catch (\Exception $th) {
            Db::rollBack();
            abort(500);
        }
    }

    public function  update($data, $user)
    {
        try {
            DB::beginTransaction();
            $user->update($data);
            Db::commit();
        } catch (\Exception $th) {
            Db::rollBack();
            abort(500);
        }
        return $user;
    }
}
