@extends('layouts.document.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
            <form action="{{ route('add-project') }}" method="POST">
                    {{ csrf_field() }}
                <div class="modal-dialog modal-lg" role="document">
                   <div class="modal-content">
                      <div class="modal-header">
                         <h5 class="modal-title">Nuevo proyecto</h5>
                   
                      </div>
                      <!--end of modal head-->
  
                      <div class="modal-body">
                         <div class="tab-content">
                            <div class="tab-pane fade show active" id="task-add-details" role="tabpanel" aria-labelledby="task-add-details-tab">
                               <h6>Detalles generales</h6>

                               @if ($errors->any())
                               <div class="alert alert-danger">
                                   <ul>
                                       @foreach ($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                       @endforeach
                                   </ul>
                               </div>
                             @endif

                               <div class="form-group row align-items-center">
                                  <label class="col-3">Nombre</label>
                                  <input class="form-control col" type="text" placeholder="Nombre del proyecto" name="name" maxlength="300">
                               </div>
                               <div class="form-group row">
                                  <label class="col-3">Descripción</label>
                                  <textarea class="form-control col" rows="3" placeholder="Breve descripción del objetivo de este proyecto ..." name="description" maxlength="800" required></textarea>
                               </div>
                               <hr>
                               <h6>Línea de tiempo</h6>
                               <div class="form-group row align-items-center">
                                  <label class="col-6">Fecha de inicio</label>
                                  <input class="form-control col" type="date" placeholder="" name="start_date">
                               </div>
                               <div class="form-group row align-items-center">
                                  <label class="col-6">Fecha de vencimiento</label>
                                  <input class="form-control col" type="date" placeholder="" name="due_date">
                               </div>
                               <div class="alert alert-warning text-small" role="alert">
                                  <span>Puede cambiar las fechas de vencimiento en cualquier momento.</span>
                               </div>
                            </div>
                           
                         </div>
                      </div>
                      <!--end of modal body-->
                      <div class="modal-footer">
                      <input type="hidden" name="uuid" value="{{ Uuid::generate()->string }}">
                         <input type="hidden" name="owner" value="1">
                         <input type="hidden" name="company_id" value="1">
                         <button role="button" class="btn btn-primary" type="submit">
                         Crear proyecto
                         </button>
                      </div>
                   </div>
                </div>
             </form>
    </div>
</div>    
@endsection