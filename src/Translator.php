<?php

namespace Styde;

class Translator
{
    protected static $language;

    public static function setLanguage(Language $language)
    {
        static::$language = $language;
    }

    public static function get($key, $messages = array())
    {
        if (! static::has($key)) {
            return "[$key]";
        }

        return static::replaceParams(
            static::$language->getMessages($key), $messages
        );
    }

    public static function has($key)
    {
        $messageKey = static::$language->getMessages($key);

        return isset ($messageKey);
    }

    public static function replaceParams($message, array $params)
    {
        foreach ($params as $key => $value) {
            $message = str_replace(":$key", $value, $message);
        }

        return $message;
    }
}
