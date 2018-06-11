<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $path = resource_path().'/assets/data/datas.csv';
        $reader = Reader::createFromPath($path, 'r');

        $records = $reader->getRecords(['name', 'job', 'phone', 'mail', 'adress',
                            'postalcode', 'town', 'biography', ]);
        foreach ($records as $offset => $record) {
            var_export($record);

            DB::table('p_user')->insert([
                'name' => $record['name'],
                'job' => $record['job'],
                'phone' => $record['phone'],
                'mail' => $record['mail'],
                'adress' => $record['adress'],
                'postalcode' => $record['postalcode'],
                'town' => $record['town'],
                'biography' => $record['biography'],
            ]);
        }
    }
}
