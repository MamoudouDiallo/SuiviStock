<?php
 include_once 'header.php';
 include_once 'footer.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>DashboardKit Bootstrap 5 Admin Template</title>
</head>

<body class="">

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- support-section start -->
            
            
            <!-- support-section end -->
            <!-- customer-section start -->
            <div class="col-xl-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h6>les Statisques du stock</h6>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-12">
                                <div id="satisfaction-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card table-card">
                    <div class="card-header">
                        <h5>New Products</h5>
                    </div>
                    <div class="pro-scroll" style="height:255px;position:relative;">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>HeadPhone</td>
                                        <td><img src="dashboardkit-main/dist/assets/images/widget/p1.jpg" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-warning">Pending</label></div>
                                        </td>
                                        <td>$10</td>
                                        <td><a href="#!"><i class="icon feather icon-edit f-16  text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 6</td>
                                        <td><img src="dashboardkit-main/dist/assets/images/widget/p2.jpg" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-danger">Cancel</label></div>
                                        </td>
                                        <td>$20</td>
                                        <td><a href="#!"><i class="icon feather icon-edit f-16  text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Jacket</td>
                                        <td><img src="dashboardkit-main/dist/assets/images/widget/p3.jpg" alt="" class="img-20"></td>
                                        <td>
                                            <div><label class="badge bg-light-success">Success</label></div>
                                        </td>
                                        <td>$35</td>
                                        <td><a href="#!"><i class="icon feather icon-edit f-16 text-success"></i></a><a href="#!"><i class="feather icon-trash-2 ml-3 f-16 text-danger"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- customer-section end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<!-- [ Main Content ] end -->
<!-- Warning Section start -->
<!-- Older IE warning message -->
<!--[if lt IE 11]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade
        <br/>to any of the following web browsers to access this website.
    </p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="dashboardkit-main/dist/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="dashboardkit-main/dist/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="dashboardkit-main/dist/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="dashboardkit-main/dist/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="dashboardkit-main/dist/assets/images/browser/ie.png" alt="">
                    <div>IE (11 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
</body>

</html>
