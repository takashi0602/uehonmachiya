<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categorise_id = [
        1, 1, 1, 1, 1, 3, 3, 3, 3, 2, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 3, 3, 3, 3
      ];
      $suppliers_id = [
        1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3, 1, 2, 3
      ];
      $isbn = [
        '4101025010', '4167907828', '4043721013', '4041059356', '4094088962',
        null, null, '4592190815', null, '4041371570',
        null, null, '4492045910', '4915512398', '4915512398',
        '4915512401', '4915512452', '4915512452', '4915512517', '4915512517',
        '4915512576', '4915512576', '4915512630', '4915512630', '4777127206',
        '4088725093', '4088728408', '4088518314', '4088802640', '4088736230',
      ];
      $name = [
        '羅生門', '火花', 'バッテリー','幻夏','下町ロケット','キングダム','テラフォーマーズ','暁のヨナ',
        '監獄学園','個人的な雑誌','俳句25年','日経ウーマン2018年','僕らが毎日やっている最強の読み方',
        'ハリー・ポッターと賢者の石','ハリー・ポッターと秘密の部屋','ハリー・ポッターとアズカバンの囚人',
        'ハリー・ポッターと炎のゴブレット㊤', 'ハリー・ポッターと炎のゴブレット㊦','ハリー・ポッターと不死鳥の騎士団㊤',
        'ハリー・ポッターと不死鳥の騎士団㊦','ハリー・ポッターと謎のプリンス㊤','ハリー・ポッターと謎のプリンス㊦',
        'ハリー・ポッターと死の秘宝㊤','ハリー・ポッターと死の秘宝㊦','ブラックジャックによろしく','ONE PIECE',
        'NARUTO','DRAGON BALL','僕のヒーローアカデミア','銀魂'
      ];
      $author = [
        '芥川龍之介', '又吉直樹', 'あさのあつこ','太田愛','池井戸潤','原泰久','貴家悠&橘賢一','草凪みずほ',
        '平本アキラ','片岡義男','西村和子','日経ウーマン','池上彰&佐藤優','J.Kローリング','J.Kローリング',
        'J.Kローリング','J.Kローリング','J.Kローリング','J.Kローリング','J.Kローリング','J.Kローリング',
        'J.Kローリング','J.Kローリング','J.Kローリング','佐藤秀峰','尾田栄一郎','岸本斉史','鳥山明',
        '堀越耕平','空知英秋'
      ];
      $img = [
        'book1.jpg', 'book2.jpg', 'book3.jpg','book4.jpg',
        'book5.jpg', 'book6.jpg','book7.jpg','book8.jpg',
        'book9.jpg', 'book10.jpg','book11.jpg','book12.jpg',
        'book13.jpg', 'book14.jpg','book15.jpg','book_black.png',
        'book_blue.png','book_green.png','book_orange.png','book_purple.png',
        'book_red.png','book_white.png','book_yellow.png','book_black.png',
        'book_blue.png','book_green.png','book_orange.png','book_purple.png',
        'book_red.png','book_white.png',
      ];
      $description = [
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
        'これは説明文です。',
      ];
      $company = [
        '新潮社', '文藝春秋', '角川書店','角川文庫','小学館文庫','集英社','集英社','白泉社','講談社',
        '講談社','角川学芸出版','日経ウーマン編集部','東洋経済','静山社','静山社','静山社','静山社',
        '静山社','静山社','静山社','静山社','静山社','静山社','静山社','講談社','集英社','集英社',
        '集英社','集英社','集英社'
      ];
      $price = [
        100, 200, 150, 250, 100, 150, 150, 100, 170, 50, 150, 140, 300, 250, 250, 250, 250, 250, 250, 250,
        250, 250, 250, 250, 50, 100, 100, 100, 100, 100
      ];
      $sales_price = [
        500, 1000, 600, 800, 1500,
          560, 560, 440, 620, 300,
          670, 600, 1500, 1200, 1200,
          1200, 1200, 1200, 1200, 1200,
        1200, 1200, 1200, 1200, 330,
          410, 410, 540, 460, 460
      ];

        for($i = 0; $i < 30; $i++){
            DB::table('products')->insert([
              'category_id' => $categorise_id[$i],
              'supplier_id' => $suppliers_id[$i],
              'isbn' => $isbn[$i],
              'name' => $name[$i],
              'author' => $author[$i],
              'img' => $img[$i],
              'description' => $description[$i],
              'company' => $company[$i],
              'price' => $price[$i],
              'sales_price' => $sales_price[$i],
              'created_at' => new DateTime(),
              'updated_at' => new DateTime()
            ]);
        }

    }
}
