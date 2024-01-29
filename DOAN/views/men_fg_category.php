<?php require_once("header.php")
?>

<main class="content dynamic-container">
    <h3 style="width: fit-content; margin: 0 auto 1rem auto; padding: 50px;">MAKE-UP</h3>
    <div style="margin-bottom: 1rem;">
        <button class="btn my-button" style="margin-bottom: 30px;" onclick="queryToggle()">
            <i class="bi-filter"></i>
            Bộ lọc
        </button>
    </div>
    <div class="sort-filter" style="margin: 1rem 0 1rem 0; width: 100%;" id="sort-and-query">
        <form method="get">
            <div style="width: 100%; margin: 1rem;" class="row">
                <div class="col-lg-4 col-6">
                    <label style="font-weight: 500;">Sắp xếp</label><br />
                    <input type="checkbox" name="minmax" value="1" style="margin: 0.5rem;"><label>Giá từ cao đến thấp</label><br />
                    <input type="checkbox" name="minmax" value="2" style="margin: 0.5rem;"><label>Giá từ thấp đến cao</label><br />
                </div>
                <div class="col-lg-4 col-6">
                    <label style="font-weight: 500;">Giá</label><br />
                    <input type="checkbox" name="price[]" value="<2" style="margin: 0.5rem;"><label>Dưới 2 triệu</label><br />
                    <input type="checkbox" name="price[]" value="2-5" style="margin: 0.5rem;"><label>Từ 2 đến 5 triệu</label><br />
                    <input type="checkbox" name="price[]" value="5-10" style="margin: 0.5rem;"><label>Từ 5 đến 10 triệu</label><br />
                    <input type="checkbox" name="price[]" value=">10" style="margin: 0.5rem;"><label>Trên 10 triệu</label><br />
                </div>

                <div class="col-lg-4 col-6">
                    <label style="font-weight: 500;">Brand</label><br />
                    <input type="checkbox" name="brand[]" value="Dior" style="margin: 0.5rem;"><label>Dior</label><br />
                    <input type="checkbox" name="brand[]" value="Chanel" style="margin: 0.5rem;"><label>Chanel</label><br />
                    <input type="checkbox" name="brand[]" value="D&G" style="margin: 0.5rem;"><label>D&G</label><br />
                    <input type="checkbox" name="brand[]" value="YSL" style="margin: 0.5rem;"><label>YSL</label><br />
                    <input type="checkbox" name="brand[]" value="Creed" style="margin: 0.5rem;"><label>Creed</label><br />
                </div>

            </div>
            <button type="submit" name="submit" class="btn active" style="margin: 1rem;">Áp dụng</button>
        </form>

    </div>
    <div id="products-holder" class="products-holder row">
        <?php
        if (isset($_GET['submit'])) {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/filter_controller.php");
            $controller = new FilterController();
            $controller->men_fg_category_invoke("filter");
        } else {
            require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/filter_controller.php");
            $controller = new FilterController();
            $controller->men_fg_category_invoke("all");
        }

        ?>
    </div>
    <div class="container-fluid padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h2>Connect</h2>
            </div>
            <div class="col-12 social padding">
                <a href="https://www.facebook.com/DHKT.UEH" target="_blank"> <i class="fab fa-facebook"></i> </a>
                <a href="#"> <i class="fab fa-twitter"></i> </a>
                <a href="#"> <i class="fab fa-instagram"></i> </a>
                <a href="https://www.youtube.com/c/UEHChannel" target="_blank"> <i class="fab fa-youtube"></i> </a>
            </div>
        </div>
    </div>
</main>

<?php require_once("footer.php")
?>

</div>
</body>

</html>