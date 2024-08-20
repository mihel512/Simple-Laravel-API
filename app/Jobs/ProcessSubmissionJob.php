<?php

namespace App\Jobs;

use App\Events\SubmissionSavedEvent;
use App\Models\Submission;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Log;

class ProcessSubmissionJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public array $payload)
    {
    }

    /**php artisan make:event
     * Execute the job.
     */
    public function handle(): void
    {

        try {
            Submission::create($this->payload);
        } catch (Exception $e) {
            Log::error('Error saving submission', [
                'message' => $e->getMessage(),
                'submission' => $this->payload,
                'error_trace' => $e->getTraceAsString(),
            ]);
        }
    }
}
