<?php 
  require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php'; 
  require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php'; 
  require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php' ;
  require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php' ;
  require_once PATH_TRUNK . 'workflow/engine/classes/class.serverConfiguration.php'; 

  /** 
   * Generated by ProcessMaker Test Unit Generator on 2012-05-10 at 20:56:18.
  */ 

  class classserverConfTest extends PHPUnit_Framework_TestCase 
  { 
    /**
    * @covers serverConf::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( '__construct', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::getSingleton
    * @todo   Implement testgetSingleton().
    */
    public function testgetSingleton() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'getSingleton', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::serializeInstance
    * @todo   Implement testserializeInstance().
    */
    public function testserializeInstance() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'serializeInstance', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::unSerializeInstance
    * @todo   Implement testunSerializeInstance().
    */
    public function testunSerializeInstance() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'unSerializeInstance', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::saveSingleton
    * @todo   Implement testsaveSingleton().
    */
    public function testsaveSingleton() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'saveSingleton', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::setProperty
    * @todo   Implement testsetProperty().
    */
    public function testsetProperty() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'setProperty', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::unsetProperty
    * @todo   Implement testunsetProperty().
    */
    public function testunsetProperty() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'unsetProperty', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::getProperty
    * @todo   Implement testgetProperty().
    */
    public function testgetProperty() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'getProperty', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::sucessfulLogin
    * @todo   Implement testsucessfulLogin().
    */
    public function testsucessfulLogin() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'sucessfulLogin', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::setWsInfo
    * @todo   Implement testsetWsInfo().
    */
    public function testsetWsInfo() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'setWsInfo', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::changeStatusWS
    * @todo   Implement testchangeStatusWS().
    */
    public function testchangeStatusWS() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'changeStatusWS', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::isWSDisabled
    * @todo   Implement testisWSDisabled().
    */
    public function testisWSDisabled() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'isWSDisabled', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::checkIfHostNameHasChanged
    * @todo   Implement testcheckIfHostNameHasChanged().
    */
    public function testcheckIfHostNameHasChanged() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'checkIfHostNameHasChanged', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::getWSList
    * @todo   Implement testgetWSList().
    */
    public function testgetWSList() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'getWSList', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::getWorkspaceInfo
    * @todo   Implement testgetWorkspaceInfo().
    */
    public function testgetWorkspaceInfo() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'getWorkspaceInfo', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::getPluginsList
    * @todo   Implement testgetPluginsList().
    */
    public function testgetPluginsList() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'getPluginsList', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::addPlugin
    * @todo   Implement testaddPlugin().
    */
    public function testaddPlugin() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'addPlugin', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::getDBVersion
    * @todo   Implement testgetDBVersion().
    */
    public function testgetDBVersion() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'getDBVersion', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::resetLogins
    * @todo   Implement testresetLogins().
    */
    public function testresetLogins() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'resetLogins', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::getLanDirection
    * @todo   Implement testgetLanDirection().
    */
    public function testgetLanDirection() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'getLanDirection', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::setHeartbeatProperty
    * @todo   Implement testsetHeartbeatProperty().
    */
    public function testsetHeartbeatProperty() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'setHeartbeatProperty', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::unsetHeartbeatProperty
    * @todo   Implement testunsetHeartbeatProperty().
    */
    public function testunsetHeartbeatProperty() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'unsetHeartbeatProperty', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

    /**
    * @covers serverConf::getHeartbeatProperty
    * @todo   Implement testgetHeartbeatProperty().
    */
    public function testgetHeartbeatProperty() 
    { 
        if (class_exists('serverConf')) {
             $methods = get_class_methods( 'serverConf');
            $this->assertTrue( in_array( 'getHeartbeatProperty', $methods ), 'seems like this function is outside this class' ); 
        } 
    } 

  } 