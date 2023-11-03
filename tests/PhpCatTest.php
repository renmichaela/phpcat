<?php

use PHPUnit\Framework\TestCase;

use PhpCat\PhpCat;

class PhpCatTest extends TestCase
{
  public function test_can_be_created_from_a_status_code()
  {
    $status = 400;

    $instance = PhpCat::status($status);

    $this->assertTrue($instance instanceof PhpCat);
  }

  public function test_can_return_a_response()
  {
    $status = 403;

    $response = PhpCat::status($status)->response();

    $this->assertNotEmpty($response);
  }
}