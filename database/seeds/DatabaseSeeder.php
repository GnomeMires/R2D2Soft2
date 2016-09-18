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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);

        // $this->call(UsersTableSeeder::class);
        DB::table('datosempresas')->insert([
            'nombreEmpresa' => 'Moto Boxes',
            'nit' => '11454337',
            'direccion' => 'México # 131 Esquina Av. De las Américas',
            'telefono' => 'S/N',
            'celular' => '68620333'
        ]);

    }
}
