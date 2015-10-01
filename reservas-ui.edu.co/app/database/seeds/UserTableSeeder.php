<?php

class UserTableSeeder extends Seeder {

 public function run()
    {
        $users = [
            ['name_user' => 'Hector Julian Velandia Mendez', 'password' => Hash::make('111'), 'email' => 'juan@email.com'],
            ['name_user' => 'Pedro', 'password' => Hash::make('222'), 'email' => 'pedro@email.com'],
            ['name_user' => 'Diego', 'password' => Hash::make('333'), 'email' => 'diego@email.com']
        ];
 
        DB::table('usuarios')->insert($users);
    }
 
  
}
?>