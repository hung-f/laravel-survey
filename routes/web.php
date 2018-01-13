<?php

Route::get('survey/form', function(){
    return view('surveys.form');
});

Route::get('survey/list', function(){
    return view('surveys.list');
});