<?php

namespace examples\tree;

use context\Context;

/**
 * The main reason of extending the base Context class is to have static State steps
 * instead of creating a new one for every State creation
 *
 *
 * 1
 * |
 * 2
 * | \
 * 3 4
 *   |
 *   5
 * Class TreeContext
 */
class TreeContext extends Context {
    private static $step1;
    private static $step2;
    private static $step3;
    private static $step4;
    private static $step5;

    public static function step1() {
        if ( ! self::$step1) {
            self::$step1 = new TreeStep1();
        }

        return self::$step1;
    }

    public static function step2() {
        if ( ! self::$step2) {
            self::$step2 = new TreeStep2();
        }

        return self::$step2;
    }

    public static function step3() {
        if ( ! self::$step3) {
            self::$step3 = new TreeStep3();
        }

        return self::$step3;
    }

    public static function step4() {
        if ( ! self::$step4) {
            self::$step4 = new TreeStep4();
        }

        return self::$step4;
    }

    public static function step5() {
        if ( ! self::$step5) {
            self::$step5 = new TreeStep5();
        }

        return self::$step5;
    }
}