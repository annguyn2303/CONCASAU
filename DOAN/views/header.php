<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    
    <link rel="icon" href="https://www.dior.com/static/beauty/favicon/favicon.ico">
    <script src="/CONCASAU/DOAN/scripts/scripts.js"></script>
    <link rel="stylesheet" href="/CONCASAU/DOAN/Style/style.css"/>
    <title>DIOR</title>
</head>
<body>
    <!-- navitigation bar -->
    <div class="container-fluid">
      <header>
        <div style="height: 100px;"></div>
            <nav class="navbar navbar-expand-sm navbar-light bg-light fixed-top">
                
                    <!-- Logo -->
                    <a class="navbar-brand" href="/CONCASAU/DOAN/views/index.php" ><img src="https://logos-world.net/wp-content/uploads/2021/08/Christian-Dior-Symbol.png" width="100px"  /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false" aria-label="Toggle navitigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <!-- actual navitigation menu -->
                    <div class="collapse navbar-collapse justify-content-between" id="navbarResponsive">
                        <ul class="navbar-nav">
                        <li class="nav-item ml-3">
                            <a class="nav-link" href="/CONCASAU/DOAN/views/index.php">HOME</a>
                        </li>
                        <li class="nav-item lg-3">
                            <a class="nav-link" href="/CONCASAU/DOAN/views/makeup_category.php">MAKE-UP</a>
                        </li>
                        <li class="nav-item lg-3">
                            <a class="nav-link" href="/CONCASAU/DOAN/views/men_fg_category.php">MEN'S FRAGRANCE</a>
                        </li>
                        <li class="nav-item lg-3">
                            <a class="nav-link" href="/CONCASAU/DOAN/views/women_fg_category.php">WOMEN'S FRAGRANCE</a>
                        </li>
                        <li class="nav-item lg-3">
                        <a class="nav-link" href="/CONCASAU/DOAN/views/cart_invoke.php">GIỎ HÀNG</a>
                        </li>
                        <li class="nav-item lg-3">
                        <a class="nav-link" href="/CONCASAU/DOAN/views/user_invoke.php">TÀI KHOẢN</a>
                        </li>
                        
                        </ul>
                        <form class="form" action="search.php" method="$_GET">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="form" id="timkiem">
                                    <input type="text" id="search" name="keyword" class="form-control" placeholder="Tìm kiếm sản phẩm..."/>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <button type="submit" class="btn my-button">
                                    <i class="bi-search"></i>
                                    <span class="top-button-text">Tìm kiếm</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                </div>   
            </nav>
        </header>