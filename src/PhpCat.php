<?php

namespace PhpCat;

class PhpCat
{  
  private $statusCode;

  public static function status(string|int $statusCode)
  {
    $instance = (new static);
    $instance->statusCode = $statusCode;

    return $instance;
  }

  public function response()
  {
    $response = $this->client()->get($this->statusCode);

    header("Content-Type: image/jpeg");
    header($response->getHeader('Content-Length')[0]);

    echo $response->getBody();
  }

  private function client()
  {
    return new CatClient;
  }
}