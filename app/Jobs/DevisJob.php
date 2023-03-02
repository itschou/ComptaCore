<?php

namespace App\Jobs;

use App\Mail\DevisMail;
use App\Models\Supplier;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class DevisJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(public $suppliers, public $category, public $quantity)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {

        $suppliers = $this->suppliers;
        $category = $this->category;
        $quantity = $this->quantity;
        foreach ($suppliers as $supplier) {
            Mail::to($supplier->email)->send(new DevisMail($supplier->email, $category, $quantity));
        }
    }
}
