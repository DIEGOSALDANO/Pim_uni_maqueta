<?php include "header.php"; ?>
  <style>
    .border{
      border-radius: 10px;
    }
  </style>
  <div class="container-fluid">
    <div class="row">
      <section class="col"><!-- personal_line -->
        <div class="col-md-9 pt-3 px-2 d-flex align-items-center mb-2 ml-5">
          <div class="col-md-8">
            <div class="row ">
              <h2 class="text-title-card pl-3 pr-3 mr-5"><b>Alta de Key Visual</b></h2>
              <h5 class="text-title-card pl-3">Desde está sección se realizan altas de nuevos key visual</h5>
            </div>
          </div>
        </div>
        <div class="w-100 mr-0">
          <div class="border-bottom w-100 "> </div>
        </div>
        <div class="col-md-12 ml-5 mt-5">
          <div class="col-md-9  mb-5">
            <label><h4><b>Datos del Solicitante</b></h4></label>
            <form>
              <div class="row">
                <div class="col-4">
                  <input type="text" class="form-control" placeholder="nombre">
                </div>
                <div class="col-4">
                  <input type="text" class="form-control" placeholder="email">
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-11">
            <label>
              <h4><b>Datos de la Publicación</b></h4>
            </label>
            <span class="float-right">
              <p><span class="text-danger"><b>IMPORTANTE</b>&nbsp; <i class="fa fa-exclamation-circle"></i></span>
                <span style="font-size: 10px;">la imagen <b>jpg</b> se utilizara para previsualizar el contenido y no debe superar los 2 MB</span>
              </p>
            </span>
            <table class="table"  id="maintable">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Negocio</th>
                  <th scope="col">Categoría</th>
                  <th scope="col">Marca</th>
                  <th scope="col">Fecha Vto.</th>
                  <th scope="col">Link de descarga</th>
                  <th scope="col">JPG en baja</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr class="m-0 p-0"> 
                  <td class="m-0 p-1">
                    <select name="" class="form-control custom-select border m-0">
                      <option value="">Seleccione</option>
                    </select>
                  </td>
                  <td class="m-0 p-1">
                    <select name="" class="form-control custom-select border m-0">
                      <option value="">Seleccione</option>
                    </select>
                  </td>
                  <td class="m-0 p-1">
                    <select name="" class="form-control custom-select border m-0">
                      <option value="">Seleccione</option>
                    </select>
                  </td>
                  <td class="m-0 p-1" style="width: 200px;">
                    <div class="input-group-prepend border">
                      <input type="date" class="form-control" placeholder="fecha">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </td>
                  <td class="m-0 p-1">
                    <input type="url"  class="form-control border">
                  </td>
                  <td class="m-0 p-1" style="width: 170px;">
                    <input type="file" class="border p-2 m-0" style="width: 170px;">
                  </td>
                  <td class="m-1 p-1">
                    <!-- <i class="fas fa-trash-alt text-danger pt-2 mt-1 ml-5"></i> -->
                  </td>
                </tr>
                <tr class="m-0 p-0"> 
                  <td class="m-0 p-1">
                    <select name="" class="form-control custom-select border m-0">
                      <option value="">Seleccione</option>
                    </select>
                  </td>
                  <td class="m-0 p-1">
                    <select name="" class="form-control custom-select border m-0">
                      <option value="">Seleccione</option>
                    </select>
                  </td>
                  <td class="m-0 p-1">
                    <select name="" class="form-control custom-select border m-0">
                      <option value="">Seleccione</option>
                    </select>
                  </td>
                  <td class="m-0 p-1" style="width: 200px;">
                    <div class="input-group-prepend border">
                      <input type="date" class="form-control" placeholder="fecha">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                  </td>
                  <td class="m-0 p-1">
                    <input type="url"  class="form-control border">
                  </td>
                  <td class="m-0 p-1" style="width: 170px;">
                    <input type="file" class="border p-2 m-0" style="width: 170px;">
                  </td>
                  <td class="m-1 p-1">
                    <a href="#"><i class="fas fa-trash-alt text-danger pt-2 mt-1 ml-5"></i></a>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="mt-5">
              <button type="submit" id="addRows" class=" btn-md btn btn-success">
                <i class="fa fa-plus-circle"></i> &nbsp; Agregar fila</button>
            </div>
          </div>
        </div>
        <div class="col-md-12 mt-5 p-5">
          <div class="mt-5 p-3 mx-auto d-block text-center">
            <button type="submit" class=" btn-md btn btn-primary px-5 ">Enviar</button>
          </div>
        </div>
      </section>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(function () {
      /*add new row*/
      $("#addRows").click(function () {
        $('#maintable').append('<tr class="m-0 p-0"> <td class="m-0 p-1"> <select name="" class="form-control custom-select border m-0"> <option value="">Seleccione</option> </select> </td> <td class="m-0 p-1"> <select name="" class="form-control custom-select border m-0"> <option value="">Seleccione</option> </select> </td> <td class="m-0 p-1"> <select name="" class="form-control custom-select border m-0"> <option value="">Seleccione</option> </select> </td> <td class="m-0 p-1" style="width: 200px;"> <div class="input-group-prepend border"> <input type="date" class="form-control" placeholder="fecha"> <div class="input-group-text"><i class="fa fa-calendar"></i></div> </div> </td> <td class="m-0 p-1"> <input type="url"  class="form-control border"> </td> <td class="m-0 p-1" style="width: 170px;"> <input type="file" class="border p-2 m-0" style="width: 170px;"> </td> <td class="m-1 p-1"> <a href="#"><i class="fas fa-trash-alt text-danger pt-2 mt-1 ml-5"></i> </a></td> </tr>')
      });
    });
    /*Remove row*/
    $('table').on('click','tr a',function(e){
       e.preventDefault();
      $(this).parents('tr').remove();
    });
</script>
<?php include "footer.php"; ?>
        
