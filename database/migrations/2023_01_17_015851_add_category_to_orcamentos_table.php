<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orcamentos', function (Blueprint $table) {
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('produto');
            $table->integer('comprimento');
            $table->integer('largura');
            $table->integer('espessura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orcamentos', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('email')->unique();
            $table->dropColumn('email_verified_at')->nullable();
            $table->dropColumn('produto');
            $table->dropColumn('comprimento');
            $table->dropColumn('largura');
            $table->dropColumn('espessura');
        });
    }
};
