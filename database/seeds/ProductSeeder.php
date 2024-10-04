<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['name' => 'Ручка', 'amount' => 5, 'price' => 10.00]);
        Product::create(['name' => 'Карандаш', 'amount' => 10, 'price' => 20.00]);
        Product::create(['name' => 'Ластик', 'amount' => 15, 'price' => 25.00]);
    }
} 