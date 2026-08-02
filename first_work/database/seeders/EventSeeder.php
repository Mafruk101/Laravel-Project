<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::updateOrCreate(
            ['Title' => 'Team Building Day'],
            [
                'Date' => now()->addDays(7)->toDateString(),
                'Image' => null,
            ]
        );
    }
}
