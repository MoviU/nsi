<header class="p-3 mb-3 d-flex flex-wrap justify-content-left navbar navbar-expand-lg navbar-light">
    <!-- <nav class="navbar navbar-expand-lg"> -->
    <div class="container">
    <a class="col-lg-2 navbar-brand" href="{{ route('index') }}">
        <img class="header_logo" src="img/nsilogo.png" alt="">
    </a>
    <div class="col-lg-4 offset-lg-2 d5 d-block d-lg-none">
        <form>
            <input type="text" placeholder="search...">
            <button type="submit"></button>
        </form>
    </div>
    <button class="col-lg-2 navbar-toggler toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style="border: none;"></span>
    </button>

    <div class="col collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="header_link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="header_link" href="#">About us</a>
            </li>
            <li class="nav-item">
                <a class="header_link" href="#">Order design</a>
            </li>
        </ul>
    </div>        
    <form class="d5 d-none d-lg-block">
        <input class="me-2" type="text" placeholder="search...">
        <button type="submit"></button>
    </form>
    </div>
    <!-- </nav> -->
  </header>