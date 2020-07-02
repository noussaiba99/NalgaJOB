<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NalgaJOB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- flag-icon-css -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
 
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 <style>
     @import "compass/css3";

$rad: 8px;

.rating {
	background: #fff;
}

input[type="radio"] {
	position: fixed;
	top: 0;
	right: 100%;
}



input[type="radio"]:checked ~ input +label{
	background: none;
	color: #aaa;
}

input  {
	background: #fff;
	color: orange;
	margin: 0 0 1em 0;
    border-top-left-radius: $rad;
	border-bottom-left-radius: $rad;
}



input:checked {
	border-top-right-radius: $rad;
	border-bottom-right-radius: $rad;
}

hr {
	clear: both;
	border: 0;
	border-top: 2px solid #999;
	margin: 2em 0;
}


 </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->

    <ul class="navbar-nav">
 
   
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contactez-nous</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="images/1.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Noussaiba ABOUTALEB
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Un appel stp</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 3 Heures</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/images/4.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                Khensa Amani DAOUDI
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">c'est bon nethala fik  </p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Heures</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="./images/3.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                 Maroua YAMAMI
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">ok</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Heures</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Voir tous les messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 nouveaux messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 nouveaux signals
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">Voir tous les notifications</a>
        </div>
      </li>
      
       <!-- Language Dropdown Menu -->
       <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="flag-icon flag-icon-fr"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="#" class="dropdown-item active">
            <i class="flag-icon flag-icon-fr mr-2"></i> Français
          </a>
          <a href="#" class="dropdown-item">
            <i class="flag-icon flag-icon-dz mr-2"></i> عربية
          </a>
          <a href="#" class="dropdown-item">
            <i class="flag-icon flag-icon-us mr-2"></i> English
          </a>
        </div>
    
    <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="/images/1.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline">Noussaiba ABOUTALEB</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
          <li class="user-header bg-primary">
            <img src="/images/1.png" class="img-circle elevation-2" alt="User Image">

            <p>
            Noussaiba ABOUTALEB- WEB Developer
              <small>Membre dés avr,2021</small>
            </p>
          </li>
          <!-- Menu Body -->
          
          <!-- Menu Footer-->
          <li class="user-footer">
            <a href="#" class="btn btn-default btn-flat">Profile</a>
            <a href="#" class="btn btn-default btn-flat float-right">Déconnecter</a>
          </li>
        </ul>
      </li>
      
    </ul>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-white elevation-0">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/images/logo.png"
           alt="NalgaJOB Logo"
           class=" img-responsive elevation-0"
           style="opacity: .9;max-width: 45%;length:auto;margin:-25px 0px 0px 0px">
    </a>
</aside>
  <!-- /.navbar -->

  

    <!-- Main content -->
    <section class="content">

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
          <div class="col-md-6">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                   
                <div class="text-center">
                
                  <img class="profile-user-img img-fluid img-circle"
                       src="/images/1.png"
                       alt="User profile picture">
                </div>
               

                <h3 class="profile-username text-center">Noussaiba ABOUTALEB</h3>
                
                <p class="text-muted text-center">Web Developer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                  <div class="d-flex justify-content-center">

                  <div class="rating justify-content-center">
                          <input type="radio" name="test" id="one" checked />
                          <label for="one"><i class="fa fa-star"></i></label>
                          <input type="radio" name="test" id="two" />
                          <label for="two"><i class="fa fa-star"></i></label>
                          <input type="radio" name="test" id="three" />
                          <label for="three"><i class="fa fa-star"></i></label>
                          <input type="radio" name="test" id="four" />
                          <label for="four"><i class="fa fa-star"></i></label>
                          <input type="radio" name="test" id="five" />
                          <label for="five"><i class="fa fa-star"></i></label>
                      </div> 
                      </div>     
                     </li>
                     <li>
                     <div class="text-center mt-5 mb-2">
                    <a href="#" class="btn  btn-primary btn-lg">Envoyer message</a>
                    <a href="#" class="btn  btn-warning btn-lg">Signaler profil</a>
                    </div>
                     </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> A propos de moi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Résumé </strong>
                <div class="d-flex justify-content-end">
                          <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                          </div>                         
                </div>
                <p></p>
                <p class="text-muted">
                  une étudiante en informatique
                  passionnée par l'apprentissage de nouvelles
                  technologies dans le domaine du
                  développement Web / Desktop, de UI Design,
                  la cybersécurité, la communication et du
                  marketing digital.
                  Le vrai plaisir pour moi est de tout savoir sur
                  mon domaine et savoir au moins une chose
                  à propos des autres domaines.       
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Région</strong>
                <div class="d-flex justify-content-end">
                          <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                          </div>                         
                </div>

                <p class="text-muted">Alger, Algérie</p>

                <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Etudes</strong>
                      <div class="d-flex justify-content-end">
                          <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                          </div>                         
                        </div>
                <p></p>
               <p><i class="fas fa-university mr-1"> </i> Diplome ingénieure, ingénieurie informatique <strong>ESI,Alger</strong></p> 
               <p><i class="fas fa-university mr-1"></i>Bac mathèleme, mention trés bien <strong>Lycée  mohamed lamine debaghine, les eucalyptus</strong></p> 
               <hr>
                <strong><i class="fas fa-pencil-alt mr-1"></i> Experiences</strong>
                <div class="d-flex justify-content-end">
                          <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                          </div>                         
                        </div>
                <p></p>
               <p><i class="fas fa-user-secret mr-1"> </i> Community manager <strong>Shellmates Club</strong></p> 
               <p><i class="fas fa-google mr-1"></i>Marketing member <strong>GDG Algiers</strong></p> 

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Compétences</strong>
                <div class="d-flex justify-content-end">
                          <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                          </div>                         
                        </div>

                <p class="text-muted">
                  <span class="tag tag-danger">  Laravel Framework ,</span>
                  <span class="tag tag-danger"> PHP ,</span>
                  <span class="tag tag-danger">  JavaScript ,</span>
                  <span class="tag tag-success">  SQL server ,</span>
                  <span class="tag tag-info">  Bootstrap</span>
                  <span class="tag tag-warning">  Adobe illustrator ,</span>
                  <span class="tag tag-warning">  Docker</span>

                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Contacts</strong>
                <div class="d-flex justify-content-end">
                          <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info"><i class="fas fa-edit"></i></a>
                          </div>                         
                        </div>
                 
                <p class="text-muted">
                Téléphone# : +213669699864
                </p>
                <p class="text-muted">
                Email@ : hn_aboutaleb@esi.dz
                </p>
              </div>
              <!-- /.card-body -->
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

  <footer class="main-footer">
  <div class="d-flex justify-content-center">

    <strong>Copyright &copy; 2020 <a href="#">NalgaJOB</a>.</strong> tous droits réservés
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
