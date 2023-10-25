<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mshop_emoji', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string( 'code' );
            $table->string( 'label' )->default( '' );
            $table->smallInteger( 'status' )->default( 1 );
            $table->index( ['status', 'code'], 'idx_msemoj_load' );
        });

        Schema::create('mshop_emoji_user_product_relations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string( 'product_id' );
            $table->integer( 'user_id' );
            $table->integer( 'emoji_id' );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mshop_emoji_user_product_relations');
        Schema::dropIfExists('mshop_emoji');
    }
};
