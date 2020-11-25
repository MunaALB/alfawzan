<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category =  new Category;
        $category->title = "عناية بالبشرة";
        $category->save();

        $category =  new Category;
        $category->title = "عناية بالشعر";
        $category->save();

        $category =  new Category;
        $category->title = "اطفال ";
        $category->save();

    }
}
