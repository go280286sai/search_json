<?php

namespace go280286sai\search_json\Http\Controllers;

use go280286sai\search_json\Models\Index_search;
use Illuminate\Http\Request;

class SearchJsonController extends Controller
{
    public function index()
    {

       Index_search::create_search();
        return 'ok';
    }
}
