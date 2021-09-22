<?php

namespace MadWorld\Containers;

use Plenty\Plugin\Templates\Twig;

class CustomThemeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('MadWorld::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}