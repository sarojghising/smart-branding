<?php

namespace Database\Factories;

use App\Models\Influencer;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class InfluencerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Influencer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
             'image' => $this->faker->imageUrl(200,200),
            'facebook_followers' => $this->faker->randomFloat(2,0,100).'k',
            'instagram_followers' => $this->faker->randomFloat(2,0,100).'k',
            'impression' => rand(1,20).'k'.' - ' .rand(20,30).'k',
            'email' => $this->faker->unique()->safeEmail(),
            'rate' => $this->faker->numberBetween($min = 1500, $max = 6000),
            'phone_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
