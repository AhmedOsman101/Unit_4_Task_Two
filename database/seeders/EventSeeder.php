<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Event::truncate();
        DB::table('events')->insert(
            [
                [
                    "name" => "Math Quiz",
                    "type" => "individual",
                ],
                [
                    "name" => "Basketball Tournament",
                    "type" => "team",
                ],
                [
                    "name" => "Chemistry Competition",
                    "type" => "individual",
                ],
                [
                    "name" => "Soccer Match",
                    "type" => "team",
                ],
                [
                    "name" => "Literature Challenge",
                    "type" => "individual",
                ],
                [
                    "name" => "Volleyball Championship",
                    "type" => "team",
                ],
                [
                    "name" => "Physics Olympics",
                    "type" => "individual",
                ],
                [
                    "name" => "Swimming Relay",
                    "type" => "team",
                ],
                [
                    "name" => "History Trivia",
                    "type" => "individual",
                ],
                [
                    "name" => "Tennis Doubles",
                    "type" => "team",
                ],
                [
                    "name" => "Geography Bee",
                    "type" => "individual",
                ],
                [
                    "name" => "Cricket League",
                    "type" => "team",
                ],
                [
                    "name" => "Art Contest",
                    "type" => "individual",
                ],
                [
                    "name" => "Ice Hockey Showdown",
                    "type" => "team",
                ],
                [
                    "name" => "Computer Science",
                    "type" => "individual",
                ],
                [
                    "name" => "Gymnastics Exhibition",
                    "type" => "team",
                ],
                [
                    "name" => "Biology Quiz Bowl",
                    "type" => "individual",
                ],
                [
                    "name" => "Baseball Tournament",
                    "type" => "team",
                ],
                [
                    "name" => "Debate Competition",
                    "type" => "individual",
                ],
                [
                    "name" => "Track and Field Meet",
                    "type" => "team",
                ]
            ]
        );
    }
}
