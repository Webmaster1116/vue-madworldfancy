<?php

namespace MadWorld\Containers;

use Plenty\Plugin\Templates\Twig;

class CustomThemeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('MadWorld::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}