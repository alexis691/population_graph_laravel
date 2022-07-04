<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Population;

class PopulationController extends Controller
{   
    //Function to get all population data from DB
    public function populationData()
    {
        //Query to get all population data from population table
        $populationData = Population::all();

        $years = array(); $population = array(); $table = array();  //array declaration

        //Go through data obtained from DB and insert it into arrays
        foreach($populationData as $value){
            $years[] = $value['year'];
            $population[] = $value['population'];            
            $table[] = array('year' => $value['year'], 'population' => $value['population']);
        }

        //Render view and send the obtained data
        return view('charts.populationData', compact('table', 'years', 'population'));
    }
    
    //Function to get all population data from REST API
    public function fromApi()
    {
        //Get data from REST API
        $populationData = HTTP::get('https://datausa.io/api/data?drilldowns=Nation&measures=Population');
        $populationData = array_reverse($populationData['data']); //change order of the obtained data

        //Go through data obtained from the api and insert it into arrays
        foreach($populationData AS $value){
            $years[] = $value['Year'];
            $population[] = $value['Population'];
        }     

        //Render view and send the obtained data
        return view('charts.fromApi', compact('populationData', 'years', 'population'));
    }
    
}
