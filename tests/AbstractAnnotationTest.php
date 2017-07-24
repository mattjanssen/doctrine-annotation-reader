<?php
/*
 * Copyright (c) Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\AnnotationReader\Test;

use PHPUnit_Framework_TestCase;
use RuntimeException;
use Tebru\AnnotationReader\Test\Mock\Annotation\BaseClassAnnotation;

class AbstractAnnotationTest extends PHPUnit_Framework_TestCase
{
    public function testRequiredValueMissingThrowsException()
    {
        try {
            new BaseClassAnnotation([]);
        } catch (RuntimeException $exception) {
            self::assertSame('Key "value" not found in annotation data', $exception->getMessage());
            return;
        }

        self::assertTrue(false);
    }
}