<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EventsTableSeeder extends Seeder {

    public function run() {
        $count = 175;

        $this->command->info('Deleting existing users table ...');
        DB::table('events')->delete();

        $faker = Faker\Factory::create();
        $faker->addProvider(new Faker\Provider\Base($faker));
        $faker->addProvider(new Faker\Provider\Lorem($faker));
        $faker->addProvider(new Faker\Provider\DateTime($faker));

        $this->command->info('Inserting ' . $count . ' sample records using Faker ...');
        // $faker->seed(1234);

        for ($x = 0; $x < $count; $x++) {
            Event::create(array(
                'title' => $faker->sentence(3),
                'eventtype_id' => $faker->randomNumber(1, 8),
                'hostel_id' => $faker->randomNumber(1, 24),
                'county_id' => $faker->randomNumber(1, 32),
                'date_from' => $faker->dateTimeBetween($startDate = '-3 days', $endDate = 'now'),
                'date_to' => $faker->dateTimeBetween($startDate = '-3 days', $endDate = 'now'),
                'details' => $faker->paragraph(30)
            ));
        }

        $this->command->info('Events table seeded using Faker ...');
    }

}
