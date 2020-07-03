<?php
session_start();
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    
    <link href="./custom.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="./main.css" rel="stylesheet">
    
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="row">
                        <div class="form-group col-md-9 mb-3 mt-3 ">
                            <input id="name" type="text" name="name" class="form-control" placeholder="輸入客戶">
                        </div>
    
                        <button value="GO" class="mb-3 mt-3 mr-2 btn btn-primary col-md-2" id="submit2">GO</button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                    <div class="widget-subheading">
                                        VP People Manager
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>        

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src" ></div> 
                    <!-- 換LOGO 的Class  -->
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    
                
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">單一客戶</li>
                            <li>

                                <a href="index.php">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    客戶基本資料
                                </a>
                                
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    客戶交易資料
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        

                                        <a href="transaction.php" class="mm-active">
                                            <i class="metismenu-icon"></i>
                                            基本交易資料
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single_chart.php">
                                            <i class="metismenu-icon"></i>
                                            客戶統計圖表
                                        </a>
                                    </li>
                                </ul>    
                            </li>
                            

                            <li class="app-sidebar__heading">客戶統計</li>
                            <li>
                                <a href="muli_chart.php">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    群體客戶統計圖
                                </a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-monitor icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>詳細交易資料
                                    <div class="page-title-subheading">以下為此客戶的詳細交易資料。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    


                    <!-- 內頁選單 -->


                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>訂單資料</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>更新修改</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                <span>RRRRRRR</span>
                            </a>
                        </li> -->
                    </ul>


                    <!-- 選單內容 -->
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">用戶編號</div>
                                                    <div class="widget-subheading">Last year</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="TransNum"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">用戶姓名</div>
                                                    <div class="widget-subheading">Last year</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info"><?php echo $_SESSION['name_result']?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">列帳期間</div>
                                                    <div class="widget-subheading">Bill Period</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="transactionMonth"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">本期帳單編號</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="SN"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">本期應繳金額</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="TotalAmount"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">繳款期限</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="DueDate"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">繳款方式</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="paymentMethod"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">費率型號</div>
                                                    <div class="widget-subheading">Last year expenses</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="contract"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">網內撥打時間</div>
                                                    <div class="widget-subheading">innerCall</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="innerCall"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">網外撥打時間</div>
                                                    <div class="widget-subheading">outerCall</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="outerCall"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">國際撥打時間</div>
                                                    <div class="widget-subheading">internationalCall</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="internationalCall"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">網路流量</div>
                                                    <div class="widget-subheading">NetworkUsage</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="NetworkUsage"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4">
                                    <div class="card mb-3 widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">網路時間</div>
                                                    <div class="widget-subheading">NetworkTime</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-info" id="NetworkTime"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            
                        </div>

                    
                        <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                            <form id="update_form">
                            <div class="row">
                                
                                    <input type="hidden" name="id" id="id_update">
                                
                                <div class="col-md-4 input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon3">本期應繳金額</span>
                                    </div>
                                    <input type="text" class="form-control" name="amount" id="amount_update" aria-describedby="basic-addon3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" >$ NTD</span>
                                      </div>
                                </div>

                                <div class="col-md-4 input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon3">本期繳款期限</span>
                                    </div>
                                    <input type="text" class="form-control" name="due" id="due_update" aria-describedby="basic-addon3">
                                    
                                </div>

                                <div class="col-md-4 input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon3">費率型號</span>
                                    </div>
                                    <input type="text" class="form-control" name="type" id="type_update" aria-describedby="basic-addon3">
                                    
                                </div>

                                <div class="col-md-4 input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon3">網內撥打時間</span>
                                    </div>
                                    <input type="text" class="form-control" name="innerCall" id="innerCall" aria-describedby="basic-addon3">
                                    
                                </div>

                                <div class="col-md-4 input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon3">網外撥打時間</span>
                                    </div>
                                    <input type="text" class="form-control" name="outerCall" id="outerCall" aria-describedby="basic-addon3">
                                    
                                </div>

                                <div class="col-md-4 input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon3">國際撥打時間</span>
                                    </div>
                                    <input type="text" class="form-control" name="internationalCall" id="internationalCall" aria-describedby="basic-addon3">
                                    
                                </div>

                                <div class="col-md-4 input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon3">網路流量</span>
                                    </div>
                                    <input type="text" class="form-control" name="NetworkUsage" id="NetworkUsage" aria-describedby="basic-addon3">
                                    
                                </div>

                                <div class="col-md-4 input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon3">網路時間</span>
                                    </div>
                                    <input type="text" class="form-control" name="NetworkTime" id="NetworkTime" aria-describedby="basic-addon3">
                                    
                                </div>

                            </div>
    

                            <div class="row">
                                <div class="col-md-3 offset-5" style="padding-top: 35px;">
                                    <button type="button" id="update_btn" name="update" class="mb-5 mt-2 btn btn-success btn-lg marginTop">提交更新</button>
                                </div>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>


                <!-- Footer -->
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="container">
                                <p class="m-0 text-center">&copy; 2020 孫偉倫 All rights reserved</p>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>   
            </div>

        
    </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <script type="text/javascript" src="./custom.js"></script>
    <script>
    function fetch_dataBySession(){
    var name_result='<?php echo $_SESSION["name_result"]; ?>';

    if(name_result){
     
        $.ajax({
            url: "data.php?name="+name_result,
            dataType: "json",
            async: false,
            success: function(data) {
                console.log(data);
                for (x in data) {
                    if (x == 0) {
                        user = data[x]
                        $('#user_name').text(user['name']);
                        $('#user_gender').text(user['gender']);
                        $('#user_age').text(user['birthdate']);
                        $('#user_phone').text(user['phone']);
                        $('#user_address').text(user['address']);
                        $('#user_id').text(user['ID']);
                        $('#id_update').val(user['ID']);
                    }
                    break;
                };
            },

            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });            


        $.ajax({
            url: "transaction_operate.php?name="+name_result,
            dataType: "json",
            async: false,

            success: function(data) {
                console.log(data);
                for (x in data) {
                    if (x == 0) {
                        user = data[x]
                        $('#TransNum').text(user['TransNum']);
                        $('#transactionMounth').text(user['transactionMounth']);
                        $('#SN').text(user['SN']);
                        $('#TotalAmount').text(user['TotalAmount']+' 元');
                        $('#DueDate').text(user['DueDate']);
                        $('#paymentMethod').text(user['paymentMethod']);
                        $('#contract').text(user['contract']);
                        $('#transactionMonth').text(user['transactionMonth']+'月');
                        $('#innerCall').text(user['innerCall']+' 分鐘');
                        $('#outerCall').text(user['outerCall']+' 分鐘');
                        $('#internationalCall').text(user['internationalCall']+' 分鐘');
                        $('#NetworkUsage').text(user['NetworkUsage']+' Mbps');
                        $('#NetworkTime').text(user['NetworkTime']+' 分鐘');
                    }
                    break;
                };
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }

        })
    };
}

fetch_dataBySession();

$("#update_btn").click(function(event){
    event.preventDefault;
    var formdata = new FormData($("#update_form")[0]);
    console.log(formdata)

        $.ajax({
            url: "update.php",
            type: "POST",
            cache: false,
            data: formdata,
            // dataType: "json",
            processData: false,
            contentType: false,

            success: function(data) {
                console.log(data);
                fetch_data();
                $('#tab-0').tab('show')
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }

        })
})
</script>


</body>

</html>