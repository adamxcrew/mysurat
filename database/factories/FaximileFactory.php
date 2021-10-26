<?php

namespace Database\Factories;

use App\Models\Faximile;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class FaximileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faximile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_agenda' => $this->faker->numerify('AGD-####'),
            'no_dokumen' => $this->faker->numerify('SM/001/####'),
            'asal_dokumen' =>  $this->faker->city(),
            'perihal' => $this->faker->sentence(6,true),
            'file' => Str::random(10),
            'user_id' => "1",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
    }
}
