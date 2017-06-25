 <?php
 class JabatansTableSeeder extends Seeder {
 public function run()
 {
 // kosongkan database
 DB::table('jabatans')->delete();
 // buat array untuk diinput
 $jabatans = [
 ['id'=>1, 'name'=>'Staff', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],
 ['id'=>2, 'name'=>'Leader', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],
 ['id'=>3, 'name'=>'Supervisor', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],

  ['id'=>4, 'name'=>'Manager', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],

  ['id'=>5, 'name'=>'Operator', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],
    ['id'=>6, 'name'=>'Driver', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],
      ['id'=>7, 'name'=>'Assistant Driver', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],
 ];
 // insert data ke database
 DB::table('jabatans')->insert($jabatans);
 }
 }
