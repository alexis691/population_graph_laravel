<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Population;

class PopulationController extends Controller
{   
    public function populationData()
    {
        //Query to get all population data from population table
        $populationData = Population::all();

        //Go through data obtained from DB and insert it into arrays
        foreach($populationData as $value){
            $years[] = $value['year'];
            $population[] = $value['population'];            
            $table[] = array('year' => $value['year'], 'population' => $value['population']);
        }

        //Render view and send the obtained data
        return view('charts.populationData', compact('table', 'years', 'population'));
    }
    
    
}
