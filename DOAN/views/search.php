<?php require_once("header.php")
?>
<main class="content dynamic-container">
    <?php
    echo '<h3 style="margin-bottom: 1rem;">Kết quả tìm kiếm cho "' . $_GET["keyword"] . '"</h3>';
    ?>
    <div style="margin-bottom: 1rem;" id="result-categories">
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/search_controller.php");
        $controller = new SearchController();
        $controller->search_invoke_for_buttons();
        ?>
    </div>
    <div id="results-holder" class="results-holder">
        <?php
        require_once($_SERVER['DOCUMENT_ROOT'] . "/DOAN/controllers/search_controller.php");
        $controller = new SearchController();
        $controller->search_invoke($_GET['keyword']);
        ?>
    </div>
</main>
<div style="height: 50px;"></div>
<hr style="clear: both;">
<?php require_once("footer.php")
?>
</div>
</body>

</html>