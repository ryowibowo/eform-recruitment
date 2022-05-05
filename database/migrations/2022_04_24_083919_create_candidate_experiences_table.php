<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_experiences', function (Blueprint $table) {
            $table->string('id', 40)->primary()->index();
            $table->string('candidate_id', 40);
            $table->string('company_name');
            $table->string('posisition');
            $table->date('date_start');
            $table->date('date_end');
            $table->string('reason_leaving');
            $table->string('job_desc');
            $table->timestamps();
            $table->index(['id', 'candidate_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_experiences');
    }
}
