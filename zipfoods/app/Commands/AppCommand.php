<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function migrate()
    {
        // ... Do stuff later
        # Note that the *createTable* method automatically adds an auto-incrementing 
        # primary key column named `id` so you don’t have to include that in your array of columns.
        $this->app->db()->createTable('products', [
            'name' => 'varchar(255)',
            'sku' => 'varchar(255)',
            'description' => 'text',
            'price' => 'decimal(10,2)',
            'available' => 'int',
            'weight' => 'decimal(10,2)',
            'perishable' => 'tinyint(1)'
        ]);

        $this->app->db()->createTable('reviews', [
            'product_id' => 'int',
            'name' => 'varchar(255)',
            'review' => 'text',
        ]);

        dump('Migration complete; check the database for your new tables.');
    }

}