<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoginlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('loglogin.table_name'), function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');

            $table->string('ip_address');

            if (config('loglogin.login_request_url')) {
                $table->string('login_request_url');
            }
            if (config('loglogin.locale')) {
                $table->string('locale');
            }
            if (config('loglogin.user_agent')) {
                $table->text('login_request_url');
            }

            $table->timestamp('logged_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('loglogin.table_name'));
    }
}
