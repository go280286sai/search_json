<?php

namespace go280286sai\search_json;

class CreateSearchJson
{
    private static ?object $instance = null;

    private function __construct()
    {

    }

    public static function instance(): object|null
    {
        if (self::$instance != null) {
            return self::$instance;
        } else {
            self::$instance = new self();
            return self::$instance;
        }
    }
    private function __clone(): void
    {
        // TODO: Implement __clone() method.
    }

    public static function create(string $name, string $text): void
    {
       $file = fopen(__DIR__.'/jsons/'.$name.'.json', 'w');
       fwrite($file, $text);
       fclose($file);
    }
}
