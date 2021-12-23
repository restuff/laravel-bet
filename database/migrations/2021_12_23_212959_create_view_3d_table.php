<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateView3dTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view_3d', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->integer('id', true)->startingValue(10835);
            $table->date('date')->index('date');
            $table->integer('playerid')->unsigned()->index('playerid');
            $table->integer('agentid')->unsigned()->index('agentid');
            $table->char('currency', 3);
            $table->decimal('bet', 10, 2)->nullable();
            $table->decimal('win', 10, 2)->nullable();
            $table->decimal('rake', 10, 2)->nullable();
            $table->decimal('tournament', 10, 2)->nullable();
            $table->decimal('net', 10, 2);
            $table->decimal('fin', 10, 2)->nullable();
            $table->string('aams_ticket', 40);
            $table->string('aams_table', 40);
        });

        DB::table('view_3d')->insert([
            'id' => 1,
            'date' => '2012-10-31',
            'playerid' => '44426',
            'agentid' => '871',
            'currency' => 'EUR',
            'bet' => '0.86',
            'win' => '1.45',
            'rake' => '0.03',
            'tournament' => '0.00',
            'net' => '0.03',
            'fin' => '0.00',
            'aams_ticket' => '',
            'aams_table' => '',
        ]);

        DB::table('view_3d')->insert([
            'id' => 2,
            'date' => '2012-10-31',
            'playerid' => '44425',
            'agentid' => '871',
            'currency' => 'EUR',
            'bet' => '1.62',
            'win' => '0.04',
            'rake' => '0.07',
            'tournament' => '0.00',
            'net' => '0.07',
            'fin' => '0.00',
            'aams_ticket' => '',
            'aams_table' => '',
        ]);

        DB::table('view_3d')->insert([
            'id' => 3,
            'date' => '2012-10-31',
            'playerid' => '44424',
            'agentid' => '871',
            'currency' => 'EUR',
            'bet' => '4.64',
            'win' => '2.64',
            'rake' => '0.22',
            'tournament' => '0.00',
            'net' => '0.22',
            'fin' => '0.00',
            'aams_ticket' => '',
            'aams_table' => '',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view_3d');
    }
}