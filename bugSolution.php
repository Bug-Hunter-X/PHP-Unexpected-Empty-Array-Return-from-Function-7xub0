```php
function processData(array &$data): array {
  // ... some processing ...
  return $data;
}

$myData = ['a' => 1, 'b' => 2];
$processedData = processData($myData);

// Correct behavior: $processedData now contains modified data
var_dump($processedData); // Output: array(2) {["a"]=> int(1) ["b"]=> int(2)}
```