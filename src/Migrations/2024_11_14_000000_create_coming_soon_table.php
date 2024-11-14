<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComingSoonTable extends Migration
{
    public function up()
    {
        Schema::create('coming_soons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('image')->nullable();
            $table->text('message')->nullable();
            $table->text('allowed_ip')->nullable();
            $table->boolean('state')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coming_soon');
    }
}
