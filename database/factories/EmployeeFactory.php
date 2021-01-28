<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Employee;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone' => $this->faker->phoneNumber,

            'email' => $this->faker->unique()->safeEmail,
            'image_id' => Image::factory()->create()->id,
            'company_id' => Company::factory()->create()->id,

        ];
    }
}
