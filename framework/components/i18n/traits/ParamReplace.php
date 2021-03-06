<?php

namespace pwf\components\i18n\traits;

trait ParamReplace
{

    /**
     * Prepare string
     *
     * @param string $str
     * @param array $params
     * @return string
     */
    protected function prepareValue($str, array $params = [])
    {
        return self::prepareValueS($str, $params);
    }

    /**
     * Prepare string
     *
     * @param string $str
     * @param array $params
     * @return string
     */
    protected static function prepareValueS($str, array $params = [])
    {
        $result = $str;
        foreach ($params as $key => $value) {
            $result = str_replace('{'.$key.'}', $value, $result);
        }
        return $result;
    }
}