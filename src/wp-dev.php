#!/usr/bin/env php
<?php
/**
 * Loader for mu-plugin.
 *
 * @package wp-dev
 */

// Package "nikic/php-parser" needs that.
ini_set('xdebug.max_nesting_level', 3000);

const WPDEV_TEMPLATE_PATH = __DIR__.'/templates';

require_once __DIR__.'/../vendor/autoload.php';

$twig = new Twig_Environment(new Twig_Loader_Filesystem([WPDEV_TEMPLATE_PATH]));

$twig->addFilter(
    'upper_snake',
    new \Twig_SimpleFilter(
        'upper_snake',
        function ($string) {
            return ucwords(preg_replace('@[^A-Za-z]+@', '_', $string), '_');
        }
    )
);

$handler = new \WPDev\Commands\OptionsPages\CreateHandler(
    new \WPDev\Repositories\OptionsPagesRepository($twig)
);

$handler->handle(
    new \WPDev\Commands\OptionsPages\CreateCommand(
        new \WPDev\Domain\OptionsGroup('foo', 'Heading yeha'),
        new \WPDev\Domain\Plugin(
            'some-plugin',
            __DIR__.'/../tmp/wp-4-6/wp-content/plugins/some-plugin',
            'some-plugin'
        )
    )
);
