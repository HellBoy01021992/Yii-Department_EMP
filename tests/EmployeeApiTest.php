<?php

namespace tests;

use Codeception\Util\HttpCode;

class EmployeeApiTest extends \Codeception\Test\Unit
{
    /**
     * @var \ApiTester
     */
    protected $tester;

    public function testGetEmployees()
    {
        $this->tester->sendGET('/api/employees');
        $this->tester->seeResponseCodeIs(HttpCode::OK);
        $this->tester->seeResponseIsJson();
    }

    public function testCreateEmployee()
    {
        $this->tester->sendPOST('/api/employees', [
            'department_id' => 1,
            'name' => 'John Doe',
            'contact_numbers' => ['1234567890', '0987654321'],
            'addresses' => ['Address 1', 'Address 2'],
        ]);
        $this->tester->seeResponseCodeIs(HttpCode::CREATED);
        $this->tester->seeResponseIsJson();
        $this->tester->seeResponseContainsJson([
            'name' => 'John Doe',
        ]);
    }

    // Add more test methods for other API endpoints (edit, view, delete, search) here...
}
