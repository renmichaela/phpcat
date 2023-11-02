<?php

namespace RenMichaela\PhpCat;

use GuzzleHttp\Client;

class PhpCat
{
  const BASE_URL = 'https://http.cat';
  
  private $statusCode;

  public static function status(string|int $statusCode)
  {
    $instance = (new static);
    $instance->statusCode = $statusCode;

    return $instance;
  }

  public function response()
  {
    $response = $this->client()->request('GET', "/".$this->statusCode.".jpg");

    header("Content-Type: image/jpeg");
    header($response->getHeader('Content-Length')[0]);

    return $response->getBody();
  }

  private function client()
  {
    return new Client(['base_uri' => self::BASE_URL]);
  }
}