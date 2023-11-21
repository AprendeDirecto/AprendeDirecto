<?php

namespace Database\Factories;

use App\Models\usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\usuario>
 */
class usuarioFactory extends Factory
{
    protected $model = usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username'          => $this->faker->userName(),
            'password'          => $this->faker->password(),
            'correo'            => $this->faker->email(),
            'RUT'               => $this->faker->randomNumber(8),
            'digVer'            => $this->faker->randomElement([rand(0,9),'K']),
            'Nombre'            => $this->faker->name(),
            'primerApellido'    => $this->faker->lastName(),
            'segundoApellido'   => $this->faker->lastName(),
            'tipoUsuario'       => $this->faker->randomElement(['alumno','profesor']),
            'descripcion'       => $this->faker->text()
        ];
    }
}
