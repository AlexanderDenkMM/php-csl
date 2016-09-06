<?php

namespace csl\ds;

function i ($integer) {
    return new _Integer($integer);
}

function f ($float) {
    return new _Float($float);
}

function s ($string) {
    return new _String($string);
}

function a (array $array) {
    return new _Array($array);
}

function o ($object) {
    return new _Object($object);
}

function j ($json) {
    return new _Json($json);
}
