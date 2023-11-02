## PHP Cat

A PHP wrapper to return HTTP responses codes as cats. Powered by the fabulous [http.cat](https://http.cat) API.

**Usage**

```php
use RenMichaela\PhpCat\PhpCat;

...

return PhpCat::status(400)->response();
```

will return:
![](https://http.cat/400)