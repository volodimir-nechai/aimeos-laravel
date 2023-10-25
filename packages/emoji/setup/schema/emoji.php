<?php

/**
 * @license LGPLv3, https://opensource.org/licenses/LGPL-3.0
 * @copyright Aimeos (aimeos.org), 2016-2023
 */


return array(
    'table' => array(

        'mshop_emoji' => function( \Aimeos\Upscheme\Schema\Table $table ) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string( 'code' );
            $table->string( 'label' )->default( '' );
            $table->smallInteger( 'status' )->default( 1 );
            $table->index( ['status', 'code'], 'idx_msemoj_load' );
        },

        'mshop_emoji_user_product_relation' => function( \Aimeos\Upscheme\Schema\Table $table ) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string( 'product_id' );
            $table->integer( 'user_id' );
            $table->integer( 'emoji_id' );
        },
    )
);
