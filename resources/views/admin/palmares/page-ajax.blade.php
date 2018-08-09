<div class="panel-heading">
                                        <h3 class="panel-title">Palmarès pour l'Equipe Nationale catégorie : <b>{{$categorie}}</b> </h3>
                                    </div>
                                    <!-- Striped Table -->
                                    <!--===================================================-->
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            @if( array_is_empty($datas) )
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            <!-- Warning Alert layout example -->
                                            <div class="alert alert-dark media fade in">
                                                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                                <div class="media-left">
                                                    <span class="icon-wrap icon-wrap-xs alert-icon">
                                                    <i class="fa fa-bolt fa-lg"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="alert-title">Aucun donnée trouvé</h4>
                                                    <p class="alert-message">Oups ! nous n'avons trouvé aucune donnée n'a été trouvé.</p>
                                                </div>
                                            </div>
                                            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                            @else
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Palmarès</th>
                                                        <th>Date/Année</th>
                                                        <th>Genre</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datas as $dt)
                                                    <tr>
                                                        <td><i class="fa fa-trophy"></i></td>
                                                        <td class="col-sm-6">{{$dt->prix}}</td>
                                                        <td><i class="fa fa-clock-o"></i> {{date('Y',strtotime($dt->date))}}</td>
                                                        <td><div class="label label-table label-mint">{{ucfirst($dt->genre)}}</div></td>
                                                        <td>
                                                        	<a href="{{route('admin.palmares.edit',$dt->id_palmares)}}" class="btn btn-default fa fa-pencil"></a>
                                                			<button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delete{{$dt->id_palmares}}"></button>
                                                            @include('admin.palmares.modal.delete')
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            @endif
                                        </div>
                                    </div>