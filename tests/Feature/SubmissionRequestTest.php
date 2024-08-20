<?php

namespace Tests\Feature;

use App\Http\Requests\SubmissionRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Tests\TestCase;

class SubmissionRequestTest extends TestCase
{
    use RefreshDatabase;

    public function testItValidatesRequiredFields(): void
    {
        $data = [];

        $validator = Validator::make($data, (new SubmissionRequest())->rules());

        $this->assertFalse($validator->passes());
        $this->assertArrayHasKey('name', $validator->errors()->toArray());
        $this->assertArrayHasKey('email', $validator->errors()->toArray());
        $this->assertArrayHasKey('message', $validator->errors()->toArray());
    }

    public function testItPassesValidationWithValidData(): void
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a valid message.',
        ];

        $validator = Validator::make($data, (new SubmissionRequest())->rules());

        $this->assertTrue($validator->passes());
    }

    public function testItFailsValidationWithInvalidEmail(): void
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'not-an-email',
            'message' => 'This is a valid message.',
        ];

        $validator = Validator::make($data, (new SubmissionRequest())->rules());

        $this->assertFalse($validator->passes());
        $this->assertArrayHasKey('email', $validator->errors()->toArray());
    }}
