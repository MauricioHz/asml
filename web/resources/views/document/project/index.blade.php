@extends('layouts.document.app')

@section('content')
<div class="row">
        <div class="col-lg-12">
           <div class="page-header">
              <h3>Poyectos en ejecución</h3>         
           </div>
           <ul class="nav nav-tabs nav-fill">
              <li class="nav-item">
                 <a class="nav-link active" data-toggle="tab" href="#tasks" role="tab" aria-controls="tasks" aria-selected="true">Proyectos</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Actividad</a>
              </li>
           </ul>
           <div class="tab-content">
              <div class="tab-pane fade show active" id="tasks" role="tabpanel" aria-labelledby="tasks-tab" data-filter-list="card-list-body">
                 <div class="row content-list-head">
                    <div class="col-auto">
                       <h5>Nuevo proyecto</h5>
                       <!--<button class="btn btn-round" data-toggle="modal" data-target="#modal-add-project">-->
                        <a href="{{ route('crear-proyecto') }}" class="btn btn-round">
                            <i class="material-icons">add</i>
                        </a>    
                    </div>
                    <form class="col-md-auto">
                       <div class="input-group input-group-round">
                          <div class="input-group-prepend">
                             <span class="input-group-text">
                             <i class="material-icons">filter_list</i>
                             </span>
                          </div>
                          <input type="search" class="form-control filter-list-input" placeholder="Filtro de proyectos" aria-label="Filter Tasks" aria-describedby="filter-tasks">
                       </div>
                    </form>
                 </div>
                 <!--end of content list head-->
                 <div class="content-list-body">
                    <div class="card-list">
                       <div class="card-list-head">
                          <h6>Lista de proyectos en curso</h6>
                       </div>
                       <div class="card-list-body filter-list-1539959952929">
                        @foreach ($projects as $project)                            
                            <div class="card card-task">
                                    <div class="progress">
                                       <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="card-body">
                                       <div class="card-title">
                                          <a href="{{ route('projects-detail', ['id' => $project->uuid])}}">
                                             <h6 data-filter-by="text" class="H6-filter-by-text" data-toggle="tooltip" title="Este es un ejemplo">{{ $project->name }}</h6>
                                          </a>
                                          <span class="text-small">{{ $project->description }}</span>
                                       </div>
                                       <div class="card-meta">
                                          <ul class="avatars">
                                             <li>
                                                <a href="#" data-toggle="tooltip" title="Sally">
                                                <img alt="Sally Harper" class="avatar" src="assets/img/avatar-female-3.jpg">
                                                </a>
                                             </li>
                                          </ul>
                                          <div class="d-flex align-items-center">
                                             <i class="material-icons">playlist_add_check</i>
                                             <span>3/4</span>
                                          </div>
       
                                       </div>
                                    </div>
                                 </div>                            
                        @endforeach
                       </div>
                    </div>
                    <!--end of content list body-->
                 </div>
                 <!--end of content list-->
              </div>
              <!--end of tab-->
              <div class="tab-pane fade active" id="activity" role="tabpanel" aria-labelledby="activity-tab" data-filter-list="list-group-activity">
                    <div class="content-list">
                        <div class="row content-list-head">
                            <div class="col-auto">
                                <h3>Activity</h3>
                            </div>
                            <form class="col-md-auto">
                                <div class="input-group input-group-round">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">filter_list</i>
                                        </span>
                                    </div>
                                    <input type="search" class="form-control filter-list-input" placeholder="Filter activity" aria-label="Filter activity" aria-describedby="filter-tasks">
                                </div>
                            </form>
                        </div>
                        <!--end of content list head-->
                        <div class="content-list-body">
                            <ol class="list-group list-group-activity filter-list-1539966754714"><li class="list-group-item">
                                    <div class="media align-items-center">
                                        <ul class="avatars">
                                            <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">playlist_add_check</i>
                                                </div>
                                            </li>
                                            <li>
                                                <img alt="Claire" src="assets/img/avatar-female-1.jpg" class="avatar filter-by-alt" data-filter-by="alt">
                                            </li>
                                        </ul>
                                        <div class="media-body">
                                            <div>
                                                <span class="h6 SPAN-filter-by-text" data-filter-by="text">Claire</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">completed the task</span><a href="#" data-filter-by="text" class="A-filter-by-text">Set up client chat channel</a>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">Just now</span>
                                        </div>
                                    </div>
                                </li><li class="list-group-item">
                                    <div class="media align-items-center">
                                        <ul class="avatars">
                                            <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">person_add</i>
                                                </div>
                                            </li>
                                            <li>
                                                <img alt="Ravi" src="assets/img/avatar-male-3.jpg" class="avatar filter-by-alt" data-filter-by="alt">
                                            </li>
                                        </ul>
                                        <div class="media-body">
                                            <div>
                                                <span class="h6 SPAN-filter-by-text" data-filter-by="text">Ravi</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">joined the project</span>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">5 hours ago</span>
                                        </div>
                                    </div>
                                </li><li class="list-group-item">
                                    <div class="media align-items-center">
                                        <ul class="avatars">
                                            <li>
                                                <div class="avatar bg-primary">
                                                    <i class="material-icons">playlist_add</i>
                                                </div>
                                            </li>
                                            <li>
                                                <img alt="Marcus" src="assets/img/avatar-male-1.jpg" class="avatar filter-by-alt" data-filter-by="alt">
                                            </li>
                                        </ul>
                                        <div class="media-body">
                                            <div>
                                                <span class="h6 SPAN-filter-by-text" data-filter-by="text">Marcus</span>
                                                <span data-filter-by="text" class="SPAN-filter-by-text">added the task</span><a href="#" data-filter-by="text" class="A-filter-by-text">Present concepts and establish direction</a>
                                            </div>
                                            <span class="text-small SPAN-filter-by-text" data-filter-by="text">Yesterday</span>
                                        </div>
                                    </div>
                                </li></ol>
                        </div>
                    </div>
                    <!--end of content list-->
                </div>
            
           </div>
           <div class="text-center d-flex align-items-center justify-content-center pt-5">
              <div>
                 <img alt="Empty State" src="{{ asset('assets/img/empty-state.svg') }}" class="w-50" style="opacity:.8" />
                 <span class="h3 d-block mt-3">Content Here</span>
                 <p>
                    Crear proyecto.
                 </p>
                 <a class="btn btn-primary btn-sm" href="pages-layouts.html">Back to Page Layouts</a>
              </div>
           </div>
        </div>
     </div>

  
         <form class="modal fade" id="project-edit-modal" tabindex="-1" role="dialog" aria-labelledby="project-edit-modal" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Edit Project</h5>
                     <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                     <i class="material-icons">close</i>
                     </button>
                  </div>
                  <!--end of modal head-->
                  <ul class="nav nav-tabs nav-fill">
                     <li class="nav-item">
                        <a class="nav-link active" id="project-edit-details-tab" data-toggle="tab" href="#project-edit-details" role="tab" aria-controls="project-edit-details" aria-selected="true">Details</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="project-edit-members-tab" data-toggle="tab" href="#project-edit-members" role="tab" aria-controls="project-edit-members" aria-selected="false">Members</a>
                     </li>
                  </ul>
                  <div class="modal-body">
                     <div class="tab-content">
                        <div class="tab-pane fade show active" id="project-edit-details" role="tabpanel" aria-labelledby="project-edit-details-tab">
                           <h6>General Details</h6>
                           <div class="form-group row align-items-center">
                              <label class="col-3">Name</label>
                              <input class="form-control col" type="text" value="Brand Concept and Design" name="project-name">
                           </div>
                           <div class="form-group row">
                              <label class="col-3">Description</label>
                              <textarea class="form-control col" rows="3" placeholder="Project description" name="project-description">Research, ideate and present brand concepts for client consideration</textarea>
                           </div>
                           <hr>
                           <h6>Timeline</h6>
                           <div class="form-group row align-items-center">
                              <label class="col-3">Start Date</label>
                              <input class="form-control col" type="date" placeholder="Project start" name="project-start">
                           </div>
                           <div class="form-group row align-items-center">
                              <label class="col-3">Due Date</label>
                              <input class="form-control col" type="date" placeholder="Project due" name="project-due">
                           </div>
                           <div class="alert alert-warning text-small" role="alert">
                              <span>You can change due dates at any time.</span>
                           </div>
                           <hr>
                           <h6>Visibility</h6>
                           <div class="row">
                              <div class="col">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="visibility-everyone" name="visibility" class="custom-control-input" checked="">
                                    <label class="custom-control-label" for="visibility-everyone">Everyone</label>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="visibility-members" name="visibility" class="custom-control-input">
                                    <label class="custom-control-label" for="visibility-members">Members</label>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="custom-control custom-radio">
                                    <input type="radio" id="visibility-me" name="visibility" class="custom-control-input">
                                    <label class="custom-control-label" for="visibility-me">Just me</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tab-pane fade" id="project-edit-members" role="tabpanel" aria-labelledby="project-edit-members-tab">
                           <div class="users-manage" data-filter-list="form-group-users">
                              <div class="mb-3">
                                 <ul class="avatars text-center">
                                    <li>
                                       <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar" data-toggle="tooltip" data-title="Claire Connors">
                                    </li>
                                    <li>
                                       <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar" data-toggle="tooltip" data-title="Marcus Simmons">
                                    </li>
                                    <li>
                                       <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar" data-toggle="tooltip" data-title="Peggy Brown">
                                    </li>
                                    <li>
                                       <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar" data-toggle="tooltip" data-title="Harry Xai">
                                    </li>
                                 </ul>
                              </div>
                              <div class="input-group input-group-round">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="material-icons">filter_list</i>
                                    </span>
                                 </div>
                                 <input type="search" class="form-control filter-list-input" placeholder="Filter members" aria-label="Filter Members" aria-describedby="filter-members">
                              </div>
                              <div class="form-group-users filter-list-1539959952867">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-1" checked="">
                                    <label class="custom-control-label" for="project-user-1">
                                       <div class="d-flex align-items-center">
                                          <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Claire Connors</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-2" checked="">
                                    <label class="custom-control-label" for="project-user-2">
                                       <div class="d-flex align-items-center">
                                          <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Marcus Simmons</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-3" checked="">
                                    <label class="custom-control-label" for="project-user-3">
                                       <div class="d-flex align-items-center">
                                          <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Peggy Brown</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-4" checked="">
                                    <label class="custom-control-label" for="project-user-4">
                                       <div class="d-flex align-items-center">
                                          <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Harry Xai</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-5">
                                    <label class="custom-control-label" for="project-user-5">
                                       <div class="d-flex align-items-center">
                                          <img alt="Sally Harper" src="assets/img/avatar-female-3.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Sally Harper</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-6">
                                    <label class="custom-control-label" for="project-user-6">
                                       <div class="d-flex align-items-center">
                                          <img alt="Ravi Singh" src="assets/img/avatar-male-3.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Ravi Singh</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-7">
                                    <label class="custom-control-label" for="project-user-7">
                                       <div class="d-flex align-items-center">
                                          <img alt="Kristina Van Der Stroem" src="assets/img/avatar-female-4.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Kristina Van Der Stroem</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-8">
                                    <label class="custom-control-label" for="project-user-8">
                                       <div class="d-flex align-items-center">
                                          <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">David Whittaker</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-9">
                                    <label class="custom-control-label" for="project-user-9">
                                       <div class="d-flex align-items-center">
                                          <img alt="Kerri-Anne Banks" src="assets/img/avatar-female-5.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Kerri-Anne Banks</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-10">
                                    <label class="custom-control-label" for="project-user-10">
                                       <div class="d-flex align-items-center">
                                          <img alt="Masimba Sibanda" src="assets/img/avatar-male-5.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Masimba Sibanda</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-11">
                                    <label class="custom-control-label" for="project-user-11">
                                       <div class="d-flex align-items-center">
                                          <img alt="Krishna Bajaj" src="assets/img/avatar-female-6.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Krishna Bajaj</span>
                                       </div>
                                    </label>
                                 </div>
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="project-user-12">
                                    <label class="custom-control-label" for="project-user-12">
                                       <div class="d-flex align-items-center">
                                          <img alt="Kenny Tran" src="assets/img/avatar-male-6.jpg" class="avatar mr-2">
                                          <span class="h6 mb-0 SPAN-filter-by-text" data-filter-by="text">Kenny Tran</span>
                                       </div>
                                    </label>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--end of modal body-->
                  <div class="modal-footer">
                     <button role="button" class="btn btn-primary" type="submit">
                     Save
                     </button>
                  </div>
               </div>
            </div>
        </form>
         <form action="{{ route('add-project') }}" method="POST"  class="modal fade" id="modal-add-project" tabindex="-1" role="dialog" aria-labelledby="task-add-modal" aria-hidden="true">
                {{ csrf_field() }}
            <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title">Nuevo proyecto</h5>
                     <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                     <i class="material-icons">close</i>
                     </button>
                  </div>
                  <!--end of modal head-->
                  <ul class="nav nav-tabs nav-fill">
                     <li class="nav-item">
                        <a class="nav-link active" id="task-add-details-tab" data-toggle="tab" href="#task-add-details" role="tab" aria-controls="task-add-details" aria-selected="true">Detalle</a>
                     </li>
                  </ul>
                  <div class="modal-body">
                     <div class="tab-content">
                        <div class="tab-pane fade show active" id="task-add-details" role="tabpanel" aria-labelledby="task-add-details-tab">
                           <h6>Detalles generales</h6>
                           <div class="form-group row align-items-center">
                              <label class="col-3">Nombre</label>
                              <input class="form-control col" type="text" placeholder="Task name" name="name">
                           </div>
                           <div class="form-group row">
                              <label class="col-3">Descripción</label>
                              <textarea class="form-control col" rows="3" placeholder="Task description" name="description"></textarea>
                           </div>
                           <hr>
                           <h6>Timeline</h6>
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
                     <button role="button" class="btn btn-primary" type="submit">
                     Crear proyecto
                     </button>
                  </div>
               </div>
            </div>
         </form>
@endsection