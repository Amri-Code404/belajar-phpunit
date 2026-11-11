<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

final class KonversiSuhuTest extends TestCase
{
    #[DataProvider('fahrenheitDataProvider')]

    public function testCelsiusKeFahrenheitBerhasilDikonversi(float $celsius, float $expectedFahrenheit): void
    {
        // Arrange
        $konversi = new KonversiSuhu();

        // Act
        $hasil = $konversi->celsiusKeFahrenheit($celsius);

        // Assert
        $this->assertEquals($expectedFahrenheit, $hasil);
    }

    public static function fahrenheitDataProvider(): array
    {
        return [
            'titik beku' => [0.0, 32.0],
            'titik didih' => [100.0, 212.0],
            'suhu negatif' => [-40.0, -40.0],
            'suhu tubuh' => [37.0, 98.6],
        ];
    }

    #[DataProvider('kelvinDataProvider')]
    public function testCelsiusKeKelvinBerhasilDikonversi(float $celsius, float $expectedKelvin): void
    {
        // Arrange
        $konversi = new KonversiSuhu();

        // Act
        $hasil = $konversi->celsiusKeKelvin($celsius);

        // Assert
        $this->assertEquals($expectedKelvin, $hasil);
    }

    public static function kelvinDataProvider(): array
    {
        return [
            'titik beku' => [0.0, 273.15],
            'titik didih' => [100.0, 373.15],
            'suhu negatif' => [-273.15, 0.0],
            'suhu tubuh' => [37.0, 310.15],
        ];
    }
}
