<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    protected $model = \App\Models\Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement([
                'Medical Equipment', 'Pharmaceuticals', 'Surgical Instruments',
                'Diagnostic Devices', 'Personal Protective Equipment',
                'Orthopedic Supplies', 'Laboratory Supplies', 'First Aid Supplies',
                'Hospital Furniture', 'Disposables'
            ]),
        ];
    }
}
