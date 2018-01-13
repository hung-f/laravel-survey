<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

// Reref link below
//https://dba.stackexchange.com/questions/16002/survey-database-design-associate-an-answer-to-a-user


class CreateSurveyTables extends Migration
{
    public function up(){

        /*
        $tableNames = config('survey.table_names');

        // Table Survey
        Schema::create($tableNames['survey'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->timestamps();
        });
        // 1 survey - many question
        // 1 question - many survey

        // Table Question
        Schema::create($tableNames['question'], function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_title');
            $table->string('question_text');
            $table->timestamps();
        });

        //$table->integer('user_id')->unsigned()->index();
        // $table->foreign('user_id')->references('id')->on('users');
        // Survey Question
        Schema::create($tableNames['survey_question'], function (Blueprint $table) {

            $table->increments('id');
            $table->integer('survey_id')->unsigned()->index();
            $table->integer('question_id')->unsigned()->index();
            $table->integer('question_no');

          //  $table->foreign('survey_id')->references('id')->on($tableNames['survey']);
          //  $table->foreign('question_id')->references('id')->on($tableNames['question']);
            $table->timestamps();
        });

        // Option
        Schema::create($tableNames['survey_option'], function (Blueprint $table) {
            $table->increments('id');
            $table->integer('question_id');
            $table->integer('option_no');
            $table->string('option_text');
            $table->timestamps();
        });

        // Answers
        Schema::create($tableNames['answer'], function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('question_id');
            $table->integer('option_no');
            $table->timestamps();
        });
        */

    }

    public function down(){
        /*
        $tableNames = config('survey.table_names');
        Schema::dropIfExists(tableNames['survey']);
        Schema::dropIfExists(tableNames['question']);
        Schema::dropIfExists(tableNames['survey_option']);
        Schema::dropIfExists(tableNames['answer']);
        Schema::dropIfExists(tableNames['survey_question']);

        */
    }

    
}