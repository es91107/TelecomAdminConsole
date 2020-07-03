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
                                        

                                        <a href="transaction.php">
                                            <i class="metismenu-icon"></i>
                                            基本交易資料
                                        </a>
                                    </li>
                                    <li>
                                        <a href="single_chart.php"  class="mm-active">
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
                                <div>Single Chart
                                    <div class="page-title-subheading">以下為此客戶的 Chart。
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="chart_div1" class="col-md-5">
                        </div>
                        <div id="" class="col-md-1">
                        </div>
                        <div id="chart_div2" class="col-md-5">
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart1);
        google.charts.setOnLoadCallback(drawChart2);

    function drawChart1() {
      var jsonData = $.ajax({
          url: "get_chart_fromDB.php",
          dataType: "json",
          async: false
          }).responseText; // 存進responseText的這個屬性裡
      console.log(jsonData);
      myObj= JSON.parse(jsonData);

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);
      var option = {
        title: '個人超額月租費圖表',
        isStacked: true,
          height: 500,
          width: 500,
          legend: {position: 'top', maxLines: 3},
          vAxis: {title: '總金額 / NTD',minValue: 0},
          hAxis:{title: '月份'}
      }

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
      chart.draw(data, option);
    }

    function drawChart2() {
       jsonData = $.ajax({
          url: "get_chart_fromDB2.php",
          dataType: "json",
          async: false
          }).responseText; // 存進responseText的這個屬性裡
      console.log(2, jsonData);
      myObj= JSON.parse(jsonData);

      


      // Create our data table out of JSON data loaded from server.
      data = new google.visualization.DataTable(jsonData);
      option = {
        title: '通話總時數',
        isStacked: true,
          height: 500,
          width: 500,
          legend: {position: 'top', maxLines: 3},
          vAxis: {title: '分鐘數',minValue: 0},
          hAxis:{title: '月份'}
      }

      // Instantiate and draw our chart, passing in some options.
      chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
      chart.draw(data, option);
    }







    
</script>


</body>

</html>