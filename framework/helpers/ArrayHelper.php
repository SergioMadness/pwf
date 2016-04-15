<?php

declare(strict_types = 1);

namespace pwf\helpers;

class ArrayHelper
{

    /**
     * To array
     *
     * @param mixed $o
     * @return array
     */
    public static function toArray($o): array
    {
        if (is_array($o)) {
            foreach ($o as $key => $val) {
                $o[$key] = self::toArray($val);
            }
        } elseif (is_object($o) && method_exists($o, 'toArray')) {
            return $o->toArray();
        }

        return $o;
    }
}