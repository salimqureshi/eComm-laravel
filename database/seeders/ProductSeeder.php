<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
            'name' => 'One Plus Mobile',
            'price' => '30000',
            'description' => 'Smart phone with 10 GB',
            'category' => 'mobile',            
            'gallery' => 'https://sites.google.com/a/tipsandshare.com/blogs/_/rsrc/1583118570330/b81ff777-9bab-41ca-898f-851a20e7e903.jpg'
        ],
        [
            'name' => 'Samsung Mobile',
            'price' => '15000',
            'description' => 'Smart phone with 15 GB',
            'category' => 'mobile',            
            'gallery' => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bW9iaWxlJTIwcGhvbmV8ZW58MHx8MHx8&w=1000&q=80'
        ],
        [
            'name' => 'Oppo Mobile',
            'price' => '8000',
            'description' => 'Smart phone with 20 GB',
            'category' => 'mobile',            
            'gallery' => 'https://thumbs.dreamstime.com/b/golden-iphone-plus-koszalin-poland-september-devices-displaying-applications-home-screen-smart-78022038.jpg'
        ],
        [
            'name' => 'Nokia Mobile',
            'price' => '20000',
            'description' => 'Smart phone with 30 GB',
            'category' => 'mobile',            
            'gallery' => 'https://thumbs.dreamstime.com/z/pink-iphone-se-koszalin-poland-%C3%A2%E2%82%AC-july-devices-displaying-applications-home-screen-smart-phone-74386411.jpg'
        ]
        ]);
    }
}
