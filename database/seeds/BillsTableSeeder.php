<?php

use Illuminate\Database\Seeder;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert([
            ['user_id'=>1,'name'=>'Phan Thanh Hùng','phone'=> '0935444294','address' => 'Phạm Như Xương, Đà Nẵng','date_order'=>'2018/01/04','total'=>630000,'payment'=>'COD','note'=>'giao trong ngày lúc 16h00','status'=>'1'],
            ['user_id'=>1,'name'=>'Mai Mỹ Nhung','phone'=> '01223569397','address' => '220 Lê Duẩn, Đà Nẵng','date_order'=>'2018/02/01','total'=>800000,'payment'=>'COD','note'=>'giao trong ngày lúc 16h00','status'=>'1'],
            ['user_id'=>3,'name'=>'Tiểu La','phone'=> '023363789990','address' => '92 Quang Trung Đà Nẵng','date_order'=>'2018/03/10','total'=>470000,'payment'=>'COD','note'=>'giao trong ngày lúc 18h00','status'=>'1'],
            ['user_id'=>3,'name'=>'Minh Hằng','phone'=> '023363789990','address' => '92 Quang Trung Đà Nẵng','date_order'=>'2018/03/10','total'=>390000,'payment'=>'COD','note'=>'giao trong ngày lúc 15h00','status'=>'1'],
        ]);
    }
}
