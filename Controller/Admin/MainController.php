<?php
/**
 * @TODO LICENCE
 */
namespace my\oxid6ExampleModule2\Controller\Admin;

/**
 * Class mySliderMain.
 */
class MainController extends \OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController
{

    /**
     *
     * @return string
     */
    public function render()
    {
        parent::render();

        return "main.tpl";
    }
}
