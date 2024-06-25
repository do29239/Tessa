<?php
namespace App\Listeners;

namespace App\Listeners;

use Illuminate\Queue\Events\JobFailed;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class JobFailedListener
{
    /**
     * Handle the event.
     *
     * @param  \Illuminate\Queue\Events\JobFailed  $event
     * @return void
     */
    public function handle(JobFailed $event)
    {
        $jobName = $event->job->resolveName();
        $exceptionMessage = $event->exception->getMessage();

        // Log the error
        Log::error("Job failed: {$jobName} - {$exceptionMessage}");

        // Save the failure notification in the session
        Session::flash('job_failure', "Job '{$jobName}' has failed with error: {$exceptionMessage}");
    }
}
