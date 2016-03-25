<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('vendor')
    ->in(__DIR__);

return Symfony\CS\Config\Config::create()
    ->fixers(['indentation', 'elseif'])
    ->level('psr2')
    ->level('psr0')
    ->finder($finder);
