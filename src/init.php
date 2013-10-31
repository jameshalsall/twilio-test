<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * App initialisation
 *
 * @author James Halsall <james.t.halsall@googlemail.com>
 */

$yaml = new \Symfony\Component\Yaml\Yaml();
$config = $yaml->parse(__DIR__ . '/../config/parameters.yml');

$app = new \Silex\Application();

// TODO
