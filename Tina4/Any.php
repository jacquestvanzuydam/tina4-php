<?php
/**
 * Created by PhpStorm.
 * User: Andre van Zuydam
 * Date: 2016/02/15
 * Time: 03:25 PM
 */
namespace Tina4;

/**
 * The Any route intercepts any type of call that can be made to the web server
 * @package Tina4
 */
class Any extends Route {
    public static $method = TINA4_ANY;
}
