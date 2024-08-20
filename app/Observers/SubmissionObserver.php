<?php

namespace App\Observers;

use App\Events\SubmissionSavedEvent;
use App\Models\Submission;

class SubmissionObserver
{
    public function created(Submission $submission): void
    {
        event(new SubmissionSavedEvent($submission));
    }
}
