<?php

namespace Tests\Unit;

use App\Models\Submission;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function testCanCreateSubmission(): void
    {
        $this->assertTrue(Schema::hasTable('submissions'));

        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.',
        ];

        $submission = Submission::create($data);

        $this->assertEquals('John Doe', $submission->name);
        $this->assertEquals('john.doe@example.com', $submission->email);
        $this->assertEquals('This is a test message.', $submission->message);
    }
}
