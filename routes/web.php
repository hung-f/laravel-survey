<?php

Route::get('survey/form', function(){
    return view('survey::form');
});

Route::get('survey/list', function(){
    return view('survey::list');
});


Route::get('survey/test', function(){
    return view('survey::test');
});