<?php

namespace Symfony\Component\HttpKernel\Tests\Exception;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Exception\HttpException;

class HttpExceptionTest extends TestCase
{
    public function headerDataProvider()
    {
        return array(
            array(array('X-Online_test' => 'Test')),
            array(array('X-Online_test' => 1)),
            array(
                array(
                    array('X-Online_test' => 'Test'),
                    array('X-Online_test-2' => 'Online_test-2'),
                ),
            ),
        );
    }

    public function testHeadersDefault()
    {
        $exception = $this->createException();
        $this->assertSame(array(), $exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersConstructor($headers)
    {
        $exception = new HttpException(200, null, null, $headers);
        $this->assertSame($headers, $exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = $this->createException();
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }

    protected function createException()
    {
        return new HttpException(200);
    }
}
