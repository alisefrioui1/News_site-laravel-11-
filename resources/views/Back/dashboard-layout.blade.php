<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>@yield('title')</title>
 @include('Back.partials.styles_header')
   // Fin Dashbord Link 
  </head>

  <body>
   // Main wrapper 
    <div class="main-wrapper">
     // Debut Header #
   @include('Back.partials.header')
     // Fin Header  
     // ------------------ 
     // Debut Sidebar 
    @include('Back.partials.sidebar')
     // Fin Sidebar // --------------------- // Contenu de la page 
      <div class="page-wrapper">
        <div class="content container-fluid">
        
         <div class="page-header">
          @yield('dashboard_header')
          <div/>
         @yield('dashboard_content')

        </div>
      </div>
     // Fin Contenu de la page 
    </div>
   // Scripts dashboard 
   @include('Back.partials.script')
   // Fin Script Dashboard 
  </body>
</html>
