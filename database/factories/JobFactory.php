<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Job;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Job::class;

    public function randNum($arr)
    {
        $length = (int) count($arr) - 1;
        return rand(0, $length);
    }

    public function definition()
    {
        $type = ['Full-time', 'Temporary', 'Contract', 'Permanent', 'Internship', 'Volunteer'];
        $condition = ['Remote', 'Part Remote', 'On-Premise'];
        $categories = ['Tech', 'Health care', 'Hospitality', 'Customer Service', 'Marketing'];
        $location = ['Lagos', 'Abuja', 'Ibadan', 'Akure', 'USA'];
    

        return [
            'name' => $this->faker->text,
            'type' => $type[$this->randNum($type)],
            'work_condition' => $condition[$this->randNum($condition)],
            'category' => $categories[$this->randNum($categories)],
            'location' => $location[$this->randNum($location)],
        ];
    }
}
