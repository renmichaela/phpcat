<?php

namespace PhpCat;

use GuzzleHttp\Client;

class CatClient
{
  const BASE_URL = 'https://http.cat';

  private $http;

  public function __construct()
  {
    $this->http = new Client(['base_uri' => self::BASE_URL]);
  }

  public function get(string|int $status)
  {
    return $this->http->request("GET", "/".$status.".jpg");
  }
}
