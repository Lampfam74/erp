<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email} {--superadmin : Create admin user}   {--update : user updated}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        // $pwd = $this->argument('pwd');
        $admin = $this->option('superadmin');
        $update = $this->option('update');
        $password=bcrypt('0123456789');


        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password; // You can generate a random password here
        // $user->save();

        if ($admin) {
            $user->profil ='superadmin';
            $user->save();
            $this->info('User created as superadmin');
            $this->info($user);
        }
        elseif ($update) {
            $users= User::where('email',$email)->first();
            $this->info($users);
             $users->password =bcrypt('0123456789');

            // return back();

            $users->save();
            $this->info('User Updated');
        }else{
            $this->info('create User Fails');
        }

    }
}