<?php

namespace MadWorld\Containers;

use Plenty\Plugin\Templates\Twig;

class CustomThemeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('MadWorld::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}