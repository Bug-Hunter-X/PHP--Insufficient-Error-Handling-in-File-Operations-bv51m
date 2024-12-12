```php
$file = fopen("path/to/file.txt", "r");
if ($file) {
    // Process the file
    if (fclose($file) === false) {
        $error = error_get_last();
        echo "Error closing file: " . $error['message'];
    }
} else {
    $error = error_get_last();
    echo "Error opening file: " . $error['message'];
}
```
This improved code explicitly checks the return value of `fclose()`. If an error occurs during the file closing process, it utilizes `error_get_last()` to retrieve and display the system's error message.  The same strategy is used for the `fopen()` function.
This provides much more specific and helpful feedback in case of failure.