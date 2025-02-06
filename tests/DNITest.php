<?php
use PHPUnit\Framework\TestCase;
use App\DNI;

class DNITest extends TestCase {
    public function testDNIConLetra() {
        $dni = new DNI(12345678); 
        $this->assertEquals("12345678Z", $dni->getDNIConLetra());

        $dni2 = new DNI(87654321);
        $this->assertEquals("87654321X", $dni2->getDNIConLetra());
    }

    public function testDNIConLetraInvalid() {
        $this->expectException(TypeError::class);
        new DNI("ABCDE123");
    }
}
