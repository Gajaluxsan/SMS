<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewAdmissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('NIC')->unique();
            $table->string('Address');
            $table->bigInteger('Phone_Number');
            $table->date('DOB');
            $table->string('Gender');
            $table->string('Email_Id');
            $table->string('Password');
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
        Schema::dropIfExists('new_admissions');
    }
}
