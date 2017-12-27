<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
          'imagepath' => 'https://www.target.com.au/medias/static_content/product/images/large/33/98/A873398.jpg',
          'title' => 'ANXTY T-Shirt White',
          'description' => 'Kaos Original Anxty',
          'price' => 130
        ]);
        $product->save();
        $product = new \App\Product([
          'imagepath' => 'http://www.pngpix.com/wp-content/uploads/2016/10/PNGPIX-COM-Black-T-Shirt-PNG-Transparent-Image.png',
          'title' => 'ANXTY T-Shirt Black',
          'description' => 'Kaos Original Anxty',
          'price' => 120
        ]);
        $product->save();
        $product = new \App\Product([
          'imagepath' => 'http://www.pngpix.com/wp-content/uploads/2016/10/PNGPIX-COM-Black-T-Shirt-PNG-Transparent-Image.png',
          'title' => 'ANXTY T-Shirt',
          'description' => 'Kaos Original Anxty',
          'price' => 100
        ]);
        $product->save();
    }
}
