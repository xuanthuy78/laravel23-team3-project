<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	['name'=>'Bánh mặn thập cẩm','category_id'=>'1','description'=> '','unit_price'=>50000,'promotion_price'=>'0','image'=>'flower-fruits636102461981788938.jpg','unit'=>'cái','new'=>'1'],
        	['name'=>'Bánh Chocolate Trái cây','category_id'=>'2','description'=> '','unit_price'=>150000,'promotion_price'=>'0','image'=>'Caramen-pudding636099031482099583.jpg','unit'=>'cái','new'=>'0'],
        	['name'=>'Bánh sinh nhật rau câu trái cây','category_id'=>'3','description'=> '','unit_price'=>120000,'promotion_price'=>110000,'image'=>'crepe-chocolate.jpg','unit'=>'cái','new'=>'1'],
    		['name'=>'Bánh Frenc','category_id'=>'1','description'=> '','unit_price'=>160000,'promotion_price'=>150000,'image'=>'banhbonglantrung.jpg','un1it'=>'cái','new'=>'1'],
			['name'=>'Bánh kem Dâu III','category_id'=>'3','description'=> '','unit_price'=>300000,'promotion_price'=>280000,'image'=>'banh kem sinh nhat.jpg','unit'=>'cái','new'=>'1'],
            ['name'=>'Bánh kem hương vị chanh dây','category_id'=>'4','description'=> 'Được từ chanh dây nguyuyen chất','unit_price'=>120000,'promotion_price'=>110000,'image'=>'sp_1.jpg','unit'=>'cái','new'=>'0'],
            ['name'=>'Bánh ngọt ngũ sắc Việt Nam','category_id'=>'4','description'=> 'Hương vị vô cùng lạ, với sự cách điệu mẫu mã','unit_price'=>100000,'promotion_price'=>90000,'image'=>'sp_2.jpg','unit'=>'hộp','new'=>'0'],
        ]);
    }
}
