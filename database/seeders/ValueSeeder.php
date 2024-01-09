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
            "attribute_id" => '1',
            "name" => [
                "en" => "qizil",
                "ru" => "красный"
            ],

        ]);
        Value::create([
            "attribute_id" => '1',
            "name" => [
                "en" => "qora",
                "ru" => "чёрный"
            ],

        ]);
        Value::create([
            "attribute_id" => '2',
            "name" => [
                "en" => "L",
                "ru" => "Л"
            ],

        ]);
        Value::create([
            "attribute_id" => '2',
            "name" => [
                "en" => "S",
                "ru" => "C"
            ],

        ]);
    }
}
