<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->collation('utf8mb4_general_ci');
            $table->string('name')->collation('utf8mb4_general_ci');
            $table->string('description')->collation('utf8mb4_general_ci');
            $table->string('size')->collation('utf8mb4_general_ci');
            $table->string('type')->collation('utf8mb4_general_ci');
            $table->timestamps();
        });
        DB::unprepared("CREATE PROCEDURE InsertImages(IN var_title varchar(255), IN var_name varchar(255), IN var_description varchar(255), IN var_size varchar(255), IN var_type varchar(255))
                        BEGIN
                        INSERT INTO images(title,name,description,size,type) VALUES(var_title,var_name,var_description,var_size,var_type);
                        END;");
        DB::unprepared('CREATE PROCEDURE GetImages() 
                        BEGIN 
                        SELECT * FROM images; 
                        END');
        DB::unprepared('CREATE PROCEDURE GetImage(IN var_title varchar(255)) 
                        BEGIN 
                        SELECT * FROM images WHERE title=var_title; 
                        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
         DB::unprepared('DROP PROCEDURE IF EXISTS GetImages');
          DB::unprepared('DROP PROCEDURE IF EXISTS GetImage');
          DB::unprepared('DROP PROCEDURE IF EXISTS InsertImages');
       
    }
}
