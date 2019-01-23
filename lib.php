<?php
function toInt($value)
{
    if (is_array($value)) {
        return 0;
    }

    return intval($value);
}
