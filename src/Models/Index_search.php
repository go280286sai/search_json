<?php

namespace go280286sai\search_json\Models;

use go280286sai\search_json\CreateSearchJson;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index_search extends Model
{
    use HasFactory;

    /**
     * @param string $title
     * @return void
     */
    public static function add(string $title): void
    {
        $obj = new self();
        $obj->name = $title;
        $obj->save();
    }

    /**
     * @param string $title
     * @return void
     */
    public static function remove(string $title): void
    {
       self::where('name', $title)->delete();
    }

    public static function create_search()
    {
        $resources = self::all();
        foreach($resources as $resource){
            $title = "\App\Models\\".ucfirst($resource->name);
            $obj = $title::all();
            $obj = json_encode($obj);
            CreateSearchJson::create(ucfirst($resource->name), $obj);
    }
        dd($resources);
    }
}
