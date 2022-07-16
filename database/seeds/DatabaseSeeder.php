<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('CreateArtTable')->insert([
            'image' => '/images.1/Irenu',
            'name' => 'ピエール＝オーギュスト・ルノワール', //人物めい
            'title' => 'イレーヌ・カーン・ダンヴェール嬢',//作品名
            'body' => '印象派の絵画のうち、最も美しい肖像画の一枚とも称される作品。1880年の夏に、パリのユダヤ人銀行家であるカーン・ダンヴェール家（フランス語版）の庭で描かれた。描かれている少女は、ベルギーのアントワープ出身のルイ・カーン・ダンヴェール（フランス語版）伯爵の長女イレーヌ(1872-1963)であり、当時8歳である。',//作品詳細
            'ans1' => 'フィンセント・ファン・ゴッホ',
            'ans2' => 'レオナルド・ダ・ヴィンチ',
            'ans3' => 'アンリ・ルソー',
            'ans4' => 'ピエール＝オーギュスト・ルノワール',
            'created_at' => new DataTime(),
            
           ]);
    }
}
