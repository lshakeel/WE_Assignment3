<?php
 
use Illuminate\Database\Seeder;
 
class CodesTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('codes')->delete();
 
        $codes = array(
            ['id' => 1, 'user_id' => 1, 'code' => '<?php echo \'hello\''],
            ['id' => 2, 'user_id' => 1, 'code' => '<?php echo \'hello\''],
            ['id' => 3, 'user_id' => 2, 'code' => '<?php echo \'hello\''],
            ['id' => 4, 'user_id' => 3, 'code' => '<?php echo \'hello\''],
            ['id' => 5, 'user_id' => 3, 'code' => '<?php echo \'hello\''],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('codes')->insert($codes);
    }
 
}
?>