<?php

namespace Magesolution\CustomApi\Api;

interface CustomInterface
{
    /**
     * GET for Post api
     * @param string $value
     * @return string
     */

    public function getPost($value);
}