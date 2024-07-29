<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Admin Dashboard</title>
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href=" {{ asset('Back_auth/assets/img/favicon.png')}}"
    />
    <link rel="stylesheet" href="{{ asset('Back_auth/assets/css/bootstrap.min.css')}}" />
    <link
      rel="stylesheet"
      href="{{ asset('Back_auth/assets/plugins/fontawesome/css/fontawesome.min.css')}}"
    />
    <link rel="stylesheet" href="{{ asset('Back_auth/assets/plugins/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('Back_auth/assets/css/feathericon.min.css')}}" />
    <link rel="stylehseet" href="{{ asset('Back_auth/https://cdn.oesmith.co.uk/morris-0.5.1.css')}}" />
    <link rel="stylesheet" href="{{ asset('Back_auth/assets/plugins/morris/morris.css')}}" />
    <link rel="stylesheet" href="{{ asset('Back_auth/assets/css/style.css')}}" />
   // Fin Dashbord Link 
  </head>

  <body>
   // Main wrapper 
    <div class="main-wrapper">
     // Debut Header #
      <div class="header">
        <div class="header-left">
          <a href="index.html" class="logo">
            <img
              src="{{ asset('Back_auth/assets/img/logo.png')}}"
              width="50"
              height="70"
              alt="logo"
            />
            <span class="logoclass">John Doe</span>
          </a>
          <a href="index.html" class="logo logo-small">
            <img
              src="{{ asset('Back_auth/assets/img/logo.png')}}"
              alt="Logo"
              width="30"
              height="30"
            />
          </a>
        </div>
        <a href="javascript:void(0);" id="toggle_btn">
          <i class="fe fe-text-align-left"></i>
        </a>
        <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
        <ul class="nav user-menu">
          
          <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <span class="user-img"
                ><img
                  class="rounded-circle"
                  src="{{ asset('Back_auth/assets/img/profiles/avatar-01.png')}} "
                  width="31"
                  alt="John Doe"
              /></span>
            </a>
            <div class="dropdown-menu">
              <div class="user-header">
                <div class="avatar avatar-sm">
                  <img
                    src="{{ asset('Back_auth/assets/img/profiles/avatar-01.png')}} "
                    alt="User Image"
                    class="avatar-img rounded-circle"
                  />
                </div>
                <div class="user-text">
                  <h6>John Doe</h6>
                  <p class="text-muted mb-0">Administrateur</p>
                </div>
              </div>
              <a class="dropdown-item" href="profile.html">Profile</a>
              <a class="dropdown-item" href="settings.html">Paramettre</a>

              <!-- Add a form for logout -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Deconnexion</a>
            </div>
          </li>
        </ul>
        <div class="top-nav-search">
          <form>
            <input type="text" class="form-control" placeholder="Search here" />
            <button class="btn" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>
      </div>
     // Fin Header  
     // ------------------ 
     // Debut Sidebar 
      <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="active">
                <a href="index.html"
                  ><i class="fas fa-tachometer-alt"></i>
                  <span>Dashboard</span></a
                >
              </li>
              <li class="list-divider"></li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-edit"></i> <span> Articles </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul class="submenu_class" style="display: none">
                  <li><a href="all-article.html"> Tous les articles </a></li>
                  <li><a href="add-article.html"> Ajouter un article </a></li>
                </ul>
              </li>
              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-book"></i> <span> Catégories </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul class="submenu_class" style="display: none">
                  <li>
                    <a href="all-categories.html"> Tous les catégories </a>
                  </li>

                  <li>
                    <a href="add-categories.html"> Ajouter une catégorie </a>
                  </li>
                </ul>
              </li>

              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-user"></i> <span> Auteurs </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul class="submenu_class" style="display: none">
                  <li><a href="all-author.html">Tous les auteurs </a></li>
                  <li>
                    <a href="add-author.html"> Ajouter un auteur </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="all-comments.html"
                  ><i class="fe fe-table"></i> <span>Commentaires</span></a
                >
              </li>

              <li class="submenu">
                <a href="#"
                  ><i class="far fa-money-bill-alt"></i>
                  <span> Medias Sociaux </span> <span class="menu-arrow"></span
                ></a>
                <ul class="submenu_class" style="display: none">
                  <li><a href="all-social-media.html">Tous les medias </a></li>
                  <li><a href="add-social-media.html">Ajouter un media </a></li>
                </ul>
              </li>

              <li>
                <a href="all-contacts.html"
                  ><i class="fe fe-table"></i> <span>Contacts</span></a
                >
              </li>

              <li>
                <a href="settings.html"
                  ><i class="fas fa-cog"></i> <span>Paramètres</span></a
                >
              </li>

              <li class="submenu">
                <a href="#"
                  ><i class="fas fa-columns"></i> <span> Pages </span>
                  <span class="menu-arrow"></span
                ></a>
                <ul class="submenu_class" style="display: none">
                  <li><a href="login.html">Login </a></li>
                  <li><a href="register.html">Register </a></li>
                  <li><a href="forgot-password.html">Forgot Password </a></li>
                  <li><a href="change-password.html">Change Password </a></li>
                  <li><a href="lock-screen.html">Lockscreen </a></li>
                  <li><a href="profile.html">Profile </a></li>
                  <li><a href="gallery.html">Gallery </a></li>
                  <li><a href="error-404.html">404 Error </a></li>
                  <li><a href="error-500.html">500 Error </a></li>
                  <li><a href="blank-page.html">Blank Page </a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
     // Fin Sidebar // --------------------- // Contenu de la page 
      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12 mt-5">
                <h3 class="page-title mt-3">Hello, Bonjour USER</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active">Dashboard</li>
                </ul>
              </div>
            </div>
          </div>
         
         //here the content       
         @yield('content')

        </div>
      </div>
     // Fin Contenu de la page 
    </div>
   // Scripts dashboard 
    <script
      data-cfasync="false"
      src="{{ asset('Back_auth/../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"
    ></script>
    <script src="{{ asset('Back_auth/assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{ asset('Back_auth/assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('Back_auth/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('Back_auth/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('Back_auth/assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('Back_auth/assets/plugins/morris/morris.min.js')}}"></script>
    <script src="{{ asset('Back_auth/assets/js/chart.morris.js')}}"></script>
    <script src="{{ asset('Back_auth/assets/js/script.js')}}"></script>
   // Fin Script Dashboard 
  </body>
</html>
