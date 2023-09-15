<?php

namespace Go280286sai\JsonDb\Test;

use go280286sai\search_json\LogsSearchJson;
use PHPUnit\Framework\TestCase;


class ExampleServiceTest extends TestCase
{
    /**
     * @test
     */
    public function it_gets_some_result()
    {
        LogsSearchJson::info('hello');
        $obj = file_get_contents('./../src/logs/InfoLog.txt');
        $this->assertEquals('hello', $obj);
    }
}
