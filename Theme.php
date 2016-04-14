<?php

namespace Shopware\Themes\Meinhausshop;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Meinhaussop Responsive Template
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'

SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Eco Energy Group GbR
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
Commercial
SHOPWARE_EOD;


    public function createConfig(Form\Container\TabContainer $container)
    {
    }

    /** @var array Defines the files which should be compiled by the javascript compressor */
    protected $javascript = array(
        'src/js/jquery.advanced-menu.js'
    );
}