<?php //editで使用

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('name'); //人物めい
            $table->string('title');//作品名
            $table->string('body');//作品詳細
            $table->string('ans1');
            $table->string('ans2');
            $table->string('ans3');
            $table->string('ans4');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art');
    }
}
