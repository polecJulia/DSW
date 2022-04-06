<?php

spl_autoload_register(function (string $class_name): void {
    // Map the namespace to the corresponding folder
    $namespace_mapping = [
        'Src' => './src',
    ];

    foreach ($namespace_mapping as $namespace => $directory) {
        if (
            !str_starts_with($class_name, $namespace = trim($namespace, '\\'))
            || (!$directory = realpath(__DIR__ . DIRECTORY_SEPARATOR . trim($directory, DIRECTORY_SEPARATOR)))
        ) {
            continue; // Class name doesn't match or the directory doesn't exist
        }

        // Require the file
        $class_file = $directory . str_replace([$namespace, '\\'], ['', DIRECTORY_SEPARATOR], $class_name) . '.php';
        if (file_exists($class_file)) {
            require_once $class_file;
        }
    }
});