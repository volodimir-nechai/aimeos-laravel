<?php
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmojiSeeder extends Seeder
{
    public function run()
    {
        DB::table('mshop_emoji')->truncate();

        DB::table('mshop_emoji')->insert([
            [
                'code' => 'U+1F642',
                'label'  => '5',
                'status'  => '1',
            ],
            [
                'code' => 'U+1F610',
                'label'  => '4',
                'status'  => '1',
            ],            [
                'code' => 'U+1F612',
                'label'  => '3',
                'status'  => '1',
            ],            [
                'code' => 'U+1F613',
                'label'  => '2',
                'status'  => '0',
            ],            [
                'code' => 'U+1F62C',
                'label'  => '1',
                'status'  => '1',
            ],
        ]);

        DB::table('mshop_emoji_user_product_relations')->truncate();

        DB::table('mshop_emoji_user_product_relations')->insert([
            [
                'product_id' => '15',
                'user_id'  => '1',
                'emoji_id'  => '1',
            ],
            [
                'product_id' => '2',
                'user_id'  => '1',
                'emoji_id'  => '2',
            ],
            [
                'product_id' => '15',
                'user_id'  => '2',
                'emoji_id'  => '2',
            ],
            [
                'product_id' => '15',
                'user_id'  => '3',
                'emoji_id'  => '1',
            ],
            [
                'product_id' => '15',
                'user_id'  => '4',
                'emoji_id'  => '1',
            ],
            [
                'product_id' => '15',
                'user_id'  => '5',
                'emoji_id'  => '1',
            ],
            [
                'product_id' => '15',
                'user_id'  => '6',
                'emoji_id'  => '3',
            ],
            [
                'product_id' => '15',
                'user_id'  => '6',
                'emoji_id'  => '3',
            ],
            [
                'product_id' => '15',
                'user_id'  => '7',
                'emoji_id'  => '3',
            ],
        ]);
    }
}
