<?php
$hlm = "Toko";
if(uri_string()!=""){
  $hlm = ucwords(uri_string());
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>- Toko - <?php echo $hlm ?></title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?php echo base_url()?>SBAdmin/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    <?= $this->include('components/header') ?>
        <div id="layoutSidenav">
            <?= $this->include('components/sidebar') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item">Home</li>
                               <?php
                               if($hlm!="Home"){
                               ?>
                           <li class="breadcrumb-item"><?php echo $hlm?></li> 
                                <?php
                              }
                              ?> 
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Ini adalah UTS milik Muhammad Wahyu Raditya A11.2023.14948 yang menggunakan template SBAdmin
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $hlm?></h5>
                                <?= $this->renderSection('content') ?>
                            </div>
                        </div>
                    </div>
                </main>
                <?= $this->include('components/footer') ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()?>SBAdmin/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url()?>SBAdmin/js/datatables-simple-demo.js"></script>
    </body>
</html>
