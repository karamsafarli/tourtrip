<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquiriesTable extends Migration
{
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->date('startDate');
            $table->integer('duration');
            $table->integer('adults');
            $table->integer('children')->nullable();
            $table->string('pickupCity');
            $table->string('dropCity');
            $table->json('accommodationType')->nullable();
            $table->string('interestedIn');
            $table->integer('budget');
            $table->text('comments')->nullable();
            $table->string('fullName');
            $table->string('email');
            $table->string('whatsappNumber');
            $table->string('city');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
}
