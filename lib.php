<?php
/**
 * Converts value to integer format.
 *
 * @param string $value
 *
 * @return int
 */
function toInt($value)
{
    if (is_array($value)) {
        return 0;
    }

    return intval($value);
}
