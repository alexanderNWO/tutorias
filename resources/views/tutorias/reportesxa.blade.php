<table class=" display table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                                <thead>
                                  {{ csrf_field() }}
                                  <tr>
                                    <th data-toggle="true">Matricula</th>
                                    <th data-hide="phone, tablet">Fecha</th>
                                    <th data-hide="phone, tablet">Nombre</th>
                                    <th data-hide="phone, tablet">Apellido Paterno</th>
                                    <th data-hide="phone, tablet">Apellido Materno</th>
                                    <th data-hide="phone, tablet">Motivo</th>
                                    <th data-hide="phone, tablet">Status</th>
                                    <th data-hide="phone, tablet">Detalles</th>
                                  </tr>
                                </thead>
                                <tfoot>
                                  <tr>
                                    <th>Matricula</th>
                                    <th>Fecha</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Motivo</th>
                                    <th>Status</th>
                                    <th>Detalles</th>
                                  </tr>
                                </tfoot>
                                <tbody>
                                  @foreach ($reportes as $t)
                                  <tr id="row{{$t->id}}" class="row{{$t->id}}">
                                    <td>{{ $t->matricula }}</td>
                                    <td>{{ $t->fecha }}</td>
                                    <td>{{ $t->nombre }}</td>
                                    <td>{{ $t->apellido_paterno }}</td>
                                    <td>{{ $t->apellido_materno }}</td>
                                    <td>{{$t->motivo }}</td>
                                    <td>{{$t->status }}</td>
                                    <td>
                                      <a type="button" href="/tutorias/{{$t->id}}/edit"
                                        class="btn btn-icon btn-info waves-effect waves-light waves-round" data-toggle="tooltip"
                                        data-original-title="Editar">
                                      <i class="icon md-edit" aria-hidden="true"></i></a>
                                      <a href="/exportpdf/{{$t->id}}"><button type="button"
                                        class="btn btn-icon btn-danger waves-effect waves-light"
                                        data-toggle="tooltip" data-original-title="Generar reporte PDF">
                                        <i class="icon fa-file-pdf-o" aria-hidden="true"></i></button>
                                      </a>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>