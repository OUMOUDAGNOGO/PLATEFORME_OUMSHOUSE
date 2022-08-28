<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Administrateurs',
               'email'=>'fanta@yopmail.com',
               'type'=>1,
               'password'=> bcrypt('1234567890'),
            ],
            [
               'name'=>'boutique',
               'email'=>'doussou@yopmail.com',
               'type'=> 2,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'client',
               'email'=>'papus@yopmail.com',
               'type'=>0,
               'password'=> bcrypt('12345678'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}