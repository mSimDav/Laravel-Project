<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateImagesProcedure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::unprepared('CREATE PROCEDURE UpdateImages(IN strId int,
        IN strNume varchar(1000),
        IN strDescriere varchar(1000),
        IN strImagine varchar(1000)
        ) 
                        BEGIN 
                        UPDATE images SET title=strNume, description=strDescriere, name=strImagine WHERE id=strId;
                        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         DB::unprepared('DROP PROCEDURE IF EXISTS UpdateImages');
    }
}
