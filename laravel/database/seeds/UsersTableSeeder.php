<?php
 
use Illuminate\Database\Seeder;
 
class UsersTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('users')->delete();
 
        $users = array(
            ['id' => 1, 'name' => 'user1', 'email' => 'user1@assign.com', 'password' => bcrypt('pass1'), 'role' => 'coder'],
            ['id' => 2, 'name' => 'user2', 'email' => 'user2@assign.com', 'password' => bcrypt('pass2'), 'role' => 'coder'],
            ['id' => 3, 'name' => 'user3', 'email' => 'user3@assign.com', 'password' => bcrypt('pass3'), 'role' => 'viewer'],
        );
 
        // Uncomment the below to run the seeder
        DB::table('users')->insert($users);
    }
 
}
?>