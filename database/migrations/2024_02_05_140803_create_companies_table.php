<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained(); // Assumes the default 'id' column in the 'countries' table
            $table->string('company_code')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('commercial_record_number')->unique();
            $table->string('commercial_record_image'); // You may want to use a file storage system for images
            $table->string('logo'); // You may want to use a file storage system for images
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
