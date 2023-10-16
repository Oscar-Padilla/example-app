<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('program_id');
            $table->foreign('program_id')
                ->references('id')->on('programs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     * 
     */
    public function down()
    {
        Schema::table('students',function (Blueprint $table)
        {
            $table->dropForeign('students_program_id_foreign');
            $table->dropColumn('program_id');
        });
    }
};
