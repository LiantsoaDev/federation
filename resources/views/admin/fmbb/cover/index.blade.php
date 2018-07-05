@include('admin.header-match')
@include('admin.style')
<section id="page-content">
  <div class="row">
    <div class="col-md-8">
      <!-- notification message -->
      @include('admin.notification')
      <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Listes des Images de Couverture</h3>
                            </div>
                            <!--Data Table-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <div class="pad-btm form-inline">
                                    <div class="row">
                                        <div class="col-sm-6 table-toolbar-left">
                                            <div class="btn-group">
                                                <button class="btn btn-default"><i class="fa fa-plus"></i></button>
                                                <button class="btn btn-default"><i class="fa fa-print"></i></button>
                                                <button class="btn btn-default"><i class="fa fa-exclamation-circle"></i></button>
                                                <button class="btn btn-default"><i class="fa fa-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if(array_is_empty($list))
                                  @include('admin.fmbb.config.warning')
                                @else

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Aperçu Image</th>
                                                <th>Options</th>
                                                <th>Affichage</th>
                                                <th>Dernière modification</th>
                                                <th>Action</th>
                                                <th>Suppression</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($list as $lst)
                                            <tr>
                                                <td><div class="text-center"><img src="{{ $lst->urlimage }}" class="rounded" alt="..." width="100" height="100"></div></td>
                                                <td>{{$lst->options}}</td>
                                                <td>{!! $lst->affichage !!}</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ date('d/m/Y',strtotime($lst->updated_at)) }} </span></td>
                                                <td><a href="{{route('admin.fmbb.apply-cover',$lst->id)}}" class="btn btn-success" {{$lst->action}}>Appliquer</a></td>
                                                <td><button class="btn btn-danger btn-icon icon-lg fa fa-times" data-toggle="modal" data-target="#delete{{$lst->id}}"></button></td>
                                                @include('admin.fmbb.cover.delete')
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

    <div class="col-md-4">
                               <div class="panel">
                                   <div class="panel-body">
                                       <div class="carousel slide" id="c-slide-2" data-ride="carousel">
                                           <div class="carousel-inner">
                                               <div class="item active">
                                                   <!-- Add new Image Cover -->
                                                   <form method="post" action="{{$action}}" enctype="multipart/form-data">
                                                     {{csrf_field()}}
                                                   <div class="eq-height">
                                                       <div class="text-dark"> Ajout d'Image : </div><hr>
                                                       <div class="form-group">
                                                         <label for="psw"><span class="fa fa-list-ol"></span> &nbsp;Choix de l'Image</label>
                                                           <select class="form-control" name="type">
                                                                 <option value="cover">Image de Couverture (Premier plan Accueil)</option>
                                                                 <option value="logo">Logo (Toutes les pages)</option>
                                                           </select>
                                                       </div>
                                                       <div class="text-dark text-lg pull-left">
                                                          <input type="file" class="form-control" id="file" name="file" required>
                                                       </div>
                                                       <div class="text-dark pull-right">
                                                           <button type="submit" class="btn btn-success btn-sm">
                                                           <i class="fa fa-check pad-rgt-5"></i> valider
                                                         </button>
                                                       </div>
                                                   </div>
                                                   <small style="color:red">
                                                     @if( $errors->any() )
                                                       @foreach( $errors->all() as $er )
                                                        <li>{{$er}}</li>
                                                       @endforeach
                                                     @endif
                                                   </small>
                                                 </form>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
           </div>

  </div>
</section>

@include('admin.footer-match')
