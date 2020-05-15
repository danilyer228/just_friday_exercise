<?php
/**
 * Created by PhpStorm.
 * User: danilyer
 * Date: 15.05.20
 * Time: 14:17
 */

namespace Otis22\PhpSkelleton;


/**
 * Class JoinedString
 * @package Otis22\PhpSkelleton
 */
class JoinedString
{
    /**
     * @var string
     */
    protected $glue;
    /**
     * @var array
     */
    protected $pieces;

    /**
     * JoinedString constructor.
     * @param $glue
     * @param array $pieces
     */
    public function __construct($glue, array $pieces)
    {
        $this->glue = $glue;
        $this->pieces = $pieces;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return join($this->glue, $this->pieces);
    }
}