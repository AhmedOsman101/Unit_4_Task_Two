<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Question::truncate();
        DB::table('questions')->insert(
            [
                [
                    "event_id" => 1,
                    "question" => "What is the capital of France?",
                    "answer" => "Paris"
                ],
                [
                    "event_id" => 1,
                    "question" => "What is the capital of Canada?",
                    "answer" => "Ottawa"
                ],
                [
                    "event_id" => 1,
                    "question" => "What is the capital of Japan?",
                    "answer" => "Tokyo"
                ],
                [
                    "event_id" => 1,
                    "question" => "What is the largest planet in our solar system?",
                    "answer" => "Jupiter"
                ],
                [
                    "event_id" => 1,
                    "question" => "What is the chemical symbol for gold?",
                    "answer" => "Au"
                ],
                [
                    "event_id" => 1,
                    "question" => "What is the chemical symbol for carbon?",
                    "answer" => "C"
                ],
                [
                    "event_id" => 1,
                    "question" => "What is the chemical formula for table salt?",
                    "answer" => "NaCl"
                ],
                [
                    "event_id" => 2,
                    "question" => "Which team has won the most NBA championships?",
                    "answer" => "Boston Celtics"
                ],
                [
                    "event_id" => 2,
                    "question" => "Who won the 2021 NBA Finals?",
                    "answer" => "Milwaukee Bucks"
                ],
                [
                    "event_id" => 3,
                    "question" => "Who discovered penicillin?",
                    "answer" => "Alexander Fleming"
                ],
                [
                    "event_id" => 3,
                    "question" => "Who discovered electricity?",
                    "answer" => "Benjamin Franklin"
                ],
                [
                    "event_id" => 4,
                    "question" => "Who won the FIFA World Cup in 2018?",
                    "answer" => "France"
                ],
                [
                    "event_id" => 4,
                    "question" => "Who won the 2020 UEFA Champions League?",
                    "answer" => "Bayern Munich"
                ],
                [
                    "event_id" => 4,
                    "question" => "Who holds the record for the most career goals in football (soccer)?",
                    "answer" => "Josef Bican"
                ],
                [
                    "event_id" => 4,
                    "question" => "Who won the 2018 FIFA Women's World Cup?",
                    "answer" => "United States"
                ],
                [
                    "event_id" => 5,
                    "question" => "Who is the author of 'To Kill a Mockingbird'?",
                    "answer" => "Harper Lee"
                ],
                [
                    "event_id" => 5,
                    "question" => "Who wrote 'Romeo and Juliet'?",
                    "answer" => "William Shakespeare"
                ],
                [
                    "event_id" => 7,
                    "question" => "Who developed the theory of general relativity?",
                    "answer" => "Albert Einstein"
                ],
                [
                    "event_id" => 8,
                    "question" => "Who was the first woman to win an Olympic gold medal in swimming?",
                    "answer" => "Sarah 'Fanny' Durack"
                ],
                [
                    "event_id" => 9,
                    "question" => "In which city were the 2008 Summer Olympics held?",
                    "answer" => "Beijing, China"
                ],
                [
                    "event_id" => 12,
                    "question" => "Who won the 2019 Cricket World Cup?",
                    "answer" => "England"
                ],
                [
                    "event_id" => 13,
                    "question" => "Who painted the Sistine Chapel ceiling?",
                    "answer" => "Michelangelo"
                ],
                [
                    "event_id" => 17,
                    "question" => "Who won the Formula 1 World Championship in 2020?",
                    "answer" => "Lewis Hamilton"
                ],
                [
                    "event_id" => 20,
                    "question" => "Who holds the record for the most Olympic gold medals?",
                    "answer" => "Michael Phelps"
                ],
                [
                    "event_id" => 20,
                    "question" => "Who won the 2018 Masters Tournament in golf?",
                    "answer" => "Patrick Reed"
                ]
            ]
        );
    }
}
