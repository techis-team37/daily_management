<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'product_id' => '1',
                'product_name' => 'トイレットペーパー',
                'category' => 'トイレ',
                'stock' => '10',
                'account_id' => '1',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'product_id' => '2',
                'product_name' => '食器洗剤',
                'category' => 'キッチン',
                'stock' => '2',
                'account_id' => '1',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'product_id' => '3',
                'product_name' => 'スポンジ',
                'category' => 'キッチン',
                'stock' => '3',
                'account_id' => '2',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
            [
                'product_id' => '4',
                'product_name' => '歯ブラシ',
                'category' => '洗面所',
                'stock' => '1',
                'account_id' => '2',
                'created_at' => date('Y-m-d'),
                'updated_at' => date('Y-m-d'),
            ],
        ]);
    }
}
