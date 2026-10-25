<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Place::create([
            'name' => 'Socotra Island',
            'country' => 'Yemen',
            'category' => 'Island',
            'description' => 'An island with unusual trees and beautiful landscapes.',
            'interesting_fact' => 'Many plants on Socotra are found nowhere else.',
            'image' => 'socotra.avif',
            'is_featured' => true,
        ]);

        Place::create([
            'name' => 'Derinkuyu Underground City',
            'country' => 'Turkey',
            'category' => 'Underground City',
            'description' => 'An ancient underground city with many rooms and tunnels.',
            'interesting_fact' => 'People used this city as a shelter.',
            'image' => 'derinkuyu.webp',
            'is_featured' => true,
        ]);

        Place::create([
            'name' => 'Door to Hell',
            'country' => 'Turkmenistan',
            'category' => 'Natural Gas Crater',
            'description' => 'A large gas crater in the Karakum Desert that burns continuously.',
            'interesting_fact' => 'It is commonly known as the Door to Hell.',
            'image' => 'darwaza.avif',
            'is_featured' => true,
        ]);

        Place::create([
            'name' => 'Antelope Canyon',
            'country' => 'USA',
            'category' => 'Canyon',
            'description' => 'A beautiful canyon with narrow passages and curved sandstone walls.',
            'interesting_fact' => 'Sunlight creates beautiful patterns on its orange walls.',
            'image' => 'canyon.avif',
            'is_featured' => false,
        ]);

        Place::create([
            'name' => 'Lake Hillier',
            'country' => 'Australia',
            'category' => 'Lake',
            'description' => 'A lake famous for its unusual pink colour.',
            'interesting_fact' => 'The lake looks pink even when viewed from above.',
            'image' => 'hillier.avif',
            'is_featured' => true,
        ]);

        Place::create([
            'name' => 'Meteora',
            'country' => 'Greece',
            'category' => 'Rock Formations',
            'description' => 'Tall rock formations with monasteries built on their tops.',
            'interesting_fact' => 'Some monasteries were built high above the ground.',
            'image' => 'meteora.avif',
            'is_featured' => false,
        ]);

        Place::create([
            'name' => 'Pamukkale',
            'country' => 'Turkey',
            'category' => 'Natural Wonder',
            'description' => 'White terraces filled with mineral-rich thermal water.',
            'interesting_fact' => 'Its white terraces form from calcium deposits.',
            'image' => 'pamukkal.avif',
            'is_featured' => true,
        ]);

        Place::create([
            'name' => 'Mount Roraima',
            'country' => 'Venezuela',
            'category' => 'Mountain',
            'description' => 'A flat-topped mountain surrounded by steep cliffs.',
            'interesting_fact' => 'Its summit has a unique landscape and unusual plants.',
            'image' => 'roraima.avif',
            'is_featured' => false,
        ]);

        Place::create([
            'name' => 'Waitomo Glowworm Caves',
            'country' => 'New Zealand',
            'category' => 'Cave',
            'description' => 'Caves known for tiny glowworms that shine in the darkness.',
            'interesting_fact' => 'Glowworms create a star-like effect on cave ceilings.',
            'image' => 'waitamo.avif',
            'is_featured' => true,
        ]);

        Place::create([
            'name' => 'Zhangjiajie National Forest Park',
            'country' => 'China',
            'category' => 'National Park',
            'description' => 'A park famous for its tall sandstone pillars and misty scenery.',
            'interesting_fact' => 'Its towering rock pillars inspired famous fantasy landscapes.',
            'image' => 'zandyan.avif',
            'is_featured' => true,
        ]);


    }
}
