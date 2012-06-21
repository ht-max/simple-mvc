<?php
require_once dirname(__FILE__) . '/../src/Application.php';

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-06-20 at 20:20:27.
 */
class ApplicationTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Application
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Application;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Application::bootstrap
     * @covers Application::getBootstrap
     */
    public function testBootstrap()
    {
        $this->object->bootstrap("hello", function(){return "ciao";});
        $boot = $this->object->getBootstrap("hello");
        
        $this->assertEquals($boot, "ciao");
    }
    
    public function testSetGetEventManager()
    {
        $mng = new EventManager();
        $this->object->setEventManager($mng);
        
        $this->assertSame($mng, $this->object->getEventManager());
    }

    /**
     * @expectedException RuntimeException
     */
    public function testBootstrapNotCallable()
    {
        $this->object->bootstrap("up", "not-callable");
    }

    /**
     * @covers Application::run
     * @todo   Implement testRun().
     */
    public function testRun()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete('This test has not been implemented yet.');
    }
}
