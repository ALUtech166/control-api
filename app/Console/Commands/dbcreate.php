<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class dbcreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create [name?]';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a new MYSQL databese based on config file or the provided parameter';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $schemaName = $this->argument('name') ?: config('database.connections.mysql.database');

        $charset = config('database.connections.mysql.charset', 'utf8mb4');

        $collation = config('database.connections.mysql.collation', 'utf8mb4_general_ci');

        config(['database.connections.mysql.database' =>null]);

        $query = "DROP DATABASE $schemaName";
        DB::statement($query);

        $query = " CREATE DATABASE IF NO EXISTS $schemaName CHARACTER SET $charset COLLATE $collation;";
        DB::statement($query);

        echo " La base de donnée  $schemaName est crée avec succès";

        config(['database.connections.mysql.database' =>$schemaName]);
    }
}
