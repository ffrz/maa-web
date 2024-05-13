<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Event::truncate();
        Schema::enableForeignKeyConstraints();

        DB::beginTransaction();
        Event::insert(['week' => 1, 'day' => 3, 'speaker' => 'Ust. Habib Hafidzhahullah', 'location' => 'Cikijing']);
        Event::insert(['week' => 1, 'day' => 5, 'speaker' => 'Ust. Muhammad Hafidzhahullah', 'location' => 'Talaga']);
        Event::insert(['week' => 1, 'day' => 6, 'speaker' => 'Ust. Abu Rasyid Hafidzhahullah', 'location' => 'Bantarujeg']);
        Event::insert(['week' => 2, 'day' => 2, 'speaker' => 'Ust. Abu Hatim Hafidzhahullah', 'location' => 'Cikijing']);
        Event::insert(['week' => 2, 'day' => 4, 'speaker' => 'Ust. Abu Hatim Hafidzhahullah', 'location' => 'Talaga']);
        Event::insert(['week' => 2, 'day' => 6, 'speaker' => 'Ust. Abu Hamzah Yusuf Hafidzhahullah', 'location' => 'Talaga']);
        Event::insert(['week' => 3, 'day' => 3, 'speaker' => 'Ust. Abdullah Hafidzhahullah', 'location' => 'Sindangpanji']);
        Event::insert(['week' => 3, 'day' => 6, 'speaker' => 'Ust. Arief Subakti Hafidzhahullah', 'location' => 'Cikijing']);
        Event::insert(['week' => 4, 'day' => 4, 'speaker' => 'Ust. Abu Hatim Hafidzhahullah', 'location' => 'Talaga']);
        Event::insert(['week' => 4, 'day' => 5, 'speaker' => 'Ust. Abu Rasyid Hafidzhahullah', 'location' => 'Sindangpanji']);
        Event::insert(['week' => 4, 'day' => 6, 'speaker' => 'Ust. Helmi Bajri Hafidzhahullah', 'location' => 'Talaga']);
        DB::commit();
    }
}
