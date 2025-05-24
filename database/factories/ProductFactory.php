<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = \App\Models\Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Surgical Gloves', 'Stethoscope', 'Blood Pressure Monitor', 'Scalpel Blades',
                'Antibiotic Capsules', 'Disposable Face Masks', 'Orthopedic Knee Brace',
                'Microscope', 'IV Infusion Set', 'Hospital Bed', 'Thermometer (Digital)',
                'Surgical Sutures', 'Pain Relief Tablets', 'Surgical Drapes', 'Blood Glucose Test Strips',
            ]),
            'category_id' => \App\Models\Category::factory(),
            'price' => $this->faker->randomFloat(2, 5, 500), // سعر بين 5 و 500 دولار
            
        ];
    }
}

