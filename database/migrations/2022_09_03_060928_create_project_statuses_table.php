<?php

use App\Models\ProjectStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectStatusesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_statuses', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('status_type')->default(ProjectStatus::CUSTOM);
            $table->boolean('is_active')->default(false);
            $table->integer('order');
            $table->string('name_status');
            $table->string('color');
            $table->boolean('is_completed')->default(false);
            //modify by
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_statuses');
    }
}
