<?php

use Illuminate\Database\Seeder;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Offer::class, 100)->create()->each(function ($offer) {
            factory(\App\Group::class, 2)->create([
                'offer_id' => $offer->id
            ]);

            factory(\App\Review::class, rand(5, 10))->create([
                'offer_id' => $offer->id,
            ]);
        });
    }
}
