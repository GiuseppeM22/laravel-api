<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        $portfolio = Portfolio::paginate(3);
        $response = [
            "success" => true,
            "results" => $portfolio
        ];

        return response()->json($response);
        
    }
}
