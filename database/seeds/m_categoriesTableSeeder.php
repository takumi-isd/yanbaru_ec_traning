<?php

use Illuminate\Database\Seeder;

class m_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_categories')->insert([
            'category_name' => 'test',
        ]);
    }
}
