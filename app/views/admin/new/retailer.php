<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Haykpo | Retailer Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo SITEURL ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo SITEURL ?>/assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo SITEURL ?>/assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo SITEURL ?>/assets/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo SITEURL ?>/assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- enyodashboard Theme style -->
    <link href="<?php echo SITEURL ?>/assets/dist/css/enyodashboard.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>Haykpo</b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="label label-danger">10</span></a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#"><i class="fa fa-users text-aqua"></i> 5 new members joined today</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-users text-red"></i> 5 new members joined</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-shopping-cart text-green"></i> 25 sales made</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-user text-red"></i> You changed your username</a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all</a>
                  </li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo SITEURL ?>/assets/dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo SITEURL ?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Alexander Pierce - Web Developer<small>Member since Nov. 2012</small></p>
                  </li>
                  <!-- Menu Body -->
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview" data-pg-collapsed>
              <a href="#dashboard"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
            </li>
            <li data-pg-collapsed>
              <a href="#station"><i class="fa fa-th"></i> <span>Stations</span> </a>
            </li>
            <li>
              <a href="#history"><i class="fa fa-bar-chart-o"></i> History</a>
              <a href="#partner"><i class="fa fa-users"></i> Partners</a>
            </li>
            <li>
              <a href="#setting"><i class="fa  fa-gear"></i> Account Settings</a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header" id="dashboard" data-pg-collapsed>
          <h1>Dashboard</h1>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Partners</li>
          </ol>
        </section>

        <section class="content" data-pg-collapsed>
          <!-- Small boxes (Stat box) -->
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-sm-8">
              <div class="box box-success" data-pg-collapsed>
                <div class="box-header">
                  <h3 class="box-title"><select>
                      <option value="-1" selected>Product Sold</option>
                    </select><sup class="gray">Last 10 days</sup></h3>
                </div>
                <h4 class="box-title"><ul class="list-inline">
                    <span><strong>11,000</strong></span>
                    <sub class="gray">Total</sub>
                    <li>
                      <i class="fa fa-circle text-primary"></i> Petrol
                    </li>
                    <li>
                      <i class="fa fa-circle text-yellow"></i> Diesel
                    </li>
                    <li>
                      <i class="fa fa-circle text-red"></i> Diesel
                    </li>
                  </ul></h4>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- TABLE: LATEST ORDERS -->
              <!-- /.box -->
            </div>
            <div class="col-md-4" data-pg-collapsed>
              <div class="ov-box box-shadow">
                <h5 class="text-left">Order Value <sup class="gray">Today</sup></h5>
                <h2><span>N20,000.01</span><img src="<?php echo SITEURL ?>/assets/images/svg/Arrow%20(2).svg"><span class="green">43%</span></h2>
                <p class="text-right gray">since yesterday</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="box box-success" data-pg-collapsed>
                <div class="box-header">
                  <h3 class="box-title"><span>Revenues</span> <span class="gray">Last 10 days</span></h3>
                  <h3>N15,000</h3>
                  <h6 class="gray">Period Jan 1 - Jan 10</h6>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart1" style="height: 300px;"></div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- TABLE: LATEST ORDERS -->
              <!-- /.box -->
            </div>
            <div class="col-sm-6">
              <div class="box box-success" data-pg-collapsed>
                <div class="box-header">
                  <h3 class="box-title"><select>
                      <option value="-1" selected>Product Sold</option>
                    </select><sup class="gray">Last 10 days</sup></h3>
                </div>
                <h4 class="box-title"><ul class="list-inline">
                    <li>
                      <i class="fa fa-circle text-primary"></i>
                      3, 724
                      <h6 class="gray">New Customers</h6>
                    </li>
                    <li>
                      <i class="fa fa-circle text-yellow"></i> 5, 788
                      <h6 class="gray">Recurring Customers</h6>
                    </li>
                    <li>
                      <i class="fa fa-circle text-red"></i>1, 231
                      <h6 class="gray">Returning Customers</h6>
                    </li>
                  </ul></h4>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row (main row) -->
        </section>
        <section class="content-header" id="history">
          <h1>History</h1>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">history</li>
          </ol>
        </section>
        <section class="content" data-pg-collapsed>
          <!-- Small boxes (Stat box) -->
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-sm-12" data-pg-collapsed>
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">All History</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse">
                      <i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body" data-pg-collapsed>
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>Date</th>
                          <th>Product</th>
                          <th>Station</th>
                          <th>Quantity</th>
                          <th>Price</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php foreach($data['history'] as $customer): ?>
                        <tr>
                          <td>
                            <a href="#"><?php echo get_formatted_date($customer->order_date_added)?></a>
                          </td>
                          <td><?php echo $customer->product_name?></td>
                          <td>Enyo Retail</td>
                          <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $customer->order_litres?> Litres</div>
                          </td>
                          <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $customer->order_amount?></div>
                          </td>
                        </tr>
                    <?php endforeach?>
                      </tbody>
                    </table>
                  </div>
                  <div class="box-body chart-responsive">
                    <div class="chart" id="bar-chart8" style="height: 300px;">
                      <form>
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="password" name="password" class="form-control" placeholder="current password">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="password" name="cpassword" class="form-control input-group form-group" placeholder="new password">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input type="password" name="conpass" class="form-control input-group form-group" placeholder="confirm password">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="button" class="btn btn-primary text-uppercase" value="update">
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- TABLE: LATEST ORDERS -->
                <!-- /.box -->
              </div>
              <!-- /.box -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row (main row) -->
        </section>
        <section class="content-header" id="partner" data-pg-collapsed>
          <h1>
          Partners</h1>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Partners</li>
          </ol>
        </section>
        <section class="content" data-pg-collapsed>
          <!-- Small boxes (Stat box) -->
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-sm-12">
              <ul class="nav nav-tabs" data-pg-collapsed>
                <li class="active">
                  <a href="#tab1" data-toggle="tab">All</a>
                </li>
                <li>
                  <a href="#tab2" data-toggle="tab">Recently Added</a>
                </li>
                <li class="pull-right">
                  <button class="btn btn-primary add-btn">Add New</button>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">All Partners</h3>
                      <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse">
                          <i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" data-pg-collapsed>
                      <div class="table-responsive">
                        <table id="allPartnerTable" class="table no-margin">
                          <thead>
                            <tr>
                              <th>
                                <input class="control-label" type="checkbox" value="">
                              </th>
                              <th>Partner</th>
                              <th>Location</th>
                              <th>View</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                        <?php foreach ($data['partners'] as $partner) { ?>
                            <tr>
                              <td>
                                <input class="control-label" type="checkbox" value="">
                              </td>
                              <td><span><?php echo $partner->partner_name ?></span></td>
                              <td><span><?php echo $partner->partner_location ?></span></td>
                              <td>
                                <button pid="<?php echo $partner->partner_id ?>" type="button" class="btn  btn-success">Label</button>
                              </td>
                              <td>
                                <button pid="<?php echo $partner->partner_id ?>" type="button" class="btn  btn-danger">Label</button>
                              </td>
                            </tr>
                            <?php }; ?>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                      <ul class="pagination pull-right" data-pg-collapsed>
                        <li>
                          <a href="#"><i class="fa fa-long-arrow-left"></i> &nbsp;Prev</a>
                        </li>
                        <li class="active">
                          <a href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                          <a href="#">2</a>
                        </li>
                        <li>
                          <a href="#">3</a>
                        </li>
                        <li>
                          <a href="#">Next &nbsp;<i class="fa fa-long-arrow-right"></i></a>
                        </li>
                      </ul>
                      <span class="bottom"> Show: <select name="datesearch">
                          <option value="-1" selected>10 Results</option>
                        </select></span>
                    </div>
                    <!-- /.box-footer -->
                  </div>
                </div>
                <div class="tab-pane" id="tab2">
                  <p>Tab 2 content goes here...</p>
                </div>
                <div class="tab-pane" id="tab3">
                  <p>Tab 3 content goes here...</p>
                </div>
                <div class="tab-pane" id="tab4">
                  <p>Tab 4 content goes here...</p>
                </div>
              </div>
              <!-- TABLE: LATEST ORDERS -->
              <!-- /.box -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row (main row) -->
        </section>


        <section class="content-header" id="setting" data-pg-collapsed>
          <h1>Account Settings</h1>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li class="active">Account Settings</li>
          </ol>
        </section>
        <section class="content" data-pg-collapsed>
          <!-- Small boxes (Stat box) -->
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- ./col -->
            <!-- ./col -->
            <div class="col-sm-8">
              <div class="box box-success" data-pg-collapsed>
                <div class="box-header">
                  <h3 class="box-title"><select>
                      <option value="-1" selected>Product Sold</option>
                    </select><sup class="gray">Last 10 days</sup></h3>
                </div>
                <h4 class="box-title"><ul class="list-inline">
                    <span><strong>11,000</strong></span>
                    <sub class="gray">Total</sub>
                    <li>
                      <i class="fa fa-circle text-primary"></i> Petrol
                    </li>
                    <li>
                      <i class="fa fa-circle text-yellow"></i> Diesel
                    </li>
                    <li>
                      <i class="fa fa-circle text-red"></i> Diesel
                    </li>
                  </ul></h4>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- TABLE: LATEST ORDERS -->
              <!-- /.box -->
            </div>
            <div class="col-md-4" data-pg-collapsed>
              <div class="ov-box box-shadow">
                <h5 class="text-left">Order Value <sup class="gray">Today</sup></h5>
                <h2><span>N20,000.01</span><img src="<?php echo SITEURL ?>/assets/images/svg/Arrow%20(2).svg"><span class="green">43%</span></h2>
                <p class="text-right gray">since yesterday</p>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="box box-success" data-pg-collapsed>
                <div class="box-header">
                  <h3 class="box-title"><span>Revenues</span> <span class="gray">Last 10 days</span></h3>
                  <h3>N15,000</h3>
                  <h6 class="gray">Period Jan 1 - Jan 10</h6>
                </div>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- TABLE: LATEST ORDERS -->
              <!-- /.box -->
            </div>
            <div class="col-sm-6">
              <div class="box box-success" data-pg-collapsed>
                <div class="box-header">
                  <h3 class="box-title"><select>
                      <option value="-1" selected>Product Sold</option>
                    </select><sup class="gray">Last 10 days</sup></h3>
                </div>
                <h4 class="box-title"><ul class="list-inline">
                    <li>
                      <i class="fa fa-circle text-primary"></i>
                      3, 724
                      <h6 class="gray">New Customers</h6>
                    </li>
                    <li>
                      <i class="fa fa-circle text-yellow"></i> 5, 788
                      <h6 class="gray">Recurring Customers</h6>
                    </li>
                    <li>
                      <i class="fa fa-circle text-red"></i>1, 231
                      <h6 class="gray">Returning Customers</h6>
                    </li>
                  </ul></h4>
                <div class="box-body chart-responsive">
                  <div class="chart" id="bar-chart" style="height: 300px;"></div>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row (main row) -->
        </section>
        <!-- Main content -->
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong>Copyright &copy; Haykpo  2018</strong> All rights reserved.
      </footer>
      <div class="popup-overlay" data-pg-collapsed>
        <div class="popup-body box-shadow text-left">
          <h2 class="text-center text-capitalize">new order</h2>
          <h3>Product</h3>
          <ul class="list-unstyled">
            <li>10.4L of Petrol</li>
            <li>10L of Diesel</li>
          </ul>
          <h3>Reciever’s Details</h3>
          <ul class="list-unstyled">
            <li>
              <strong>Name:</strong> Adegorilla Olumonkey
            </li>
            <li>
              <strong>Phone: </strong> 081 234 5678
            </li>
            <li>
              <strong>Address:</strong> Blk 83, Plot 4, Herbert
              Macaulay way, Yaba.
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ./wrapper -->
    <!-- jQuery 2.1.3 -->
    <script src="<?php echo SITEURL ?>/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo SITEURL ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="<?php echo SITEURL ?>/assets/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo SITEURL ?>/assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo SITEURL ?>/assets/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo SITEURL ?>/assets/dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script src="<?php echo SITEURL ?>/assets/js/charts.js" type="text/javascript"></script>

  </body>
</html>
