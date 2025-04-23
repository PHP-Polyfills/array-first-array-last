<?php

namespace Polyfills\MbTrimPolyfill\Tests;

use PHPUnit\Framework\TestCase;

class ArrayFirstLastTest extends TestCase {

    public function testArrayFirst() {
        $obj = new \stdClass();
        self::assertSame(1, array_first([1, 2, 3]));
        self::assertSame(2, array_first([2, 3]));
        self::assertNull(array_first([null, 2, 3]));
        self::assertSame("null", array_first(["null", 2, 3]));
        self::assertSame($obj, array_first([$obj, 2, 3]));
        self::assertSame(1, array_first([1]));
        self::assertTrue(array_first([true]));
        self::assertFalse(array_first([false, true]));
        self::assertSame([], array_first([[], true]));
        self::assertSame([1, 2], array_first([[1, 2], true]));
        self::assertNull(array_first([null]));
        self::assertNull(array_first([]));
    }

    public function testArrayLast() {
        $obj = new \stdClass();
        self::assertSame(3, array_last([1, 2, 3]));
        self::assertSame(3, array_last([2, 3]));
        self::assertNull(array_last([2, 3, null]));
        self::assertSame("null", array_last([2, 3, "null"]));
        self::assertSame($obj, array_last([2, 3, $obj]));
        self::assertSame(1, array_last([1]));
        self::assertTrue(array_last([true]));
        self::assertFalse(array_last([true, false]));
        self::assertSame([], array_last([true, []]));
        self::assertSame([1, 2], array_last([true, [1, 2]]));
        self::assertNull(array_last([null]));
        self::assertNull(array_last([]));
    }
}
