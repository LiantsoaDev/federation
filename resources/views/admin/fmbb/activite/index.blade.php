@include('admin.header-match')

<section id="page-content">
	<div class="row">

        <div class="col-lg-10">
			<!-- Message de notification -->
            @include('admin.notification')
            <!-- End Notification -->

			<div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Programme d'activité</h3>
                            </div>
                            <!--Data Table-->
                            <!--===================================================-->
                            <div class="panel-body">
                                <div class="pad-btm form-inline">
                                    <div class="row">
                                        <div class="col-sm-6 table-toolbar-left">
                                            <div class="panel-body">
                                                <a href="{{route('admin.fmbb.edit')}}" class="btn btn-primary btn-labeled fa fa-plus">Ajouter un programme</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 table-toolbar-right">
                                            <div class="form-group">
                                                <label for="psw"><span class="fa fa-list-ol"></span> Saison : </label>
                                                <select class="form-control" name="saison" onchange="getseason(this.value)">
                                                
                                                @foreach($listsaison as $list)
                                                    @if(date('Y') == $list->saison )
                                                        <option value="{{$list->saison}}" selected="selected">{{$list->saison}}</option>
                                                    @else
                                                        <option value="{{$list->saison}}">{{$list->saison}}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="txtHint">
                                @if( !array_is_empty($data) )

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Saison</th>
                                                <th>Programme d'activité</th>
                                                <th>Date de début</th>
                                                <th>Date fin</th>
                                                <th>Lieu</th>
                                                <th>Options</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach( $data as $value )
                                            <tr>
                                                <td>{{$value->saison}}</td>
                                                <td class="col-sm-6">{{$value->contenu}}</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ date('d/m/Y',strtotime($value->debut)) }} </span></td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ date('d/m/Y',strtotime($value->fin)) }} </span></td>
                                                <td class="col-sm-2">{{$value->lieu}}</td>
                                                <td>
                                                    <div class="label label-table label-success">{{ (empty($value->options)? 'Aucune option' : $value->options) }}</div>
                                                </td>
                                                <td class="col-sm-3">
                                                	<div class="btn-group">
		                                                <a href="{{route('admin.fmbb.edit')}}" class="btn btn-default"><i class="fa fa-plus"></i></a>
		                                                <a href="{{route('update.form.activite',$value->idactivite)}}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
		                                                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#delete{{$value->idactivite}}"><i class="fa fa-trash"></i></a>
                                                        @include('admin.fmbb.activite.modal')
		                                            </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>

                                @else
								<div class="panel-body">
                                      <div class="col-md-8">
                                        <div class="alert alert-success" role="alert">
                                          <h4 class="alert-heading">Avertissement!</h4>
                                          <p>Aucune donnée disponible pour la saison {{date('Y')}} </p>
                                        </div>
                                       </div>
                                </div>
                                @endif
                            </div>
                            </div>
                            <!--===================================================-->
                            <!--End Data Table-->
                        </div>

        </div>

     </div>
</section>

@include('admin.footer-match')