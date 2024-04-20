<?php

namespace Database\Seeders;

use App\Models\HouseRent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HourseRent extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

    foreach (range(1, 20) as $index) {
        HouseRent::create([
            'title' => 'Khulna House',
            'catagory' => 'rent',
            'amount' => '5000',
            'rent_month' => 'may',
            'house_location' => 'khulna',
            'size' => '5s',
            'room' => '3',
            'bath_room' => '2',
            'kitchen_room' => '1',
            'img' => 'asdflkasdkfajksdf',
            'desc' => 'afsdfasdfasdffffffffffff',
        ]);
    }
    }
}
