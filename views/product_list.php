<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sản Phẩm</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/product_list.css" rel="stylesheet">
</head>
<body>
    <?php include './common/header.php';?>
    <div class="container-fluid"> <!-- container -->
        <div class="row"> <!-- row -->
            <div class="col-md-3 left pt-5">
                <h3>Thương hiệu:</h3>
                <ul class="list-group mb-2 ml-2">
                    <li class="list-group-item">
                        <input type="checkbox" name="a" id="asus">
                        <label for="asus">ASUS</label>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox" name="a" id="acer">
                        <label for="acer">ACER</label>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox" name="a" id="dell">
                        <label for="dell">DELL</label>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox" name="a" id="hp">
                        <label for="hp">HP</label>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox" name="a" id="lenovo">
                        <label for="lenovo">LENOVO</label>
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox" name="a" id="msi">
                        <label for="msi">MSI</label>
                    </li>
                </ul>
                <h3>Sắp xếp theo:</h3>
                <ul class="list-group mb-2 ml-2">
                    <li class="list-group-item">
                        <input type="radio" name="a" id="sort1">
                        <label for="sort1">Giá từ cao - thấp</label>
                    </li>
                    <li class="list-group-item">
                        <input type="radio" name="a" id="sort2">
                        <label for="sort2">Giá từ thấp - cao</label>
                    </li>
                </ul>
            </div>
            <div class="col-md-9 right container pt-5"> <!-- col-md-9 -->
                <h3 class="h3">Danh Sách Sản Phẩm</h3>
                <div class="row mb-3"> <!-- row mb-3 -->
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/asus1.jpg">
                                    <img class="pic-2" src="../assets/img/asus2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ASUS</a></h3>
                                <div class="price"> 15.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/acer1.jpg">
                                    <img class="pic-2" src="../assets/img/acer2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ACER</a></h3>
                                <div class="price"> 13.000.000 </div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/dell1.jpg">
                                    <img class="pic-2" src="../assets/img/dell2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP DELL</a></h3>
                                <div class="price">18.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/lenovo1.jpg">
                                    <img class="pic-2" src="../assets/img/lenovo2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP LENOVO</a></h3>
                                <div class="price">11.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/asus1.jpg">
                                    <img class="pic-2" src="../assets/img/asus2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ASUS</a></h3>
                                <div class="price"> 15.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/acer1.jpg">
                                    <img class="pic-2" src="../assets/img/acer2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ACER</a></h3>
                                <div class="price"> 13.000.000 </div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/dell1.jpg">
                                    <img class="pic-2" src="../assets/img/dell2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP DELL</a></h3>
                                <div class="price">18.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/lenovo1.jpg">
                                    <img class="pic-2" src="../assets/img/lenovo2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP LENOVO</a></h3>
                                <div class="price">11.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/asus1.jpg">
                                    <img class="pic-2" src="../assets/img/asus2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ASUS</a></h3>
                                <div class="price"> 15.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/acer1.jpg">
                                    <img class="pic-2" src="../assets/img/acer2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ACER</a></h3>
                                <div class="price"> 13.000.000 </div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/dell1.jpg">
                                    <img class="pic-2" src="../assets/img/dell2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP DELL</a></h3>
                                <div class="price">18.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/lenovo1.jpg">
                                    <img class="pic-2" src="../assets/img/lenovo2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP LENOVO</a></h3>
                                <div class="price">11.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/asus1.jpg">
                                    <img class="pic-2" src="../assets/img/asus2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ASUS</a></h3>
                                <div class="price"> 15.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/acer1.jpg">
                                    <img class="pic-2" src="../assets/img/acer2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP ACER</a></h3>
                                <div class="price"> 13.000.000 </div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/dell1.jpg">
                                    <img class="pic-2" src="../assets/img/dell2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP DELL</a></h3>
                                <div class="price">18.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#">
                                    <img class="pic-1" src="../assets/img/lenovo1.jpg">
                                    <img class="pic-2" src="../assets/img/lenovo2.jpg">
                                </a>
                                <a href="#" class="fa fa-search product-full-view"></a>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><a href="#">LAPTOP LENOVO</a></h3>
                                <div class="price">11.000.000</div>
                                <a class="add-to-cart" href="">Đưa Vào Giỏ</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row mb-3 -->
            </div> <!-- end col-md-9 -->
            
        </div> <!-- end row -->
    </div> 
    <!-- end container -->




    <?php include './common/footer.php'; ?>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../script/common.js"></script>
</body>
</html>