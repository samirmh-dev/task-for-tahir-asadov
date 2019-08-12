<?php

use Illuminate\Database\Seeder;
use App\Hotel;
use App\Media;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Hotel::class, 20)->create()->each(function($hotel){
            factory(Media::class, 2)->create([
                'model_id' => $hotel->id,
                'order_column' => $hotel->id,
            ]);
        });
    }
}
