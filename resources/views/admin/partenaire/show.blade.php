@extends('admin.layouts.app')

@section('style')
@include('admin.style')
@endsection


@section('content')


<section id="page-content">
  <div class="row">
    <div class="col-lg-12">
      <!-- notification message -->
      @include('admin.notification')
      <div class="panel">
                                  <div class="panel-heading">
                                      <h3 class="panel-title">Listes des Partenaires de la fmbb </h3>
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
                                      @if($errors->any())
                                      <div class="col-md-6">
                                        <div class="alert alert-danger" role="alert">
                                          <h4 class="alert-heading">Erreur(s)</h4>
                                          @foreach($errors->all() as $errors)
                                          	<li>{{$errors}}</li>
                                          @endforeach
                                        </div>
                                      </div>
                                      @endif

                                      @include('admin.partenaire.insert')

                                      @if( array_is_empty($datas) )
                                        @include('admin.fmbb.config.warning')
                                      @else
                                      <div class="table-responsive">
                                          <table class="table table-striped">
                                              <thead>
                                                  <tr>
                                                      <th>Aperçu Icône</th>
                                                      <th>Titre</th>
                                                      <th>Description</th>
                                                      <th>Options</th>
                                                      <th>Action</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($datas as $dt)
                                                  <tr>
                                                      <td><div class="text-center"><img src="{{asset('images/partners/'.$dt->icone)}}" class="rounded" alt="..." width="150" height="100"></div></td>
                                                      <td class="col-md-1">{{$dt->titre}}</td>
                                                      <td>{{$dt->description}}</td>
                                                      <td class="col-md-1">
                                                          {!! $dt->option !!}
                                                      </td>
                                                      <td class="col-md-2">
                                                      	<a href="{{route('admin.partner.edit',$dt->id)}}" class="btn btn-default btn-icon icon-lg fa fa-pencil"></a>
                                                      	<button class="btn btn-danger btn-icon icon-lg fa fa-times" data-toggle="modal" data-target="#delete{{$dt->id}}"></button>
                                                      	@include('admin.partenaire.delete')
                                                      </td>
                                                      <!-- modal -->
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


@endsection