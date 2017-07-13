<?php

namespace App\Request;


class BaseRequest
{
    /**
     * @var array
     */
    private $options;

    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @param string $key
     * @param null $default
     * @return mixed|null
     */
    public function get(string $key, $default = null)
    {
        return isset($this->options[$key]) ? $this->options[$key] : $default;
    }

    /**
     * @param string $key
     * @param $value
     * @return BaseRequest
     */
    public function set(string $key, $value): BaseRequest
    {
        $this->options[$key] = $value;
        return $this;
    }
}