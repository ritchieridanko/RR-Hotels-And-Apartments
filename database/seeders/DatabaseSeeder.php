<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\RoomType;
// use App\Models\Transaction;
// use App\Models\DetailTransaction;
use App\Models\Amenity;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Customer',
            'email' => 'customer@email.com',
            'password' => bcrypt('password123'),
            'is_admin' => false
        ]);

        RoomType::create([
            'RoomType' => 'Presidential Suite'
        ]);

        RoomType::create([
            'RoomType' => 'Royal Suite'
        ]);
        RoomType::create([
            'RoomType' => 'Executive Suite'
        ]);

        RoomType::create([
            'RoomType' => 'Penthouse Suite'
        ]);
        RoomType::create([
            'RoomType' => 'Deluxe Room'
        ]);

        RoomType::create([
            'RoomType' => 'Superior Room'
        ]);
        RoomType::create([
            'RoomType' => 'Standard Room'
        ]);

        RoomType::create([
            'RoomType' => 'Economy Room'
        ]);

        Amenity::create([
            'AmenityType' => 'Soda',
            'Price' => 20000
        ]);

        Amenity::create([
            'AmenityType' => 'Mineral Water',
            'Price' => 15000
        ]);

        Amenity::create([
            'AmenityType' => 'Laundry Service',
            'Price' => 100000
        ]);

        Amenity::create([
            'AmenityType' => 'Snack',
            'Price' => 25000
        ]);

        // Room::create([
        //     'RoomTypeID' => ,
        //     'RoomName' => ,
        //     'Area' => ,
        //     'Price' => ,
        //     'Facility' => 
        // ]);
    }
}
