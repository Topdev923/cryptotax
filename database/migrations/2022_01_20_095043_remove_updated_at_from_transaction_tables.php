<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up()
    {
        Schema::table('crypto_exchange_transactions', function (Blueprint $table) {
            $table->dropColumn("updated_at");
            $table->dropColumn("created_at");
        });
    }


    public function down()
    {
        Schema::table('crypto_exchange_transactions', function (Blueprint $table) {
            //
        });
    }
};
