<?php 
$sayfa = "Profil";
include('include/head.php');

session_start();
if(!isset($_SESSION['login'])){
  session_destroy();
  header('Location: /blog/User.php');
  
}

?>





<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profil</h1>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-card-img profile-user-img img-fluid " src="../../dist/img/user4-128x128.jpg"
                  alt="User profile picture">
              </div>

              <h3 class="profile-card-text profile-username text-center">Nina Mcintire</h3>

              <p class="profile-card-text text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Followers</b> <a class="float-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="float-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="float-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">

            <!-- /.card-header -->

            <!-- BU POSTLAR CARDLARA SIĞDIRILICAK ****************************************************************************-->

            <div class="card-body" style="margin: 15px; color: #ffffff;">
              <strong><i class="fas fa-book mr-1"></i> Bio</strong>

              <p class="text-muted" style="color: #ffffff;">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="profile-btn nav-link active" href="#activity"
                    data-toggle="tab">Bloglarım</a></li>
                <li class="nav-item"><a class="profile-btn nav-link " href="#timeline" data-toggle="tab">İçerik Ekle</a>
                </li>
                <li class="nav-item"><a class="profile-btn nav-link " href="#settings" data-toggle="tab">Ayarlar</a>
                </li>
                <li class="nav-item"><a class="profile-btn nav-link " href="/blog/blog_logout.php"
                    role="button"><i>Çıkış Yap</i></a></li>


              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">


                <div class="active tab-pane" id="activity">
                  <!--   bloglarım -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">

                      <div class="tm-content-box">
                        <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                          consequat mauris dapibus id. Donec
                          scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">

                      <div class="tm-content-box">
                        <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                          consequat mauris dapibus id. Donec
                          scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">Read More</a>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">

                      <div class="tm-content-box">
                        <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                          consequat mauris dapibus id. Donec
                          scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">READ MORE</a>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">

                      <div class="tm-content-box">
                        <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #4</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                          consequat mauris dapibus id. Donec
                          scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">Read More</a>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">

                      <div class="tm-content-box">
                        <img src="img/tm-img-310x180-4.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #4</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                          consequat mauris dapibus id. Donec
                          scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">Read More</a>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">

                      <div class="tm-content-box">
                        <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #4</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                          consequat mauris dapibus id. Donec
                          scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">Read More</a>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">

                      <div class="tm-content-box">
                        <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #4</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                          consequat mauris dapibus id. Donec
                          scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">Read More</a>
                      </div>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3 card-blog">

                      <div class="tm-content-box">
                        <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #4</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                          consequat mauris dapibus id. Donec
                          scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">Read More</a>
                      </div>

                    </div>
                  </div>

                </div>
                <!-- /.bloglarım -->


                <!-- İÇERİK OLUŞTUR SAYFASI BAŞLANGIÇ*************-->

                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                  <!-- Content Wrapper. Contains page content -->
                  <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                      <div class="container-fluid">
                        <div class="row mb-2">


                        </div>
                      </div><!-- /.container-fluid -->

                    </section>

                    <!-- Main content -->

                    <section class="content">
                      <form action="include/functions.php" method="POST">
                        <div class="row">

                          <div style="margin-top:15px;" class="col-md-12">

                            <form action="index.html" method="post" class="tm-contact-form">
                              <div class="form-group">
                                <input style="border: white !important;" type="text" id="XNAMEX" name="contact_name"
                                  class="form-control" placeholder="Name" required />
                              </div>
                              <hr>
                              <div class="form-group">
                                <input style="border: white !important;" type="email" id="XMAILX" name="contact_email"
                                  class="form-control" placeholder="Email" required />
                              </div>
                              <hr>
                              <div class="form-group">
                                <input style="border: white !important;" type="text" id="XSUBJECTX"
                                  name="contact_subject" class="form-control" placeholder="Subject" required />
                              </div>
                              <hr>
                              <div class="form-group">
                                <textarea style="border: white !important;" id="XMESSAGEX" name="contact_message"
                                  class="form-control" rows="6" placeholder="Message" required></textarea>
                              </div>


                              <button type="submit" class="tm-btn">Submit</button>
                            </form>

                          </div>
                        </div>
                        <!-- /.col-->
                  </div>


                  <!-- ./row -->
  </section>

  <!-- /.content-wrapper -->
</div>


<!-- /.tab-pane -->
<!-- İÇERİK OLUŞTUR SAYFASI BİTİŞ**************-->


<!-- /.tab-pane -->

</div>
<!-- /.tab-content -->
</div><!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->






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