<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        //$this->call('CountriesTableSeeder');
        //$this->command->info('Countries table seeded!');
        //$this->call('RolesTableSeeder');
        //$this->command->info('Roles table seeded!');

        $this->call('CountiesTableSeeder');
        $this->command->info('Counties table seeded!');
    }

}
