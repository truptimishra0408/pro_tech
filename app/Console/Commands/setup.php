<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Equity;

class setup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'setup {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'initial script import';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $path = $this->argument('path');
        $file = file($path);
        foreach($file as $ky => $val)
        {
            if($ky!==0)
            {
                $rec = new Equity();
                $data = explode(",",$val);
                $rec->symbol = $data[0];
                $rec->name_of_company = $data[1];
                $rec->series = $data[2];
                $rec->date_of_listing = date('Y-m-d',strtotime($data[3]));
                $rec->paid_up_value = $data[4];
                $rec->market_lot = $data[5];
                $rec->isin_number = $data[6];
                $rec->face_value = $data[7];
                $rec->save();
            }
        }
        return Command::SUCCESS;
    }
}
