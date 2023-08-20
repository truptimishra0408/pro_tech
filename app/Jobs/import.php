<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Equity;

class import implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $path;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $file = file($this->path);
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
    }
}
