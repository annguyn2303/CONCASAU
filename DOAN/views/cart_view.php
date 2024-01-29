<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/modules/db_module.php");
if (count($cart_items) <= 0) {
    echo "
    <div class='text-center m-t-30' style='margin-bottom: 3rem;'>
        <h2>Chưa có mặt hàng nào trong giỏ!</h2>
    </div>
    ";
} else {
    echo '                
    <table class="table cart-table" id="cart">
        <thead>
            <th>STT</th>
            <th style="text-align:left; padding-left: 50px;">Sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá (VND)</th>
            <th>Action</th>
        </thead>
    <tbody>';

    $count = 1;
    $quantity = 0;
    $price = 0;
    foreach ($cart_items as $item) {
        $product = $this->model->getProducts($item->getproduct_id());
        $product_id = $product->getproduct_id();
        $product_thumbnail = $product->getproduct_thumbnail();
        $product_name = $product->getproduct_name();
        $product_price = $product->getproduct_price();
        $product_quantity = $item->getproduct_quantity();
        $product_price_cal = $product_price * $product_quantity;
        $user_id = $_SESSION["user_id"];
        echo '
        <tr style="align-items: center;">
            <td>' . $count . '</td>
            <td style="text-align:left; padding-left: 50px;">
                <img src="' . $product_thumbnail . '" width="50">
                <a href="details.php?productid=' . $item->getproduct_id() . '">' . $product_name . '</a>
            </td>
            <td>' . $product_quantity . '</td>
            <td class="product-price">' . number_format($product_price_cal, 0, ",", ".") . '</td>
            <td><form action="delete.php" method= "POST">
            <input type="hidden" name="user_id" value="' . $user_id . '" />
            <input type="hidden" name="product_id" value="' . $product_id . '" />
            <button type="submit" class = "btn active">Xóa</button>
            </form></td>
        </tr>
        ';
        $count++;
        $quantity += $item->getproduct_quantity();
        $price += $product_price_cal;
    }
    $link = null;
    taoKetNoi($link);
    $currency = 0;
    $current_currency = chayTruyVanTraVeDL($link, "SELECT `currency` FROM tbl_user WHERE `user_id` = '$user_id'");
    while ($rows = mysqli_fetch_assoc($current_currency)) {
        $currency = $rows['currency'];
    }
    $remain_currency = (int)$currency - (int)$price;
    echo '
            <tr>
                <td></td>
                <td style="text-align:left; padding-left: 50px; color: red; font-weight: 500;">Đơn giá</td>
                <td>
                    <span id="total-product-quantity" style="font-weight: 500;">' . $quantity . '</span>
                </td>
                <td id="total-product-price" style="font-weight: 500; color: red;">' . number_format($price, 0, ",", ".") . '</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    ';
    echo '
    <form action="purchase.php" method="POST">
    <input type="hidden" name="productquantity" value="' . $quantity . '" />
    <input type="hidden" name="user_id_2" value="' . $user_id . '" />
    <input type="hidden" name="remain_currency" value="' . $remain_currency . '" />
    <button type="submit" class="btn btn-primary" style="position: relative;" id="dathang">
        Đặt hàng
    </button>
    </form>
    ';
}
