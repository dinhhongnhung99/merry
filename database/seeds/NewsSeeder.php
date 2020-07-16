<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => 'Tin số 1',
            'preview'   => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'detail'    => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
            'thumbnail' => 'tin-tuc.jpg'
        ]);

        DB::table('news')->insert([
            'title' => 'Tin số 1',
            'preview'   => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'detail'    => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
            'thumbnail' => 'tin-tuc.jpg'
        ]);

        DB::table('news')->insert([
            'title' => 'Tin số 1',
            'preview'   => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'detail'    => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
            'thumbnail' => 'tin-tuc.jpg'
        ]);

        DB::table('news')->insert([
            'title' => 'Tin số 1',
            'preview'   => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'detail'    => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
            'thumbnail' => 'tin-tuc.jpg'
        ]);

        DB::table('news')->insert([
            'title' => 'Tin số 1',
            'preview'   => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
            'detail'    => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.',
            'thumbnail' => 'tin-tuc.jpg'
        ]);
    }
}
