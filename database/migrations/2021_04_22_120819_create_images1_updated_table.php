<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImages1UpdatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('images1_updated', function (Blueprint $table) {
           // $table->id();
           // $table->timestamps();
             $table->string('title')->collation('utf8mb4_general_ci');
            $table->string('status')->collation('utf8mb4_general_ci');
            
        });
        }       
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images1_updated');
    }
}
