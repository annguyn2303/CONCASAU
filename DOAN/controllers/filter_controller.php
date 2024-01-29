<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/models/filter_model.php");
class FilterController
{
    public $model;
    public function __construct()
    {
        $this->model = new FilterModel();
    }
    //filter makeup
    public function makeup_category_invoke($name)
    {
        if (isset($_GET['minmax']))
            $minmax = $_GET['minmax'];
        else
            $minmax = null;
        if (isset($_GET['price']))
            $price = $_GET['price'];
        else
            $price = null;
        if (isset($_GET['brand']))
            $brand =  $_GET['brand'];
        else
            $brand  = null;
        $makeupList = $this->model->getMakeupList($brand);
        include "makeup_category_view.php";
    }
    //------------------------------------------------------------------------------//
    public function men_fg_category_invoke($name)
    {
        if (isset($_GET['minmax']))
            $minmax = $_GET['minmax'];
        else
            $minmax = null;
        if (isset($_GET['price']))
            $price = $_GET['price'];
        else
            $price = null;
        if (isset($_GET['brand']))
            $brand =  $_GET['brand'];
        else
            $brand  = null;
        $men_fg_List = $this->model->getMen_FragranceList($brand);
        include "men_fg_category_view.php";
    }

    //-------------------------------------------------------------------------------//
    public function women_fg_category_invoke($name)
    {
        if (isset($_GET['minmax']))
            $minmax = $_GET['minmax'];
        else
            $minmax = null;
        if (isset($_GET['price']))
            $price = $_GET['price'];
        else
            $price = null;
        if (isset($_GET['brand']))
            $brand =  $_GET['brand'];
        else
            $brand  = null;
        $women_fg_List = $this->model->getWomen_FragranceList($brand);
        include "women_fg_category_view.php";
    }
}
