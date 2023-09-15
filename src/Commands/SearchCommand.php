<?php

namespace go280286sai\search_json\Commands;

use go280286sai\search_json\LogsSearchJson;
use go280286sai\search_json\Models\Index_search;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class SearchCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'search:add';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add name table for search';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        LogsSearchJson::instance();
        try {
            $title = $this->ask('Add table name for search');
            if(!is_null($title)){
                Index_search::add($title);
                LogsSearchJson::info('Add table name: '.$title.' of date:'.Carbon::now());
            } else{
                LogsSearchJson::info('Arg is empty of date:'.Carbon::now());
                throw new \Exception('Arg is empty');
            }

        } catch (\Exception $e){
            LogsSearchJson::info('Arg is empty of date:'.Carbon::now());
            $this->error($e->getMessage());
        }

    }
}
