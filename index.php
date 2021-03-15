<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>THANH NIEN VIETNAM - VUNG TIN TIEP BUOC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- All css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/ie7.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* width */
        .tab-pane {
            height: 450px;
            width: auto;
            overflow: auto;
        }



        .single-product-item {
            background: linear-gradient(to right, #90d7f7, #e7c1da);
            border-radius: 10px;
        }

        /* SCROLL BAR CUSTOM */
        /* open scroll bar */
        .scroll-bar::-webkit-scrollbar {
            overflow-y: scroll;
        }

        /* custom background scroll bar */
        .scroll-bar::-webkit-scrollbar-track {
            background-color: white;
            border-radius: 10px;
        }

        /* Handle scroll bar */
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #90d7f7, #e7c1da);
            border-radius: 10px;
        }

        /* END SCROLL BAR CUSTOM */
    </style>
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <div class="shop-area pt-110 pb-100 bg-gray mb-95 shop-full-width">
        <div class="ht-product-shop tab-content" style="margin-left: 400px; margin-top:80px; margin-right:20px;">
            <div class="tab-pane active show fade scroll-bar" id="list" role="tabpanel">
                <?php for ($i = 1; $i < 10; $i++) { ?>

                    <div class="single-product-item">
                        <div class="row">
                            <div class="col-md-2">
                                <a href="product-details.html">
                                    <img src="assets/img/logo.png" alt="" width="100px" height="100px" href="#">
                                </a>
                            </div>
                            <div class="col-md-10">
                                <h5 style="color: #2c2da5; font-weight:bold; font-size:1.8em; padding-bottom:10px;">NGUYỄN VĂN ABC </h5>
                                <h5 style="color: #2c2da5; font-weight:bold; font-size:1.5em; padding-bottom:10px;">Đơn vị: Đoàn TNCS Hồ Chí Minh có nhũng chương trình Đoàn TNCS Hồ Chg</h5>
                                <h5 style="color: #2c2da5; font-size:1.3em;">Đoàn TNCS Hồ Chí Minh có nhũng chương trình Đoàn TNCS Hồ Chí Minh có nhũng chương trìnhĐoàn TNCS Hồ Chí Minh có nhũng chương trìnhĐoàn TNCS Hồ Chí Minh có nhũng chương trình</h5>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
        <!-- All js here -->
        <script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/ajax-mail.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>