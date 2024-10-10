<?php

namespace Helper{
    class InputHelper {
        static function input(string $info) : string {
            echo " See: ";
            $result = fgets(STDIN);
            return trim($result);
        }
    }
}