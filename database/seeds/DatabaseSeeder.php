<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if ($this->command->confirm('¿Desea refrescar la migración antes de alimentar la base de datos?'))
        {
            $this->command->call('migrate:refresh');
            $this->command->warn("Datos eliminados, comenzando con una base de datos limpia.");
        }
    }
}
