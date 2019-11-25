<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\project; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class ProjectController extends Controller
{
    function index(){
        // return project::all()->orderBy('id', 'asc');

        return project::select('*')
        ->orderBy('id', 'asc')
        ->get();

    }
}
