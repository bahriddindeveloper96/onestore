<?php

namespace Database\Seeders;
use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Value::create([
            "attribute" => '1',
            "name" => [
                "uz" => "qizil",
                "ru" => "красный"
            ],

        ]);
        Value::create([
            "attribute" => '1',
            "name" => [
                "uz" => "qora",
                "ru" => "чёрный"
            ],

        ]);
        Value::create([
            "attribute" => '2',
            "name" => [
                "uz" => "L",
                "ru" => "Л"
            ],

        ]);
        Value::create([
            "attribute" => '2',
            "name" => [
                "uz" => "M",
                "ru" => "Мь"
            ],

        ]);
    }
}
