<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('t_2026_negros_oriental', function (Blueprint $table) {
            $table->id();
            $table->text('region')->nullable();
            $table->text('province')->nullable();
            $table->text('congressional_district')->nullable();
            $table->text('municipality')->nullable();
            $table->text('municipality_class')->nullable();
            $table->text('unique_instittution_identification')->nullable();
            $table->text('name_of_institution')->nullable();
            $table->text('formerly_name_of_tvi')->nullable();
            $table->text('name_of_institution_s_head')->nullable();
            $table->text('address')->nullable();
            $table->decimal('latitude_point', 12, 8)->nullable();
            $table->decimal('longitude_point', 12, 8)->nullable();
            $table->text('tel_no')->nullable();
            $table->text('e_mail_address')->nullable();
            $table->text('type_of_institution')->nullable();
            $table->text('classification_of_institution')->nullable();
            $table->text('status')->nullable();
            $table->text('sector')->nullable();
            $table->text('course_registered_program')->nullable();
            $table->text('pgf_level')->nullable();
            $table->text('duration')->nullable();
            $table->text('program_reg_no')->nullable();
            $table->dateTime('date_issued')->nullable();
            $table->dateTime('expiration_date')->nullable();
            $table->text('trainer')->nullable();
            $table->text('nttc')->nullable();
            $table->text('expiration_date_of_nttc')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('t_2026_negros_oriental');
    }
};