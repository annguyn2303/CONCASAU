<?php
require_once("product.php");
require_once("product_category.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/modules/db_module.php");

class FilterModel
{

    public function getMakeupList($brand)
    {
        $link = null;
        taoKetNoi($link);
        $data = array();
        if ($brand == null) {
            $result = chayTruyVanTraveDL($link, "SELECT * FROM tbl_product WHERE category_id=1");
            while ($rows = mysqli_fetch_assoc($result)) {
                $product = new Product(
                    $rows["product_id"],
                    $rows["product_name"],
                    $rows["product_price"],
                    $rows["category_id"],
                    $rows["product_highlighted"],
                    $rows["product_thumbnail"],
                    $rows["product_producer"],
                    $rows["product_origin"],
                    $rows["product_description"],
                    $rows["product_preview"]
                );
                array_push($data, $product);
            }
        } else {
            foreach ($brand as $b) {
                $result = chayTruyVanTraveDL($link, "SELECT * FROM tbl_product WHERE category_id=1 AND product_producer='" . $b . "'");
                while ($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product(
                        $rows["product_id"],
                        $rows["product_name"],
                        $rows["product_price"],
                        $rows["category_id"],
                        $rows["product_highlighted"],
                        $rows["product_thumbnail"],
                        $rows["product_producer"],
                        $rows["product_origin"],
                        $rows["product_description"],
                        $rows["product_preview"]
                    );
                    array_push($data, $product);
                }
            }
        }
        giaiPhongBonho($link, $result);
        return $data;
    }
    public function getMen_FragranceList($brand)
    {
        $link = null;
        taoKetNoi($link);
        $data = array();
        if ($brand == null) {
            $result = chayTruyVanTraveDL($link, "SELECT * FROM tbl_product WHERE category_id=2");
            while ($rows = mysqli_fetch_assoc($result)) {
                $product = new Product(
                    $rows["product_id"],
                    $rows["product_name"],
                    $rows["product_price"],
                    $rows["category_id"],
                    $rows["product_highlighted"],
                    $rows["product_thumbnail"],
                    $rows["product_producer"],
                    $rows["product_origin"],
                    $rows["product_description"],
                    $rows["product_preview"]
                );
                array_push($data, $product);
            }
        } else {
            foreach ($brand as $b) {
                $result = chayTruyVanTraveDL($link, "SELECT * FROM tbl_product WHERE category_id=2 AND product_producer='" . $b . "'");
                while ($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product(
                        $rows["product_id"],
                        $rows["product_name"],
                        $rows["product_price"],
                        $rows["category_id"],
                        $rows["product_highlighted"],
                        $rows["product_thumbnail"],
                        $rows["product_producer"],
                        $rows["product_origin"],
                        $rows["product_description"],
                        $rows["product_preview"]
                    );
                    array_push($data, $product);
                }
            }
        }
        giaiPhongBonho($link, $result);
        return $data;
    }
    public function getWomen_FragranceList($brand)
    {
        $link = null;
        taoKetNoi($link);
        $data = array();
        if ($brand == null) {
            $result = chayTruyVanTraveDL($link, "SELECT * FROM tbl_product WHERE category_id=3");
            while ($rows = mysqli_fetch_assoc($result)) {
                $product = new Product(
                    $rows["product_id"],
                    $rows["product_name"],
                    $rows["product_price"],
                    $rows["category_id"],
                    $rows["product_highlighted"],
                    $rows["product_thumbnail"],
                    $rows["product_producer"],
                    $rows["product_origin"],
                    $rows["product_description"],
                    $rows["product_preview"]
                );
                array_push($data, $product);
            }
        } else {
            foreach ($brand as $b) {
                $result = chayTruyVanTraveDL($link, "SELECT * FROM tbl_product WHERE category_id=3 AND product_producer='" . $b . "'");
                while ($rows = mysqli_fetch_assoc($result)) {
                    $product = new Product(
                        $rows["product_id"],
                        $rows["product_name"],
                        $rows["product_price"],
                        $rows["category_id"],
                        $rows["product_highlighted"],
                        $rows["product_thumbnail"],
                        $rows["product_producer"],
                        $rows["product_origin"],
                        $rows["product_description"],
                        $rows["product_preview"]
                    );
                    array_push($data, $product);
                }
            }
        }
        giaiPhongBonho($link, $result);
        return $data;
    }
}
