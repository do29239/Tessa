<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use App\Mail\RequestStylistMail;
use App\Models\RequestStylist;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendAdminNewRequestEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $requestId;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

            Mail::to(config('mail.from.address'))->send(new RequestStylistMail($this->requestId));

    }
}
