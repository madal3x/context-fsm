<?php

namespace examples\linear;

use context\Context;

/**
 * The main reason of extending the base Context class is to have static State steps
 * instead of creating a new one for every State creation
 * 
 * 1
 * |
 * 2
 * |
 * 3
 *
 * Class LinearContext
 */
class LinearContext extends Context {
    private static $step1;
    private static $step2;
    private static $step3;

    public static function step1() {
        if ( ! self::$step1) {
            self::$step1 = new StateStep1();
        }

        return self::$step1;
    }

    public static function step2() {
        if ( ! self::$step2) {
            self::$step2 = new StateStep2();
        }

        return self::$step2;
    }

    public static function step3() {
        if ( ! self::$step3) {
            self::$step3 = new StateStep3();
        }

        return self::$step3;
    }
}