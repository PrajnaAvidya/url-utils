<?php
require_once __DIR__ . '/../vendor/autoload.php';

class URLUtilsTest extends PHPUnit_Framework_TestCase
{
    public function testExists()
    {
      $exists = URLUtils::exists('http://www.google.com');
      $this->assertTrue($exists);
    }

    public function testFetch()
    {
      $page = URLUtils::get('http://www.google.com');
      $this->assertContains('google',$page);
    }
}
