<nav class="navbar navbar-expand-lg dehradun-nav">
  <div class="container-fluid pe-0">
    <a class="navbar-brand" href="./"><img src="{{asset($common_settings['logo'])}}" width="350px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <i class="ri-menu-line"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarText">

      <x-menu menu-name="Main Menu" />

    </div>
  </div>
</nav>