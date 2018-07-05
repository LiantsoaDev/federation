@if( !array_is_empty($data) )

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Saison</th>
                                                <th>Programme d'activité</th>
                                                <th>Date de début</th>
                                                <th>Date fin</th>
                                                <th>Options</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach( $data as $value )
                                            <tr>
                                                <td>{{$value->saison_id}}</td>
                                                <td>{{$value->saison}}</td>
                                                <td>{{$value->contenu}}</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ date('d/m/Y',strtotime($value->debut)) }} </span></td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{ date('d/m/Y',strtotime($value->fin)) }} </span></td>
                                                <td>
                                                    <div class="label label-table label-success">{{ (empty($value->options)? 'Aucune option' : $value->options) }}</div>
                                                </td>
                                                <td>
                                                	<div class="btn-group">
		                                                <a href="{{route('admin.fmbb.edit')}}" class="btn btn-default"><i class="fa fa-plus"></i></a>
		                                                <a href="{{route('update.form.activite',$value->id)}}" class="btn btn-default"><i class="fa fa-pencil"></i></a>
		                                                <button class="btn btn-default"><i class="fa fa-trash"></i></button>
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
                                          <p>Aucune donnée disponible pour la saison {{ \Carbon\Carbon::now()->subYear()->year }}-{{ \Carbon\Carbon::now()->year }} </p>
                                        </div>
                                       </div>
                                </div>
                                @endif