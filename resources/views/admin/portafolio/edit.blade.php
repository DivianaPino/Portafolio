@extends('layouts.adminL')

@section('content')
<!-- Info boxes -->
<div class="row">
    <div class="container col-lg-8  col-12">
        <!-- TABLE: LATEST ORDERS -->
        <div class="card">
            <div class="card-header border-transparent">
                <h3 class="card-title">Editar Proyecto
                    <a href="{{route('admin.portafolio.index')}}" class="ml-4 btn btn-sm btn-primary" >Volver</a>
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
            <div class="card-body p-0" style="background-color:#B0FFD9;">
                <form action="{{route('admin.portafolio.update', $project->id)}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!--  Token para la seguridad de nuestra pagina (solución error 419) -->
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="title" class="col-form-label">Título:</label>
                            <input type="text" class="form-control" name="title" id="title" value="{{$project->title}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="col-form-label">Descripción:</label>
                            <textarea class="form-control" id="description" name="description">{{$project->description}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="imgFeatured" class="col-form-label">Imagen:</label><br>
                            <img src="{{asset('images/portafolio/'.$project->featured)}}" class="img-fluid mb-3" width="120px">
                            <input type="file" class="form-control" name="imgFeatured" id="imgFeatured">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
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


@endsection