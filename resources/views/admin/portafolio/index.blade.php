@extends('layouts.adminL')

@section('content')
<!-- Info boxes -->
<div class="row">
    <div class="text-center col-12">
        <!-- TABLE: LATEST ORDERS -->
        <div class="card">
            <div class="card-header border-transparent">
                <h3 class="card-title">Lista de Proyectos
                    <button type="button" class="ml-4 btn btn-sm btn-primary" data-toggle="modal"
                        data-target="#exampleModal" data-whatever="@mdo">Crear Proyecto</button>
                </h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Imagen</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <td>{{$project->title}}</td>
                                <td>
                                    <img src="{{asset('images/portafolio/'.$project->featured)}}"
                                        class="img-fluid img-rounded" width="120px" alt="{{$project->title}}">
                                </td>
                                <td>{{$project->description}}</td>
                                <td>
                                <a href="{{route('admin.portafolio.edit', $project->id)}}" class="btn btn-warning">Editar</a>
                                <form>
                                   <button class="btn btn-danger">Eliminar</button>
                                </form>
                                
                              </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <!-- <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
            </div> -->
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->
    </div>

</div>
<!-- /.row -->

<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('admin.portafolio.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <!--  Token para la seguridad de nuestra pagina (solución error 419) -->
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="title" class="col-form-label">Título:</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description" class="col-form-label">Descripción:</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="imgFeatured" class="col-form-label">Imagen:</label>
                        <input type="file" class="form-control" name="imgFeatured" id="imgFeatured">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- /.row -->



@endsection