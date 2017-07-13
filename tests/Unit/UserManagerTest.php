<?php

namespace Tests\Unit;


use App\Manager\UserManager;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class UserManagerTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * @var \App\Manager\Contract\UserManager
     */
    private $manager;

    protected function setUp()
    {
        parent::setUp();
        $this->manager = $this->app->make(UserManager::class);
    }

    public function testCreate()
    {
        $this->manager->findAll();
    }
}