<?php
if (count($cart_items) <= 0)
{
    echo "
    <div class='text-center' style='margin-bottom: 3rem;'>
        <h2>Chưa có mặt hàng nào trong giỏ!</h2>
    </div>
    ";
}
else
{
    echo'                
    <table class="table cart-table" id="cart">
        <thead>
            <th>STT</th>
            <th>Sản phẩm</th>
            <th>Số lượng</th>
            <th>Đơn giá (VND)</th>
        </thead>
    <tbody>';

    $count = 1;
    $quantity = 0; 
    $price = 0;
    foreach ($cart_items as $item)
    {
        $product = $this->model->getProducts($item->getproduct_id());
        $product_id = $product -> getproduct_id();
        $product_thumbnail = $product->getproduct_thumbnail();
        $product_name = $product->getproduct_name();
        $product_price = $product->getproduct_price();
        $product_quantity=$item->getproduct_quantity();
        $product_price_cal=$product_price*$product_quantity;
        $user_id = $_SESSION["user_id"];
        echo'
        <tr>
            <td>'.$count.'</td>
            <td>
                <img src="'.$product_thumbnail.'" width="50">
                <a href="details.php?productid='.$item->getproduct_id().'">'.$product_name.'</a>
            </td>
            <td>'.$product_quantity.'</td>
            <td class="product-price">'.number_format($product_price_cal, 0, ",", ".").'</td>
            <td><form action="delete.php" method= "POST">
            <input type="hidden" name="user_id_1" value="'.$user_id.'" />
            <input type="hidden" name="product_id" value="'.$product_id.'" />
            <button type="submit" class = "btn active">Xóa</button>
            </form></td>
        </tr>
        ';
        $count++;
        $quantity += $item->getproduct_quantity();
        $price += $product_price_cal;
    }
    echo'
            <tr>
                <td></td>
                <td></td>
                <td>
                    <span id="total-product-quantity" style="font-weight: 500;">'.$quantity.'</span>
                </td>
                <td id="total-product-price" style="font-weight: 500; color: red;">'.number_format($price, 0, ",", ".").'</td>
            </tr>
        </tbody>
    </table>
    ';
    echo'
    <form action="purchase.php" method="POST">
    <input type="hidden" name="productquantity" value="'.$quantity.'" />
    <input type="hidden" name="user_id_2" value="'.$user_id.'" />
    <button type="submit" class="btn btn-primary" style="position: relative;" id="dathang">
        Đặt hàng
    </button>
    </form>
    ';
}
?>