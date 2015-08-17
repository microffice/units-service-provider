<?php namespace Microffice\UnitsServiceProvider\Tests;

class UnitsServiceProviderTest extends UnitsServiceProviderBaseTest {
    
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();

        $this->unitHandler = 'Microffice\UnitsServiceProvider\Tests\Stubs\StubEloquentUnitHandler';
        \Config::set('units.handler', $this->unitHandler);
    }

    /**
     * Test Unit Facade Index().
     *
     * @test
     */
    public function testUnitFacadeIndex()
    {
        $this->assertInstanceOf($this->unitHandler, \Unit::index());
    }

    /**
     * Test Unit Facade Index().
     *
     * @test
     */
    public function testResolvingUnitHandlerIndex()
    {
        $unitHandler = $this->app->make('Microffice\Contracts\Units\Unit');
        $this->assertInstanceOf($this->unitHandler, $unitHandler);
    }
}
