<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::all()->take(10)->shuffle();

        $users->map(function ($user) {
            factory(\App\Company::class, 1)->create([
                'user_id' => $user->id
            ])->each(function ($company) {
                factory(\App\Place::class, 3)->create([
                    'company_id' => $company->id
                ]);
            });
        });


    }
}
