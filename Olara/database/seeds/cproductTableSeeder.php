<?php

use Illuminate\Database\Seeder;

class cproductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/gallery/7773b3981115d03af2cff632d372e67bfc0b1fe5.jpg',
            'title' => 'frocks',
            'description' => 'linen dress expose zipper',
            'price' => 10
        ]);
        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/gallery/7773b3981115d03af2cff632d372e67bfc0b1fe5.jpg',
            'title' => 'frocks',
            'description' => 'linen dress expose zipper',
            'price' => 10
        ]);
        $Cproduct->save();

        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/gallery/01ac7e4b5d705fc38cfef4635b13e1473bd4b12e.jpg',
            'title' => 'shortyq',
            'description' => 'princess line shift linen dress',
            'price' => 20
        ]);
        $Cproduct->save();
        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/gallery/6c25cb3bab60fca0a6bf13feb67790c8f5657054.jpg',
            'title' => 'frocks',
            'description' => 'belleza midi length linen dress',
            'price' => 30
        ]);
        $Cproduct->save();
        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/gallery/58540a657a9248fa1e63f01c90f7246fbc6d8910.jpg',
            'title' => 'frocks',
            'description' => 'casual line dress',
            'price' => 40
        ]);
        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/gallery/7773b3981115d03af2cff632d372e67bfc0b1fe5.jpg',
            'title' => 'frocks',
            'description' => 'linen dress expose zipper',
            'price' => 10
        ]);
        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/gallery/7773b3981115d03af2cff632d372e67bfc0b1fe5.jpg',
            'title' => 'frocks',
            'description' => 'linen dress expose zipper',
            'price' => 10
        ]);
        $Cproduct->save();

        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/gallery/01ac7e4b5d705fc38cfef4635b13e1473bd4b12e.jpg',
            'title' => 'shortyq',
            'description' => 'princess line shift linen dress',
            'price' => 20
        ]);
        $Cproduct->save();
        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/gallery/6c25cb3bab60fca0a6bf13feb67790c8f5657054.jpg',
            'title' => 'frocks',
            'description' => 'belleza midi length linen dress',
            'price' => 30
        ]);
        $Cproduct->save();
        $Cproduct = new \App\cproduct([
            'imagePath' => 'https://s3.ap-south-1.amazonaws.com/www.kellyfelder.com/product_categories/134ec9b9c4d795a0777104fe622464eb51e3cf01.jpg',
            'title' => 'frocks',
            'description' => 'Super cool - at least as a child',
            'price' => 10
        ]);
        $Cproduct->save(); 
    }
}
