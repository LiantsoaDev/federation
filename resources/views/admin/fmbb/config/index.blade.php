@include('admin.header-match')
@include('admin.style')
<section id="page-content">
  <div class="row">
    <div class="col-lg-12">
      <!-- notification message -->
      @include('admin.notification')
      <div class="panel">
                                  <div class="panel-heading">
                                      <h3 class="panel-title">Listes des Landing Page </h3>
                                  </div>
                                  <!--Data Table-->
                                  <!--===================================================-->
                                  <div class="panel-body">
                                      <div class="pad-btm form-inline">
                                          <div class="row">
                                              <div class="col-sm-6 table-toolbar-left">
                                                  <div class="btn-group">
                                                      <button class="btn btn-default" data-toggle="modal" data-target="#insert"><i class="fa fa-plus"></i></button>
                                                      <button class="btn btn-default"><i class="fa fa-print"></i></button>
                                                      <button class="btn btn-default"><i class="fa fa-exclamation-circle"></i></button>
                                                      <button class="btn btn-default"><i class="fa fa-trash"></i></button>
                                                  </div>
                                              </div>
                                              <div class="col-sm-6 table-toolbar-right">
                                                  <div class="form-group">
                                                      <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                  </div>
                                                  <div class="btn-group">
                                                      <button class="btn btn-default"><i class="fa fa fa-cloud-download"></i></button>
                                                      <div class="btn-group">
                                                          <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                                          <i class="fa fa-cog"></i>
                                                          <span class="caret"></span>
                                                          </button>
                                                          <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                                              <li><a href="#">Action</a></li>
                                                              <li><a href="#">Another action</a></li>
                                                              <li><a href="#">Something else here</a></li>
                                                              <li class="divider"></li>
                                                              <li><a href="#">Separated link</a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      @if($errors->has('file'))
                                      <div class="col-md-6">
                                        <div class="alert alert-danger" role="alert">
                                          <h4 class="alert-heading">Avertissement</h4>
                                          <p>{{ $errors->first('file') }}</p>
                                        </div>
                                      </div>
                                      @endif
                                      @include('admin.fmbb.config.insert')
                                      @if( array_is_empty($datas) )
                                        @include('admin.fmbb.config.warning')
                                      @else
                                      <div class="table-responsive">
                                          <table class="table table-striped">
                                              <thead>
                                                  <tr>
                                                      <th>Aperçu Image</th>
                                                      <th>Titre</th>
                                                      <th>Description</th>
                                                      <th>Statut</th>
                                                      <th>Code</th>
                                                      <th>Dernière action</th>
                                                      <th>Action</th>
                                                      <th>Supprimer</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($datas as $dt)
                                                  <tr>
                                                      <td><div class="text-center"><img src="{{asset('images/uploads/'.$dt->urlimage)}}" class="rounded" alt="..." width="250" height="150"></div></td>
                                                      <td>{{$dt->titre}}</td>
                                                      <td>{{$dt->description}}</td>
                                                      <td>
                                                          {!! $dt->statut !!}
                                                      </td>
                                                      <td>{{$dt->code}}</td>
                                                      <td>{{ date('d/m/Y',strtotime($dt->updated_at)) }}</td>
                                                      <td><a href="{{route('admin.config.apply',$dt->id)}}" class="btn btn-success" {{$dt->action}}>Appliquer</a></td>
                                                      <td><button class="btn btn-danger btn-icon icon-lg fa fa-times" data-toggle="modal" data-target="#delete{{$dt->id}}"></button></td>
                                                      @include('admin.fmbb.config.delete')
                                                  </tr>
                                                @endforeach
                                              </tbody>
                                          </table>
                                      </div>
                                      @endif
                                  </div>
                                  <!--===================================================-->
                                  <!--End Data Table-->
                              </div>
    </div>
  </div>
</section>

@include('admin.footer-match')
