<?php

namespace Database\Factories;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeliveryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Delivery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $delivery_name = $this->faker->unique()->words($nb=2,$asText=true);
        return [
            'title'=>$delivery_name,
            'regular_price'=>$this->faker->numberBetween(1,54).".".$this->faker->numberBetween(1,54),
            'val'=>'',            
            'nam'=>'',
            'idd'=>$this->faker->numberBetween(1,3),
            'price_id'=>$this->faker->numberBetween(1,3),
            'currency'=>''
        ];
    }
}
