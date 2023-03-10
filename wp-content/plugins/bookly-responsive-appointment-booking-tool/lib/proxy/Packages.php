<?php
namespace Bookly\Lib\Proxy;

use Bookly\Lib;

/**
 * Class Packages
 *
 * @package Bookly\Lib\Proxy
 * @method static void addBooklyMenuItem() Add 'Packages' to Bookly menu.
 * @method static \DateTime|null getPackageExpireDate( int $package_id ) Get package expire date.
 */
abstract class Packages extends Lib\Base\Proxy
{

}