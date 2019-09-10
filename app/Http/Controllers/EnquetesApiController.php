<?php

namespace App\Http\Controllers;

use App\Models\Enquetes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnquetesApiController extends Controller
{
    //Construtor
    public function __construct(Enquetes $enquete, Request $request)
    {
        $this->enquete = $enquete;
        $this->request = $request;
    }
    
    public function index()
    {
        $data = $this->enquete->all();
        return response()->json($data);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
