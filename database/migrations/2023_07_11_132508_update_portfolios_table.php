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
        Schema::update('portfolios', function (Blueprint $table) {
            $table->foreignId('types_id')->nullable()->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down($table)
    {
        Schema::dropIfExists('portfolios');

        $table->dropForeign('portfolios_types_id_foreign');
        $table->dropColumn('types_id');
    }
};
