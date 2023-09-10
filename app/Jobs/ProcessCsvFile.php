<?php

namespace App\Jobs;

use App\Models\Sales;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessCsvFile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $data;
    private $header;
    /**
     * Create a new job instance.
     */
    public function __construct($header, $data)
    {
        $this->header = $header;
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->data as $data) {
            $saleData = array_combine($this->header, $data);
            Sales::create($saleData);
        }
    }
}
