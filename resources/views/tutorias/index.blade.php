@extends('index')

@section('contenido')

<section id="tabs">
  <div class="tabs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 ">
          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                aria-controls="nav-home" aria-selected="true">Registrar tutoria</a>
            </div>
          </nav>
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div>
                <div>
                  <div>
                    <div class="col-xl-12 col-md-12 col-sl">
                      <div>
                        <div class="page-content panel-body container-fluid">
                          <form id="form">
                            <h5>Matricula: </h5><input type="text" name="matricula" id="matricula"
                              placeholder="221810632"><button id="buscarMatricula">Buscar</button>

                            <div id="tabla">

                            </div>

                          </form>
                          <!-- END Table-->
                        </div>

                      </div>
                    </div>
                    <!-- End Example Tabs -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Panel Basic -->

<script type="text/javascript">
  $(document).ready(function () {

    var reportes = {!! $reportes!!};
  console.log(reportes);

  $('#buscarMatricula').click(function () {

    var matricula = $('#matricula').val();
    console.log("Esta es tu matricula: ", matricula);
    var alumnos = reportes.filter(r => r.matricula == matricula)[0];
    console.log(alumnos);
    
    $("#tabla").load('/reportesxa' + '?' + $(this).closest('#form').serialize(), function(){
      console.log("El reporte se realizo con exito");
    });
    
  });


  });
</script>

@stop