<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Seeder;

use App\Models\Population;

class PopulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Query to remove old data from populations table
        Population::truncate();

        //Get data from REST API
        $population = HTTP::get('https://datausa.io/api/data?drilldowns=Nation&measures=Population');
        $populationData = array_reverse($population['data']); //change order of the obtained data
        
        //Go through data obtained from the api and insert it into an array
        foreach($populationData AS $value){
            $data[] = array('id_nation' => $value['ID Nation'], 'nation' => $value['Nation'], 'id_year' => $value['ID Year'], 'year' => $value['Year'], 'population' => $value['Population'], 'slug_nation'=>  $value['Slug Nation']);
        }     

        //Query to insert all obteined data in population table
        Population::insert($data);
    }
}
