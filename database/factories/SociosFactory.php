<?php

namespace Database\Factories;

use App\Models\Estado;
use App\Models\Socios;
use Faker\Factory as FakerFactory;
//use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;


class SociosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Socios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'dni'=> $this->faker->numberBetween(1000000,90000000),
            'direccion'=> $this->faker->address,
            'nacimiento'=>$this->faker->date(),
            'email'=>$this->faker->email,
            'telefono'=>$this->faker->numberBetween(2000000000,4000000000),
            'url'=>$this->faker->url(),
            'estado_id'=>factory(EstadoFactory::class())->create(),
        ];
    }
}
