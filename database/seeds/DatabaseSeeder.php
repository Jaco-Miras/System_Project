<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'name' => 'hr',
           'username' => 'hr.admin',
           'password' => Hash::make('hr.admin')
       ]);

       DB::table('users')->insert([
        'name' => 'IT',
        'username' => 'it.admin',
        'password' => Hash::make('it.admin')
    ]);

    //    DB::table('users')->insert([
    //     'name' => 'sales',
    //     'username' => 'sales.admin'
    //     'password' => Hash::make('sales.admin')
    // ]);

       DB::table('users')->insert([
        'name' => 'marketing',
        'username' => 'mrktg.admin',
        'password' => Hash::make('mrktg.admin')
    ]);

    DB::table('users')->insert([
        'name' => 'eds',
        'username' => 'eds.admin',
        'password' => Hash::make('eds.admin')
    ]);

    DB::table('users')->insert([
        'name' => 'apmg',
        'username' => 'apmg.admin',
        'password' => Hash::make('apmg.admin')
    ]);

    DB::table('users')->insert([
        'name' => 'bussdev',
        'username' => 'bussdev.admin',
        'password' => Hash::make('bussdev.admin')
    ]);

    // DB::table('users')->insert([
    //     'name' => 'ADMIN',
    //     'username' => 'admin',
    //     'password' => Hash::make('admin')
    // ]);
    }
    }

