<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_id' => 'FU068',
            'item_name' => 'Furniture Meja Kursi Ban Mobil',
            'price' => '1500000',
            'description'=> 'Set Meja dan Kursi yang terbuat dari ban mobil bekas yang layak pakai, cocok untuk memberikan kesan rustic pada ruangan.',
            'image'=>'recycled-meja-ban-mobil.jpg',
            'category'=>'Recycled'
        ]);

        DB::table('items')->insert([
            'item_id' => 'AC006',
            'item_name' => 'Kotak Pensil Motif',
            'price' => '35000',
            'description'=> 'Tempat pensil dengan konsep Go-Green yang memanfaatkan plastik bekas yang telah diolah, sesuai untuk mengajari anak-anak mengenai recycle. ',
            'image'=>'recycled-kotak-pensil.png',
            'category'=>'Recycled'
        ]);

        DB::table('items')->insert([
            'item_id' => 'AP710',
            'item_name' => 'Mesin Jahit Brand Janome',
            'price' => '650000',
            'description'=> 'Mesin jahit refurbished (bekas dan diperbaiki) dengan dinamo untuk memaksimalkan efisiensi. Kondisi barang OK dan sudah diuji. ',
            'image'=>'second-mesin-jahit.png',
            'category'=>'Second'
        ]);

        DB::table('items')->insert([
            'item_id' => 'AC099',
            'item_name' => 'Boneka Pokemon Victini Ori',
            'price' => '380000',
            'description'=> 'Plushie Pokemon Takara Tomy (bukan KW) import Jepang. Kondisi preloved, sudah dicuci tangan. Ukuran 32cm.',
            'image'=>'second-plush.jpg',
            'category'=>'Second'
        ]);

        DB::table('items')->insert([
            'item_id' => 'AC031',
            'item_name' => 'Kalung Wooden Shards',
            'price' => '79000',
            'description'=> 'Kalung wanita design modern untuk penampilan yang alami, sesuai dipakai dengan batik atau pakaian bercorak khas.',
            'image'=>'recycled-kalung-kayu.jpg',
            'category'=>'Recycled'
        ]);

        DB::table('items')->insert([
            'item_id' => 'AP077',
            'item_name' => 'Spatula Kayu Go Green',
            'price' => '25000',
            'description'=> 'Spatula kayu yang terbuat dari 100% potongan kayu mahogani yang di daur ulang, sehingga tahan panas dan tahan bau.',
            'image'=>'recycled-spatula.jpg',
            'category'=>'Recycled'
        ]);
    }
}
