<?php 
$sayfa = "Profil";
include('include/head.php');

session_start();
if(!isset($_SESSION['login'])){
  session_destroy();
  header('Location: /blog/User.php');
  
}
?>


        <!-- -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper"> <!-- genel bir container body gibi -->
           

            <!-- Content Header (Page header) -->
            <section class="content-header"> 
                <!-- container-fluid -->
                <div class="container-fluid"> <!-- padding olmayan container (content header için tanımlı !!) -->
                    <div class="row mb-2">  <!--row = satır, mb = margin-bottom -->
                        <div style="background-color:red;" class="col-sm-2">
                            <h1>Profil</h1>
                        </div>
                        
                    </div>
                    
                </div> <!-- /.container-fluid -->
            </section> <!-- /. Content Header (Page header) -->
            


            <!-- Main content -->
            <section class="content">   <!-- bodynin içindeki container gibi  -->
                
            
         
            
                <div class="container-fluid"> <!-- content containerinin içinde paddingi olan bir container daha -->
                    <div class="row"> <!-- satır oluşturduk (satırın uzunluğu içide bulunduğu container kadar) -->
                        <div class="col-md-3"> <!-- oluşturduğumuz satıra sutun ekledik ve 12/3 lük alan verdik (md = medium responsive site tasarımı için yazılmıştır.) -->


                            <!-- Profile Image -->
                            <div class="card card-primary card-outline"> <!-- card=  ,car-pri=  , card-out= -->
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-card-img profile-user-img img-fluid "
                                        src="../../dist/img/user4-128x128.jpg"
                                        alt="User profile picture">






        </div> <!-- /.contnet wrapper -->













































<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>



<?php
include('include/footer.php');
?>