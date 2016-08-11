<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $categories = ["Atrakcje turystyczne", "Audyty oprogramowania i sprzętu komputerowego",
            "Renowacja mebli", "Serwis urządzeń chłodniczych"];

        $num = count($categories);

        for ($i = 0; $i < $num; $i++) {
            DB::table('categories')->insert([
                'name' => $categories[$i]
            ]);
        }
    }

}
