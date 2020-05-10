<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnEtudiantId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigInteger('etudiant_id')->default(1)->unsigned()->after('id');
            $table->foreign('etudiant_id')->references('id')->on('etudiants');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cvs', function (Blueprint $table) {
            $table->dropForeign(['etudiant_id']);
            $table->dropColumn('etudiant_id');
        });
    }
}
