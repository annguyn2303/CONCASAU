<?php
require_once("product.php");
require_once("description.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/modules/db_module.php");

class DetailModel
{
    // get product
    public function getProduct($id)
    {
        $link = null;
        taoKetNoi($link);
        $data = array();
        $result = chayTruyVanTraveDL($link, "SELECT * FROM tbl_product where product_id=$id");
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
        giaiPhongBonho($link, $result);
        return $product;
    }
    // get Spec list


    public function getDescription($id)
    {
        $link = null;
        taoKetNoi($link);
        $result = chayTruyVanTraveDL($link, "SELECT * FROM tbl_description WHERE product_id=$id");
        while ($rows = mysqli_fetch_assoc($result)) {
            $Description = new Description($rows["product_id"], $rows["review_content"]);
        }
        giaiPhongBonho($link, $result);
        return $Description;
    }
}
