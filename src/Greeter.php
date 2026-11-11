<?php

declare(strict_types=1);

// Class sederhana yang akan diuji: membuat kalimat sapaan
final class Greeter
{
    public function greet(string $name): string
    {
        return 'Hello, ' . $name . '!';
    }
}
