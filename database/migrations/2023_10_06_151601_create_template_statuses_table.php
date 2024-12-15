<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_statuses', function (Blueprint $table) {

            //1 template_status chỉ thuộc về 1 user
            $table->unsignedBigInteger('user_id');
            $table->string('template_name');
            //1 field để chứa các status của template_status (json) nó bao gồm các trường sau: name, color, order , is_open, is_closed, is_done
            $table->json('statuses');
            $table->softDeletes();
            $table->timestamps();

            //1 template_status chỉ thuộc về 1 user
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_statuses');
    }
}
