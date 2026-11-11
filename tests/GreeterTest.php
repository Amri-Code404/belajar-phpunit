<?php

declare(strict_types=1);


use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class GreeterTest extends TestCase
{
    public function testGreetsWithName(): void
    {
        // Arrange: siapkan objek yang diuji
        $greeter = new Greeter();

        // Act: jalankan perilaku yang diuji
        $greeting = $greeter->greet('Alice');

        // Assert: bandingkan hasil dengan harapan
        $this->assertSame('Hello, Alice!', $greeting);
    }

    #[DataProvider('nameProvider')]
    public function testGreetsEachName(string $name, string $expected): void
    {
        $greeter = new Greeter();

        $this->assertSame($expected, $greeter->greet($name));
    }

    // Data provider: setiap baris = satu kasus uji
    public static function nameProvider(): array
    {
        return [
            'nama pendek'       => ['Ani', 'Hello, Ani!'],
            'nama dengan spasi' => ['Siti Aminah', 'Hello, Siti Aminah!'],
            'huruf kecil'       => ['dedi', 'Hello, dedi!'],
        ];
    }
}
