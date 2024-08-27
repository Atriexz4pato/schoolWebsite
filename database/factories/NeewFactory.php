<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Neew>
 */
class NeewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $imageFiles = File::files(public_path('storage/assets/news'));

        // Randomly select one image file
        $randomImage = $imageFiles[array_rand($imageFiles)];

        // Get the relative path to the image
        $imagePath = 'storage/assets/news/' . $randomImage->getFilename();
        $titles = ['Learning at Home Effectively', 'Meet your New Teachers', 'Back to School News Updates'];
        return [
            'title'=>$this->faker->randomElement($titles),
            'image_url'=>$imagePath,
            'description'=>$this->faker->paragraph(),
        ];
    }
}
