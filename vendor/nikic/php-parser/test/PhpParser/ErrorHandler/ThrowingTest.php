<?php declare(strict_types=1);

namespace PhpParser\ErrorHandler;

use PhpParser\Error;
use PHPUnit\Framework\TestCase;

class ThrowingTest extends TestCase
{
    /**
     * @expectedException \PhpParser\Error
     * @expectedExceptionMessage Online_test
     */
    public function testHandleError() {
        $errorHandler = new Throwing();
        $errorHandler->handleError(new Error('Test'));
    }
}
