<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    private function seedUsers(){
        // Borramos los datos de la tabla
        DB::table('users')->delete();
        // Añadimos una entrada a esta tabla
        DB::table('users')->insert([
            'name' => 'Franco',
            'email' => 'fran@hot.com',
            'password' => bcrypt('fran'),
        ]);
    }
    public function run(){
        self::seedUsers();
        $this->command->info('Tabla usuarios fue inicializada con datos');
        
        // $this->call(UsersTableSeeder::class);
    }
}
