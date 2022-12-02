<?php
session_start();
if(!isset($_SESSION["identifiant"])){
    header("location:login.php");
}
?>

<?php include('header.php') ?>
<?php include('navbar-logout.php') ?> 


<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- header -->
    <header id="home" class="header">
      <div class="overlay text-white text-center">
        <h1 class="display-5 font-weight-bold my-3" style="color: #ed1f24;">
          Welcome <?php echo $_SESSION["identifiant"];?>
        </h1>
        <h1 class="display-2 font-weight-bold my-3">
          ESPR<span style="color: #ed1f24">E</span>AT
        </h1>
        <h2 class="display-4 mb-5">Manger Autrement</h2>
        <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a>
      </div>
    </header>

    <!--  About Section  -->
    <div
      id="about"
      class="container-fluid wow fadeIn"
      id="about"
      data-wow-duration="1.5s"
    >
      <div class="row">
        <div class="col-lg-6 has-img-bg"></div>
        <div class="col-lg-6">
          <div class="row justify-content-center">
            <div class="col-sm-8 py-5 my-5">
              <h2 class="mb-4">About Us</h2>
              <p>
                On a remarqué que notre école présente des problèmes majeurs au
                niveau de cet sujet. <br /><br />
                Et avec le taux d'admissions qui ne cesse de croitre les
                problèmes ne font qu'empirer. <br /><br />
                Les buvettes sont à la base conçues pour hébérger une centaines
                de personne au maximum les voilà submergées par des miliers
                d'étudiants chaque pause. <br /><br />
                A prendre en compte aussi que cette complication s'amplifie
                l'hiver puisque la majorité des étudiants sont à l'intérieur.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--  gallary Section  -->
    <div
      id="gallary"
      class="text-center bg-dark text-light has-height-md middle-items wow fadeIn"
    >
      <h2 class="section-title">OUR MENU</h2>
    </div>
    <div class="gallary row">
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-1.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-2.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-3.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-4.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-5.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-6.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-7.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-8.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-9.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-10.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-11.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
      <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
        <img
          src="assets/imgs/gallary-12.jpg"
          alt="template by DevCRID http://www.devcrud.com/"
          class="gallary-img"
        />
        <a href="#" class="gallary-overlay">
          <i class="gallary-icon ti-plus"></i>
        </a>
      </div>
    </div>

    <!-- book a table Section  -->

    <!-- BLOG Section  -->
    <div
      id="blog"
      class="container-fluid bg-dark text-light py-5 text-center wow fadeIn"
    >
      <h2 class="section-title py-5">What everybody is getting</h2>
      <div class="row justify-content-center">
        <div class="col-sm-7 col-md-4 mb-5">
          <ul
            class="nav nav-pills nav-justified mb-3"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item">
              <a
                class="nav-link active"
                id="pills-home-tab"
                data-toggle="pill"
                href="#foods"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                >Foods</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                id="pills-profile-tab"
                data-toggle="pill"
                href="#juices"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
                >Drinks</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content" id="pills-tabContent">
        <div
          class="tab-pane fade show active"
          id="foods"
          role="tabpanel"
          aria-labelledby="pills-home-tab"
        >
          <div class="row">
            <div class="col-md-4">
              <div class="card bg-transparent border my-3 my-md-0">
                <img
                  src="assets/imgs/blog-1.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">4.5dt</a>
                  </h1>
                  <h4 class="pt20 pb20">Tranche de pizza</h4>
                  <p class="text-white">
                    Le secret d'une pizza réussie réside avant tout dans la
                    qualité de sa pâte. Composée de produits 100% bio.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-transparent border my-3 my-md-0">
                <img
                  src="assets/imgs/blog-2.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">3.5dt</a>
                  </h1>
                  <h4 class="pt20 pb20">Soufflé</h4>
                  <p class="text-white">
                    Une magnifique recette de Soufflés genre Sandwichs, à base
                    d'une pâte super légère et moelleuse et une farce de blanc
                    de poulet, oignons et fromages.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card bg-transparent border my-3 my-md-0">
                <img
                  src="assets/imgs/blog-3.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">4dt</a>
                  </h1>
                  <h4 class="pt20 pb20">Sandwich au Jambon</h4>
                  <p class="text-white">
                    Deux tranches de très bon pain, des ingrédients frais...
                    jambon, fromage, crudités, sauces, condiments... et c'est
                    prêt !
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div
          class="tab-pane fade"
          id="juices"
          role="tabpanel"
          aria-labelledby="pills-profile-tab"
        >
          <div class="row">
            <div class="col-md-4 my-3 my-md-0">
              <div class="card bg-transparent border">
                <img
                  src="assets/imgs/blog-4.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">1.4dt</a>
                  </h1>
                  <h4 class="pt20 pb20">Café Direct</h4>
                  <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Culpa provident illum officiis fugit laudantium voluptatem
                    sit iste delectus qui ex.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
              <div class="card bg-transparent border">
                <img
                  src="assets/imgs/blog-5.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">1dt</a>
                  </h1>
                  <h4 class="pt20 pb20">Déli'o menthe</h4>
                  <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Culpa provident illum officiis fugit laudantium voluptatem
                    sit iste delectus qui ex.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
              <div class="card bg-transparent border">
                <img
                  src="assets/imgs/blog-6.jpg"
                  alt="template by DevCRID http://www.devcrud.com/"
                  class="rounded-0 card-img-top mg-responsive"
                />
                <div class="card-body">
                  <h1 class="text-center mb-4">
                    <a href="#" class="badge badge-primary">2dt</a>
                  </h1>
                  <h4 class="pt20 pb20">Jus d'orange</h4>
                  <p class="text-white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Culpa provident illum officiis fugit laudantium voluptatem
                    sit iste delectus qui ex.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- REVIEWS Section  -->
    <div
      id="testmonial"
      class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items"
    >
      <h2 class="section-title my-5 text-center">REVIEWS</h2>
      <div class="row mt-3 mb-5">
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Iheb Souissi</h3>
            <h6 class="testmonial-subtitle">Étudiant</h6>
            <div class="testmonial-body">
              <p>Time and energy saving project, kudos to the creators</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Saloun Ben Yahya</h3>
            <h6 class="testmonial-subtitle">Professeuse</h6>
            <div class="testmonial-body">
              <p>
                Can't believe how organized and well made this interface is.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 my-3 my-md-0">
          <div class="testmonial-card">
            <h3 class="testmonial-title">Rayen Fathallah</h3>
            <h6 class="testmonial-subtitle">Étudiant</h6>
            <div class="testmonial-body">
              <p>Simple, fast and clean. This is a big step for our school.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CONTACT Section  -->
    <div
      id="contact"
      class="container-fluid bg-dark text-light border-top wow fadeIn"
    >
      <div class="row">
        <div class="col-md-6 px-0">
          <div
            id="map"
            style="width: 100%; height: 100%; min-height: 400px"
          ></div>
        </div>
        <div class="col-md-6 px-5 has-height-lg middle-items">
          <h3>FIND US</h3>
          <p>
            Come check out our headquarters and take a look on how we manage to
            keep the logistics going!
          </p>
          <div class="text-muted">
            <p>
              <span class="ti-location-pin pr-3"></span> 2083 Cebalat Ben Ammar
              ST Fethi Zouhir, Tunis
            </p>
            <p><span class="ti-support pr-3"></span> (216) 70-255-255</p>
            <p><span class="ti-email pr-3"></span>contact@espreat.tn</p>
          </div>
        </div>
      </div>
    </div>

    <!-- page footer  -->
    <div
      class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn"
    >
      <div class="row">
        <div class="col-sm-4">
          <h3>EMAIL US</h3>
          <p class="text-muted">contact@espreat.tn</p>
        </div>
        <div class="col-sm-4">
          <h3>CALL US</h3>
          <p class="text-muted">(216) 70-255-255</p>
        </div>
        <div class="col-sm-4">
          <h3>FIND US</h3>
          <p class="text-muted">
            2083 Cebalat Ben Ammar ST Fethi Zouhir, Tunis
          </p>
        </div>
      </div>
    </div>
    <!-- end of page footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="assets/vendors/wow/wow.js"></script>

    <!-- google maps -->
    <script
      async
      defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"
    ></script>

    <!-- FoodHut js -->
    <script src="assets/js/commander.js"></script>
  </body>
