<?php

namespace Vam\Survey\Facades;
use Illuminate\Support\Facades\Facade;

class Survey extends Facade{
    protected static function getFacadeAccessor(){
        return 'vam-survey';
    }
}