<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Get all image files from the public/images directory
        $imageFiles = File::files(public_path('storage/assets/teachers'));

        // Randomly select one image file
        $randomImage = $imageFiles[array_rand($imageFiles)];

        // Get the relative path to the image
        $imagePath = 'storage/assets/teachers/' . $randomImage->getFilename();
        return [
            //
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'image_path' => $imagePath,
            'id' => $this->faker->unique()->randomNumber(),
            'role'=>'Class Teacher',
            'subjects'=>'English',
            'subject_2'=> 'Maths',
        ];
    }
}
