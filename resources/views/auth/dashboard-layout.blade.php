<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Admin Dashboard</title>
    {# Dashboard - Links #}
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.png"
    />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/feathericon.min.css" />
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css" />
    <link rel="stylesheet" href="assets/plugins/morris/morris.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    {# Fin Dashbord Link #}
  </head>

  <body>
    {# Main wrapper #}
    <div class="main-wrapper">
      {# Debut Header #}
      <div class="header">
        <div class="header-left">
          <a href="index.html" class="logo">
            <img
              src="assets/img/logo.png"
              width="50"
              height="70"
              alt="logo"
            />
            <span class="logoclass">John Doe</span>
          </a>
          <a href="index.html" class="logo logo-small">
            <img
              src="assets/img/logo.png"
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
                  src="assets/img/profiles/avatar-01.png"
                  width="31"
                  alt="John Doe"
              /></span>
            </a>
            <div class="dropdown-menu">
              <div class="user-header">
                <div class="avatar avatar-sm">
                  <img
                    src="assets/img/profiles/avatar-01.png"
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
              <a class="dropdown-item" href="login.html">Deconnexion</a>
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
      {# Fin Header #} 
      {# ------------------ #}
      {# Debut Sidebar #}
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
      {# Fin Sidebar #} {# --------------------- #} {# Contenu de la page #}
      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12 mt-5">
                <h3 class="page-title mt-3">Hello, Bonjour John Doe!</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active">Dashboard</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card board1 fill">
                <div class="card-body">
                  <div class="dash-widget-header">
                    <div>
                      <h3 class="card_widget_header">236</h3>
                      <h6 class="text-muted">Total Articles</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewbox="0 0 24 24"
                          fill="none"
                          stroke="#009688"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-user-plus"
                        >
                          <path
                            d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"
                          ></path>
                          <circle cx="8.5" cy="7" r="4"></circle>
                          <line x1="20" y1="8" x2="20" y2="14"></line>
                          <line x1="23" y1="11" x2="17" y2="11"></line></svg
                      ></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card board1 fill">
                <div class="card-body">
                  <div class="dash-widget-header">
                    <div>
                      <h3 class="card_widget_header">10</h3>
                      <h6 class="text-muted">Total Catégories</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewbox="0 0 24 24"
                          fill="none"
                          stroke="#009688"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-dollar-sign"
                        >
                          <line x1="12" y1="1" x2="12" y2="23"></line>
                          <path
                            d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"
                          ></path></svg
                      ></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card board1 fill">
                <div class="card-body">
                  <div class="dash-widget-header">
                    <div>
                      <h3 class="card_widget_header">1538</h3>
                      <h6 class="text-muted">Total Commentaires</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewbox="0 0 24 24"
                          fill="none"
                          stroke="#009688"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-file-plus"
                        >
                          <path
                            d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                          ></path>
                          <polyline points="14 2 14 8 20 8"></polyline>
                          <line x1="12" y1="18" x2="12" y2="12"></line>
                          <line x1="9" y1="15" x2="15" y2="15"></line></svg
                      ></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card board1 fill">
                <div class="card-body">
                  <div class="dash-widget-header">
                    <div>
                      <h3 class="card_widget_header">364</h3>
                      <h6 class="text-muted">Abonnements</h6>
                    </div>
                    <div class="ml-auto mt-md-3 mt-lg-0">
                      <span class="opacity-7 text-muted"
                        ><svg
                          xmlns="http://www.w3.org/2000/svg"
                          width="24"
                          height="24"
                          viewbox="0 0 24 24"
                          fill="none"
                          stroke="#009688"
                          stroke-width="2"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          class="feather feather-globe"
                        >
                          <circle cx="12" cy="12" r="10"></circle>
                          <line x1="2" y1="12" x2="22" y2="12"></line>
                          <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"
                          ></path></svg
                      ></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 d-flex">
              <div class="card card-table flex-fill">
                <div class="card-header">
                  <h4 class="card-title float-left mt-2">Articles recents</h4>
                  <button
                    type="button"
                    class="btn btn-primary float-right veiwbutton"
                  >
                    Voir tous
                  </button>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-center">
                      <thead>
                        <tr>
                          <th>ID Articles</th>
                          <th>Image</th>
                          <th>Titre</th>
                          <th>Catégories</th>
                          <th class="text-right">Auteur</th>
                          <th class="text-center">Publication</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-nowrap">
                            <div>ART-0001</div>
                          </td>
                          <td class="text-nowrap"></td>
                          <td>Intelligence artificielle</td>
                          <td>Tech</td>
                          <td class="text-center">John Doe</td>
                          <td class="text-center">
                            <span class="badge badge-pill bg-success inv-badge"
                              >PUBLIE</span
                            >
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {# Fin Contenu de la page #}
    </div>
    {# Scripts dashboard #}
    <script
      data-cfasync="false"
      src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/js/chart.morris.js"></script>
    <script src="assets/js/script.js"></script>
    {# Fin Script Dashboard #}
  </body>
</html>
