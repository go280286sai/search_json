<?php

namespace go280286sai\search_json;

class LogsSearchJson
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

    public static function info(string $text): void
    {
       $file = fopen(__DIR__.'/logs/InfoLog.txt', 'a+');
       fwrite($file, $text);
       fclose($file);
    }
    public static function error(string $text): void
    {
        $file = fopen(__DIR__.'/logs/ErrorLog.txt', 'a+');
        fwrite($file, $text);
        fclose($file);
    }
}
