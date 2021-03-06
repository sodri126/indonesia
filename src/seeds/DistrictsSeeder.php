<?php

namespace Laravolt\Indonesia\Seeds;

use Illuminate\Database\Seeder;

class DistrictsSeeder extends Seeder
{
    public function run()
    {
    	$Csv = new CsvtoArray;
        $file = __DIR__. '/../../resources/csv/districts.csv';
        $header = array('id', 'city_id', 'name');
        $data = $Csv->csv_to_array($file, $header);
        \DB::table(config('laravolt.indonesia.table_prefix') . 'districts')->insert($data);
    }
}
