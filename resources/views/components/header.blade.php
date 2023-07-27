<nav class="navbar navbar-expand-lg main-navbar">
    <a href="index.html" class="navbar-brand sidebar-gone-hide">{{ env('APP_NAME') }}</a>
    <div class="navbar-nav">
      <a href="{{ route('home') }}" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    </div>

    <form class="form-inline ml-auto">
      <ul class="navbar-nav">
        <li><a href="" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
      </ul>
      <div class="search-element">
        <input class="form-control" type="search" placeholder="Recherche" aria-label="Search" data-width="250">
        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      </div>
    </form>
  </nav>

  <nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a href="{{ route('home')}} " class="nav-link"><i class="fas fa-home"></i><span>{{ __('Accueil') }}</span></a>
        </li>

        <li class="nav-item ">
            <a href="{{ route('contacts.create') }}" class="nav-link"><i class="fas fa-plus"></i><span>{{ __('Ajouter un contact') }}</span></a>
        </li>

      </ul>
    </div>
  </nav>
