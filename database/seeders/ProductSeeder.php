<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert(
            [
                [
                    'name' => 'shoes 1',
                    'description' => 'Shoe no. 3',
                    'photo' => 'https://cdn.vox-cdn.com/thumbor/6_tZq0BoeaVG1_yVI1ly29bCMVE=/0x0:2048x1280/920x613/filters:focal(861x477:1187x803):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/69045732/Exbfpl2WgAAQkl8_resized.0.jpeg',
                    'category' => 'Fashion'
                ],
                [
                    'name' => 'shoes 2',
                    'description' => 'Shoe no. 1',
                    'photo' => 'https://res.cloudinary.com/atoms-shoes/image/upload/c_scale,w_1600,q_auto,f_auto/v1649178687/products/shoes/model000/black_and_white_000_side_profile_single_-_background_f2f2f2_-_compressed_ytztl9',
                    'category' => 'Fashion'
                ],
                [
                    'name' => 'shoes 3',
                    'description' => 'Shoe no. 13',
                    'photo' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/best-shoes-1610418585.jpg?crop=1.00xw:1.00xh;0,0&resize=980:*',
                    'category' => 'Fashion'
                ],

                [
                    'name' => 'umbrella 1',
                    'description' => 'Big sized umbrella',
                    'photo' => 'https://cna.st/p/2hc5hQAHwfj8VPYK7Qk9GwUbxRSgyWyQM4qy5vcfB6GUVPQqiaHQtUDJe5UdjDQhdfRv665eZ7M4AT7wU9imo73Jp6voeM2wgcpooUvnb8Z?cid=5eb31c8a6c0df3393bc20ee2',
                    'category' => 'Requirements'

                ],
                [
                    'name' => 'umbrella 2',
                    'description' => 'small sized umbrella',
                    'photo' => 'https://media.wired.com/photos/5eb9cfea2de599a4da36ef0e/master/w_1600%2Cc_limit/Gear-Davek-Solo-SOURCE-Davek.jpg',
                    'category' => 'Requirements'

                ],
                [
                    'name' => 'umbrella 3',
                    'description' => 'medium sized umbrella',
                    'photo' => 'https://media.wired.com/photos/5eb9d01c41093e9ce8dacabe/master/w_1600%2Cc_limit/Gear-Davek-Elite-SOURCE-Davek.jpg',
                    'category' => 'Requirements'

                ]
            ]
        );
    }
}
