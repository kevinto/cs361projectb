<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'On');
  require 'HTML5Validate.php';

  class VolunteerTest extends PHPUnit_Framework_TestCase
  {
    public function setUp(){ }
    public function tearDown(){ }

    // Test if volunteer page has valid html 5
    public function testVolunteerPageHTMLIsValid()
    {
      $validator=new HTML5Validate(false);
      $output=file_get_contents('./volunteers.html');
      $result=$validator->Assert($output);
      $this->assertTrue($result, $validator->message);
    }

    // Test if volunteer page title is correct
    public function testTitleIsCorrect()
    {
      $output=file_get_contents('./volunteers.html');
      $this->assertContains('<title>Forever Furries - Volunteers</title>', $output);
    }

    // Test if header for volunteer page is correct
    public function testVolunteerHeaderIsCorrect()
    {
      $output=file_get_contents('./volunteers.html');
      $this->assertContains('<h1>Volunteers Needed!</h1>', $output);
    }
  }

?>
