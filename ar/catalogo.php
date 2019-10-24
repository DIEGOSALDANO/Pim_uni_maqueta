
<?php include "header.php"; ?>
  <style>
    .sidebarColor{
      background-color: #cecdcd;
      height: calc(135vh - 143px);
    }
    .personal_line{
      width: 83%;
    }
    section#card-categories{
      border-bottom: none;
    }
    .completo{
      width: auto;
      margin:20px auto;
      grid-template-columns: repeat(1);
      grid-gap: 20px;
    }
  </style>
  <main>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebarColor sidebar fixed">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <br>
              <h6 class="nav-link">SELECCIONE CLUSTER</h6>
              <hr class="hr-warning" />
              <p style="font-size: 14px;">Seleccione el cluster para su descargar</p>
              <select name="" class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
                <option value="">TODOS</option>
                <option value="alta_key.php" >MEDS / AUTOSERVICIOS</option>
                <option value="brand.php">MAYORISTAS</option>
                <option value="descarga-selectiva.php">CADENAS</option>
                <option value="product.php">FARMACIAS</option>
              </select>
            </ul>
          </div>
        </nav>
        <section class="col"><!-- personal_line -->
          <div class="col-md-9 pt-3 px-2 d-flex align-items-center mb-2 ">
            <img src="assets/img/pdf.png" style="width: 10%;">
            <div class="col-md-8">
              <div class="row ">
                <h3 class="text-title-card pl-3"><b>Descarga de catálogos</b></h3>
                <h5 class="text-title-card pl-3">Haga click sobre el catálogo que desea descargar</h5>
              </div>
            </div>
          </div>
          <div class="w-100 mr-0">
            <div class="border-bottom w-100 "> </div>
          </div>
          <div class="content-wrapper">
            <section id="card-categories">
              <div class="wrapp-content">
                <div class="">
                </div>
                <div class="card">
                  <a href="#" class="text-white">
                    <img src="../datafiles/ar/jerarquia/UNILEVER_400_descarga.jpg" class="card-img-top">
                    <h5 class="text-title-card"><a href="#" class="text-white">Completo</a></h5>
                  </a>
                </div>
              </div>
              <div class="wrapp-content">
                <div class="card">
                  <a href="#" class="text-white">
                    <img src="../datafiles/ar/jerarquia/PC_400_descarga.jpg" class="card-img-top">
                    <h5 class="text-title-card"><a href="#" class="text-white">Personal Care</a></h5>
                  </a>
                </div>
                <div class="card">
                  <a href="#" class="text-white">
                    <img src="../datafiles/ar/jerarquia/HC_400_descarga.jpg" class="card-img-top">
                    <h5 class="text-title-card"><a href="#" class="text-white">Home Care</a></h5>
                  </a>
                </div>
                <div class="card">
                  <a href="#" class="text-white">
                    <img src="../datafiles/ar/jerarquia/Foods_400_descarga.jpg" class="card-img-top">
                    <h5 class="text-title-card"><a href="#" class="text-white">Foods</a></h5>
                  </a>
                </div>
                <div class="card">
                  <a href="#" class="text-white">
                    <img src="../datafiles/ar/jerarquia/Food_Solutions_400_descarga.jpg" class="card-img-top">
                    <h5 class="text-title-card"><a href="#" class="text-white">Foods Solutions</a></h5>
                  </a>
                </div>
                <div class="card">
                  <a href="#" class="text-white">
                    <img src="../datafiles/ar/jerarquia/HC_Profesional_400_descarga.jpg" class="card-img-top">
                    <h5 class="text-title-card"><a href="#" class="text-white">HC Profesional</a></h5>
                  </a>
                </div>
                <div class="card">
                  <a href="#" class="text-white">
                    <img src="../datafiles/ar/jerarquia/PC_Profesional_400_descarga.jpg" class="card-img-top">
                    <h5 class="text-title-card"><a href="#" class="text-white">PC Profesional</a></h5>
                  </a>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
    </div>
  </main>
<?php include "footer.php"; ?>      