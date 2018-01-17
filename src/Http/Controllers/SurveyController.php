<?php
namespace Vam\Survey\Http\Controllers;
use Vam\Survey\Facades\Survey;
class SurveyController extends Controller{

    public function form(){
        return view('survey::form');
    }

    public function list(){
        return view('survey::list');
    }
}

