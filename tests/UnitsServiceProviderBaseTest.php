<?php namespace Microffice\UnitsServiceProvider\Tests;
use \Orchestra\Testbench\TestCase;

class UnitsServiceProviderBaseTest extends TestCase {
    
    /**
     * Setup the test environment.
     */
    public function setUp()
    {
        parent::setUp();
    }
    
    /**
     * Tear the test environment down.
     */
    public function tearDown()
    {
        parent::tearDown();
    }

    /**
     * Get package providers.  At a minimum this is the package being tested, but also
     * would include packages upon which our package depends, e.g. Cartalyst/Sentry
     * In a normal app environment these would be added to the 'providers' array in
     * the config/app.php file.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            //'Cartalyst\Sentry\SentryServiceProvider',
            //'YourProject\YourPackage\YourPackageServiceProvider',
            'Microffice\Units\UnitServiceProvider',
        ];
    }

    /**
     * Get package aliases.  In a normal app environment these would be added to
     * the 'aliases' array in the config/app.php file.  If your package exposes an
     * aliased facade, you should add the alias here, along with aliases for
     * facades upon which your package depends, e.g. Cartalyst/Sentry.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            //'Sentry'      => 'Cartalyst\Sentry\Facades\Laravel\Sentry',
            //'YourPackage' => 'YourProject\YourPackage\Facades\YourPackage',
            'Unit' => 'Microffice\Units\Unit'
        ];
    }

    /**
    * getPrivateMethod
    *
    * @author Joe Sexton <joe@webtipblog.com>
    * @param string $className
    * @param string $methodName
    * @return ReflectionMethod
    */
    public function getPrivateMethod( $className, $methodName ) {
        $reflector = new \ReflectionClass( $className );
        $method = $reflector->getMethod( $methodName );
        $method->setAccessible( true );
         
        return $method;
    }

    /**
    * getPrivateProperty
    *
    * @author Joe Sexton <joe@webtipblog.com>
    * @param string $className
    * @param string $propertyName
    * @return ReflectionProperty
    */
    public function getPrivateProperty( $className, $propertyName ) {
        $reflector = new \ReflectionClass( $className );
        $property = $reflector->getProperty( $propertyName );
        $property->setAccessible( true );
         
        return $property;
    }

    /**
     * empty Test to get rid of warning 'No Test in UnitBaseTest'
     *
     * @test
     */
    public function test()
    {
       
    }
}