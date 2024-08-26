<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factory>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //get all images from
        $images = File::files(public_path('assets/events'));

        //select random image
        $randomImage = $images[array_rand($images)];

        //get relative file path

        $filePath = 'assets/events/' . $randomImage->getFilename();
        $titles = ['Academic Clinic', 'Science Fair', 'Best Students Tour', 'Our School Get Together'];

        return [
            'title' => $this->faker->randomElement($titles),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis eum veritatis asperiores. Ex, voluptatem mollitia. Iure libero, vitae voluptas voluptatem a corporis quia, nam odit placeat quis neque quasi aspernatur.',
            'date' => $this->faker->date(),
            'start_time'=> $this->faker->time(),
            'end_time'=> $this->faker->time(),
            'image_url'=>$filePath,
            'venue' => 'Enlight School'

        ];
    }
}
