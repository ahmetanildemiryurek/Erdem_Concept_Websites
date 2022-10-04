<?php 
session_start();
ob_start();

if(!isset($_SESSION['admin-erdemconcept123456'])){
  header('location: index.php');
} 
?>

 
  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin paneli || Erdem Concept</title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.php" class="nav-link">Ana Sayfa</a>
      </li>
    </ul>

<aside class="main-sidebar sidebar-dark-primary elevation-4">


    <a href="admin.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Paneli</span>
    </a>


     
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item has-treeview menu-close">
            <a href="admin.php" class="nav-link active">
              
              <p>
                Ana Sayfa
                <i class="right fas fa-angle-left">

                </i>
              </p>
            </a> 
          <li class="nav-item has-treeview">
            <a href="ürün.php" class="nav-link">
              <p>
                Ürünler 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>

        

             <li class="nav-item has-treeview">
            <a href="projeler.php" class="nav-link">
              <p>
               Projeler 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="referans.php" class="nav-link">
              <p>
                Referanslar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a> 
          </li>

          <li class="nav-item has-treeview">
            <a href="hakkımızda.php" class="nav-link">
              <p>
                Hakkımızda
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview text-danger">
            <a href="cikis.php" class="nav-link text-danger">
              <p>
                Çıkış Yap
                <i class="fas fa-sign-out-alt right"></i>
              </p>
            </a>
          </li>
          
    </div>
  </aside>
  
