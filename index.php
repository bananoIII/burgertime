<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Burger - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body class="selection-header">
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Cargado...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <img src="img/logo.png" alt="logo" />Burger
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="index.php" class="nav-item nav-link active">Home</a>
              <a href="about.php" class="nav-item nav-link">Nosotros</a>
              <a href="service.php" class="nav-item nav-link">Servicio</a>
              <a href="menu.php" class="nav-item nav-link">Menú</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Páginas</a
                >
                <div class="dropdown-menu m-0">
                  <a href="booking.php" class="dropdown-item">Ordenar</a>
                  <a href="team.php" class="dropdown-item">Nuestro equipo</a>
                  <a href="testimonial.php" class="dropdown-item"
                    >Testimonios</a
                  >
                </div>
              </div>
              <a href="contact.php" class="nav-item nav-link">Contactos</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4">Ordenar</a>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
              <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">
                  Disfruta<br />Nuestras Hamburguesas
                </h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">
                  Si quieres un fin de semana lleno de sabor, esta es el lugar
                  que estas buscando. Pedir una deliciosa hamburguesa nunca ha
                  sido tan fácil y delicioso.
                </p>
                <a
                  href=""
                  class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"
                  >Ordenar</a
                >
              </div>
              <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/raid.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <div class="bg-white">
        <!-- Service Start -->
        <div class="container-xxl py-5 bg-">
          <div class="container">
            <div class="row g-4">
              <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                  <div class="p-4">
                    <i class="fa fa-3x fa-hamburger text-primary mb-4"></i>
                    <h5>Hamburguesas</h5>
                    <p>
                      Preparadas por los los mejores cocineros, con varios años
                      de experiencia.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                  <div class="p-4">
                    <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                    <h5>Ingredientes</h5>
                    <p>
                      Preparadas con ingredientes frescos y de la más alta
                      calidad, satisfacer los paladares más exigentes.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                  <div class="p-4">
                    <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                    <h5>Ordena en línea</h5>
                    <p>Ordena en línea, es fácil y llegarán enseguida.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Service End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
          <div class="container">
            <div class="row g-5 align-items-center">
              <div class="col-lg-6">
                <div class="row g-3">
                  <div class="col-6 text-start">
                    <img
                      class="img-fluid rounded w-100 wow zoomIn"
                      data-wow-delay="0.1s"
                      src="img/lugar-1.jpg"
                    />
                  </div>
                  <div class="col-6 text-start">
                    <img
                      class="img-fluid rounded w-75 wow zoomIn"
                      data-wow-delay="0.3s"
                      src="img/lugar-2.jpg"
                      style="margin-top: 25%"
                    />
                  </div>
                  <div class="col-6 text-end">
                    <img
                      class="img-fluid rounded w-75 wow zoomIn"
                      data-wow-delay="0.5s"
                      src="img/lugar-3.jpg"
                    />
                  </div>
                  <div class="col-6 text-end">
                    <img
                      class="img-fluid rounded w-100 wow zoomIn"
                      data-wow-delay="0.7s"
                      src="img/lugar-4.jpg"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <h5
                  class="section-title ff-secondary text-start text-primary fw-normal"
                >
                  Acerca de nosotros
                </h5>
                <h1 class="mb-4">Bienvenido a Burger</h1>
                <p class="mb-4">
                  ¡Bienvenido a Burger! Aquí encontrarás las hamburguesas más
                  jugosas y deliciosas, preparadas con ingredientes frescos y de
                  calidad. Disfruta de un ambiente acogedor y una experiencia
                  gastronómica única.
                </p>
                <p class="mb-4">
                  ¡Te esperamos para que pruebes lo mejor de nuestras
                  especialidades!
                </p>
                <div class="row g-4 mb-4">
                  <div class="col-sm-6">
                    <div
                      class="d-flex align-items-center border-start border-5 border-primary px-3"
                    >
                      <h1
                        class="flex-shrink-0 display-5 text-primary mb-0"
                        data-toggle="counter-up"
                      >
                        5
                      </h1>
                      <div class="ps-4">
                        <p class="mb-0">Años de</p>
                        <h6 class="text-uppercase mb-0">Experiencia</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div
                      class="d-flex align-items-center border-start border-5 border-primary px-3"
                    >
                      <h1
                        class="flex-shrink-0 display-5 text-primary mb-0"
                        data-toggle="counter-up"
                      >
                        15
                      </h1>
                      <div class="ps-4">
                        <p class="mb-0">Cocineros</p>
                        <h6 class="text-uppercase mb-0">Espectaculares</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href=""
                  >Más acerca de nosotros</a
                >
              </div>
            </div>
          </div>
        </div>
        <!-- About End -->

        <!-- Menu Start -->
        <div class="container-xxl py-5">
          <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h5
                class="section-title ff-secondary text-center text-primary fw-normal"
              >
                Menú
              </h5>
              <h1 class="mb-5">Nuestros productos</h1>
            </div>
            <div
              class="tab-class text-center wow fadeInUp"
              data-wow-delay="0.1s"
            >
              <ul
                class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5"
              >
                <li class="nav-item">
                  <a
                    class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                    data-bs-toggle="pill"
                    href="#tab-1"
                  >
                    <i class="fa fa-hamburger fa-2x text-primary"></i>
                    <div class="ps-3">
                      <small class="text-body">Mejores</small>
                      <h6 class="mt-n1 mb-0">Hamburguesas</h6>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="d-flex align-items-center text-start mx-3 pb-3"
                    data-bs-toggle="pill"
                    href="#tab-2"
                  >
                    <i class="fa fa-utensils fa-2x text-primary"></i>
                    <div class="ps-3">
                      <small class="text-body">Descubre</small>
                      <h6 class="mt-n1 mb-0">Acompañamientos</h6>
                    </div>
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="d-flex align-items-center text-start mx-3 me-0 pb-3"
                    data-bs-toggle="pill"
                    href="#tab-3"
                  >
                    <i class="fa-solid fa-glass-whiskey fa-2x text-primary"></i>
                    <div class="ps-3">
                      <small class="text-body">Refrescantes </small>
                      <h6 class="mt-n1 mb-0">Bebidas</h6>
                    </div>
                  </a>
                </li>
              </ul>
              <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                  <div class="row g-4">
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/hamburguesa-1.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Hamburguesa Clásica</span>
                            <span class="text-primary">$110</span>
                          </h5>
                          <small class="fst-italic"
                            >Clásica hamburguesa con una carne gruesa, bien
                            sasonada y vegetales frescos.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/hamburguesa-2.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Hamburguesa de pollo</span>
                            <span class="text-primary">$130</span>
                          </h5>
                          <small class="fst-italic"
                            >Definida por una gruesa pieza de pollo, empanizada
                            y muy jugosa.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/hamburguesa-3.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Hamburguesa de lujo</span>
                            <span class="text-primary">$170</span>
                          </h5>
                          <small class="fst-italic"
                            >Con un par de carnes, se define como una de las
                            mejores opciones.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/hamburguesa-4.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Hamburguesa con triple queso</span>
                            <span class="text-primary">$140</span>
                          </h5>
                          <small class="fst-italic"
                            >Parmesano, gouda y americano hacen una perfecta
                            combinación.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/hamburguesa-5.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Hamburguesa con champiñones</span>
                            <span class="text-primary">$115</span>
                          </h5>
                          <small class="fst-italic"
                            >Hamburguesa con los champiñones más frescos, para
                            un extra de sabor.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/hamburguesa-6.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Hamburguesa de pescado</span>
                            <span class="text-primary">$120</span>
                          </h5>
                          <small class="fst-italic"
                            >Con un grueso filete de pescado, realza la
                            frescura.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/hamburguesa-7.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Hamburguesa Premium</span>
                            <span class="text-primary">$200</span>
                          </h5>
                          <small class="fst-italic"
                            >La opción para los más exigentes, con los
                            ingredientes de mejor calidad.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/hamburguesa-8.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Hamburguesa Tex-Mex</span>
                            <span class="text-primary">$130</span>
                          </h5>
                          <small class="fst-italic"
                            >Hamburguesa con un sazón mexicano.</small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                  <div class="row g-4">
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/acomp-1.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Nuggets de pollo</span>
                            <span class="text-primary">$65</span>
                          </h5>
                          <small class="fst-italic"
                            >Deliciosas piezas de pollo, muy populares entre
                            niños.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/acomp-2.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Alitas de pollo</span>
                            <span class="text-primary">$75</span>
                          </h5>
                          <small class="fst-italic"
                            >Fritas y con una salsa de la casa.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/acomp-3.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Dedos de queso</span>
                            <span class="text-primary">$50</span>
                          </h5>
                          <small class="fst-italic"
                            >Palitos de masa, con queso derretido.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/acomp-4.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Papas a la francesa</span>
                            <span class="text-primary">$40</span>
                          </h5>
                          <small class="fst-italic"
                            >La opción mas clásica para acompañar una
                            hamburguesa.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/acomp-5.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Papas fritas</span>
                            <span class="text-primary">$40</span>
                          </h5>
                          <small class="fst-italic"
                            >Deliciosas papas, finas y bien saladas.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/acomp-6.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Bombas de queso</span>
                            <span class="text-primary">$70</span>
                          </h5>
                          <small class="fst-italic"
                            >Masa con una mezcla de quesos cremosas.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/acomp-7.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Tiramisú</span>
                            <span class="text-primary">$90</span>
                          </h5>
                          <small class="fst-italic"
                            >Pastel de crema y café, perfecto para terminar la
                            comida.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/acomp-8.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Churros</span>
                            <span class="text-primary">$60</span>
                          </h5>
                          <small class="fst-italic"
                            >Con sabor a canela y bien cargados con
                            azúcar.</small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                  <div class="row g-4">
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/bebida-1.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Coca-cola</span>
                            <span class="text-primary">$30</span>
                          </h5>
                          <small class="fst-italic"
                            >Disfruta el sabor único de Coca-Cola, refrescante y
                            llena de energía.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/bebida-2.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Pepsi</span>
                            <span class="text-primary">$30</span>
                          </h5>
                          <small class="fst-italic"
                            >Pepsi, el sabor refrescante que te acompaña en cada
                            momento especial.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/bebida-3.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Fanta</span>
                            <span class="text-primary">$30</span>
                          </h5>
                          <small class="fst-italic"
                            >Super sabor a naranja y muy dulce.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/bebida-4.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Dr. Pepper</span>
                            <span class="text-primary">$30</span>
                          </h5>
                          <small class="fst-italic"
                            >Rico refresco sabo vainilla y caramelo.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/bebida-5.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>7up</span>
                            <span class="text-primary">$30</span>
                          </h5>
                          <small class="fst-italic"
                            >Sabor a cítricos, super refrescante.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/bebida-6.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Sprite</span>
                            <span class="text-primary">$30</span>
                          </h5>
                          <small class="fst-italic"
                            >El mejor sabor lima-limóm.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/bebida-7.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Coca-cola Zero</span>
                            <span class="text-primary">$35</span>
                          </h5>
                          <small class="fst-italic"
                            >Alteraniva sin azúcar del refresco más famoso de
                            todos.</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="d-flex align-items-center">
                        <img
                          class="flex-shrink-0 img-fluid rounded"
                          src="img/bebida-8.jpeg"
                          alt=""
                          style="width: 80px"
                        />
                        <div class="w-100 d-flex flex-column text-start ps-4">
                          <h5
                            class="d-flex justify-content-between border-bottom pb-2"
                          >
                            <span>Agua mineral</span>
                            <span class="text-primary">$30</span>
                          </h5>
                          <small class="fst-italic"
                            >Alteraniva para un buen efecto burbujeante.</small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Menu End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
          <div class="container">
            <div class="text-center">
              <h5
                class="section-title ff-secondary text-center text-primary fw-normal"
              >
                Testimonios
              </h5>
              <h1 class="mb-5">Recomendaciones</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                  La hamburguesa superó mis expectativas. La carne estaba en su
                  punto, y las verduras estaban frescas. Sin duda la mejor en la
                  zona.
                </p>
                <div class="d-flex align-items-center">
                  <img
                    class="img-fluid flex-shrink-0 rounded-circle"
                    src="img/testimonial-1.jpg"
                    style="width: 50px; height: 50px"
                  />
                  <div class="ps-3">
                    <h5 class="mb-1">María</h5>
                  </div>
                </div>
              </div>
              <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                  Excelente hamburguesa, el sabor de la carne era increíble y
                  los ingredientes estaban perfectamente equilibrados.
                </p>
                <div class="d-flex align-items-center">
                  <img
                    class="img-fluid flex-shrink-0 rounded-circle"
                    src="img/testimonial-2.jpg"
                    style="width: 50px; height: 50px"
                  />
                  <div class="ps-3">
                    <h5 class="mb-1">Juan</h5>
                  </div>
                </div>
              </div>
              <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                  Muy buena hamburguesa, el sabor era excelente y el tamaño de
                  la porción justo. La carne era deliciosa. Un lugar para
                  visitar nuevamente.
                </p>
                <div class="d-flex align-items-center">
                  <img
                    class="img-fluid flex-shrink-0 rounded-circle"
                    src="img/testimonial-3.jpg"
                    style="width: 50px; height: 50px"
                  />
                  <div class="ps-3">
                    <h5 class="mb-1">Pedro</h5>
                  </div>
                </div>
              </div>
              <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>
                  La hamburguesa estaba deliciosa, con una carne jugosa y bien
                  sazonada. Definitivamente volveré.
                </p>
                <div class="d-flex align-items-center">
                  <img
                    class="img-fluid flex-shrink-0 rounded-circle"
                    src="img/testimonial-4.jpg"
                    style="width: 50px; height: 50px"
                  />
                  <div class="ps-3">
                    <h5 class="mb-1">Susana</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Testimonial End -->
      </div>

      <!-- Footer Start -->
      <div
        class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn"
        data-wow-delay="0.1s"
      >
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Compañía
              </h4>
              <a class="btn btn-link" href="">Nosotros</a>
              <a class="btn btn-link" href="">Contáctanos </a>
              <a class="btn btn-link" href="">Políticas de privacidad </a>
              <a class="btn btn-link" href="">Términos y condiciones </a>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Contactos
              </h4>
              <p class="mb-2">
                <i class="fa fa-map-marker-alt me-3"></i>Los alamos 455, Cel,
                Gto.
              </p>
              <p class="mb-2">
                <i class="fa fa-phone-alt me-3"></i>461 345 67890
              </p>
              <p class="mb-2">
                <i class="fa fa-envelope me-3"></i>info@burger.com
              </p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-twitter"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-youtube"></i
                ></a>
                <a class="btn btn-outline-light btn-social" href=""
                  ><i class="fab fa-linkedin-in"></i
                ></a>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Horarios
              </h4>
              <h5 class="text-light fw-normal">Lunes - Sábado</h5>
              <p>09AM - 09PM</p>
              <h5 class="text-light fw-normal">Domingo</h5>
              <p>10AM - 08PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4
                class="section-title ff-secondary text-start text-primary fw-normal mb-4"
              >
                Newsletter
              </h4>
              <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
              <div class="position-relative mx-auto" style="max-width: 400px">
                <input
                  class="form-control border-primary w-100 py-3 ps-4 pe-5"
                  type="text"
                  placeholder="Your email"
                />
                <button
                  type="button"
                  class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2"
                >
                  SignUp
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom" href="#">Your Site Name</a>, All
                Right Reserved.

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                Designed By
                <a class="border-bottom" href="https://htmlcodex.com"
                  >HTML Codex</a
                >
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
