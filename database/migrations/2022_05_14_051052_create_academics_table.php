<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\User::class, 'id');
            $table->string('university');
            $table->string('accreditation_university');
            $table->string('faculty');
            $table->string('study_program');
            $table->string('accreditation_study_program');
            $table->string('educational_degree');
            $table->string('semester');
            $table->string('ipk');
            $table->string('sks');
            $table->string('scan_transcript')->nullable();
            $table->string('scan_krs')->nullable();
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
        Schema::dropIfExists('academics');
    }
}
