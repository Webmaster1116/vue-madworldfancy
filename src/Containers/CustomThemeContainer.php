<?php

namespace MadWorld\Containers;

use Plenty\Plugin\Templates\Twig;

class CustomThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('MadWorld::Stylesheet');
    }
}