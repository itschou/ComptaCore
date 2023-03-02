<?php

namespace App\Http\Controllers;

use App\Jobs\DevisJob;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DevisController extends Controller
{
    public function filterJob()
    {
        //traitement

        //Get category from view by his name
        // $category = $request->category;

        //Stock Suppliers has category search
        // $suppliers = Supplier::where('category', $category)->get();

        // return $suppliers;

    }


    public function addJob(Request $request)
    {
        //Appel du filtre
        //Ajout au job

        //Get category and quantity from view by his name
        $category = $request->category;
        $quantity = $request->quantity;

        //Stock Suppliers has category search
        $suppliers = Supplier::where('category', '=' ,$category)->get();

        DevisJob::dispatch($suppliers, $category, $quantity);

        return to_route('index');
    }


    public function sendJobs(){
        Artisan::call('queue:work --stop-when-empty');
        return view('succes');
    }
}
