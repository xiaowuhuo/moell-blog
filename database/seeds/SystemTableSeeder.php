<?php

use Illuminate\Database\Seeder;

class SystemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $systems = [
            ['key' => 'blog_name', 'value' => 'My Blog'],
            ['key' => 'motto', '欢迎使用My Blog,欢迎Star。']
        ];
        DB::table('systems')->insert($systems);
    }
}
