<?php
/**
 * Symfony Service Loader
 *
 * @author      ekino, psyKing
 * @copyright   2018 ekino, psyKing
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Symfony Service Loader
 * Plugin URI:  https://github.com/psyKing/symfony-service-loader/
 * Description: Provides a Method that retrieves a Symfony
 *              service which you can specify as an argument
 *              by its service id .
 *              I forked the following project:
 *              https://github.com/ekino/ekino-wordpress-symfony
 *
 *              I removed the hook-function, put the loading of the
 *              symfony core into a class and made it work with
 *              Symfony 3.4.
 *
 *              Thanks to ekino.
 *
 * Version:     1.0.0
 * Author:      ekino, psyKing
 * Author URI:  http://www.ekino.com, https://github.com/psyKing/
 * Text Domain: symfony-service-loader
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

require_once 'config.php';
require_once 'SymfonyLoader.php';

