```php
function processData(array $data): array {
  // ... some processing ...
  return $data;
}

$myData = ['a' => 1, 'b' => 2];
$processedData = processData($myData);

// Unexpected behavior: $processedData is empty
var_dump($processedData); //Output: array(0) {}
```