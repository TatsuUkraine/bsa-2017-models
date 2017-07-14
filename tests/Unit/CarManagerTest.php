<?php

namespace Tests\Unit;


use App\Car;
use App\Manager\CarManager;
use App\Manager\UserManager;
use App\Request\SaveCarRequest;
use App\Request\SaveUserRequest;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class CarManagerTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * @var \App\Manager\Contract\CarManager
     */
    private $manager;

    /**
     * @var \App\Manager\Contract\UserManager
     */
    private $userManager;

    protected function setUp()
    {
        parent::setUp();
        $this->manager = $this->app->make(CarManager::class);
        $this->userManager = $this->app->make(UserManager::class);
    }

    public function testCreate()
    {
        $user = $this->createUser();

        $data = [
            'registration_number' => 'MB123456',
            'model' => 'Toyota',
            'color' => 'FFF'
        ];

        $request = new SaveCarRequest($data, $user);
        $car = $this->manager->saveCar($request);

        $this->assertInstanceOf(Car::class, $car);
        $this->assertArraySubset($data, $car->toArray());
        $this->assertEquals($user->toArray(), $car->user->toArray());
    }

    public function testCollection()
    {
        $user1 = $this->createUser();
        $user2 = $this->createUser(false);

        $request = new SaveCarRequest([
            'registration_number' => 'MB123456',
            'model' => 'Toyota',
            'color' => 'FFF'
        ], $user1);
        $car1 = $this->manager->saveCar($request);

        $request = new SaveCarRequest([
            'registration_number' => 'AB123456',
            'model' => 'Honda',
            'color' => '000'
        ], $user2);

        $car2 = $this->manager->saveCar($request);

        $carList = $this->manager->findAll()->toArray();

        $this->assertContains($car1->toArray(), $carList);
        $this->assertContains($car2->toArray(), $carList);
    }

    public function testFindById()
    {
        $user = $this->createUser();
        $request = new SaveCarRequest([
            'registration_number' => 'MB123456',
            'model' => 'Toyota',
            'color' => 'FFF'
        ], $user);
        $car = $this->manager->saveCar($request);

        $carResult = $this->manager->findById($car->id);
        $this->assertEquals($car->toArray(), $carResult->toArray());
    }

    public function testFindCarsByActiveUser()
    {
        $user1 = $this->createUser();
        $user2 = $this->createUser(false);

        $request = new SaveCarRequest([
            'registration_number' => 'MB123456',
            'model' => 'Toyota',
            'color' => 'FFF'
        ], $user1);
        $car1 = $this->manager->saveCar($request);

        $request = new SaveCarRequest([
            'registration_number' => 'AB123456',
            'model' => 'Honda',
            'color' => '000'
        ], $user2);

        $car2 = $this->manager->saveCar($request);

        $carList = $this->manager->findCarsFromActiveUsers()->toArray();

        $this->assertContains($car1->toArray(), $carList);
        $this->assertNotContains($car2->toArray(), $carList);
    }

    protected function createUser(bool $isActive = true): User
    {
        $request = new SaveUserRequest([
            'first_name' => 'Firstname',
            'last_name' => 'Lastname',
            'is_active' => $isActive
        ]);
        return $this->userManager->saveUser($request);
    }
}