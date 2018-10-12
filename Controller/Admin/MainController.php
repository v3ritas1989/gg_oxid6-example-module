<?php
/**
 * @TODO LICENCE
 */
namespace gripgate\oxid6ExampleModule2\Controller\Admin;

/**test
 * Class gripgateSliderMain.
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
