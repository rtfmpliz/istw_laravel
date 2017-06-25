 <?php
 class BagiansTableSeeder extends Seeder {
 public function run()
 {
 // kosongkan database
 DB::table('bagians')->delete();
 // buat array untuk diinput
 $bagians = [
 ['id'=>1, 'name'=>'QA', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],
 ['id'=>2, 'name'=>'PPIC', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],
 ['id'=>3, 'name'=>'PGA', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],

  ['id'=>4, 'name'=>'Galvanize', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],

  ['id'=>5, 'name'=>'Recutting', 'created_at'=>'2014-05-01 11:15:22', 'updated_at'=>'2014-05-01 11:15:22'],
 ];
 // insert data ke database
 DB::table('bagians')->insert($bagians);
 }
 }
