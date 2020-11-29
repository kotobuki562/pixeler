<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    // テーブルのクリア
    DB::table('books')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
        $books = [
                ['title' => 'PHP Book',
                'genre' => 'ビジネス',
                'impressions' => 'PHPER'],
                ['title' => 'Laravel Book',
                'genre' => '資格',
                'impressions' => null],
                ['title' => 'Ruby Book',
                'genre' => 'マーケティング',
                'impressions' => 'Rubyist']
                ];

        // 登録
        foreach($books as $book) {
        \App\Book::create($book);
        }
        $this->call(BooksTableSeeder::class);
    }
}
