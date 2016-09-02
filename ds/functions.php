<?php

namespace csl\ds;

function s ($string) {
    return new _String($string);
}

function i ($integer) {
    return new _Integer($integer);
}

function a (array $array) {
    return new _Array($array);
}
