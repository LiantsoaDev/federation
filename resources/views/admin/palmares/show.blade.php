@extends('admin.layouts.app')

@section('style')
@include('admin.style')
@endsection

@section('content')

<div id="page-content">
	<div class="row">
		<div class="col-sm-7">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Tableau de contrôle</h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--Buttons with label-->
                                        <!--===================================================-->
                                        <a href="{{route('admin.palmares.show')}}" class="btn btn-primary btn-labeled fa fa-undo pull-right">Retour</a>
                                        <button onclick="window.location.reload(true);" class="btn btn-success btn-labeled fa fa-refresh pull-right">Actualiser</button>
                                        <button class="btn btn-default btn-labeled fa fa-shopping-cart pull-right" data-toggle="modal" data-target="#add">Ajouter un Palmarès</button>
                                        @include('admin.palmares.modal.create')
                                        <!--===================================================-->
                                        <div class="col-sm-3">
                                        <div class="form-group">
                                                <select class="form-control" name="saison" onchange="getcategorie(this.value)">
                                                    @foreach($competition as $comp)
                                                    <option value="{{$comp->id}}">Equipe Nationale {{$comp->libellecategorie}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    	</div>
                                    </div>
                                    @include('admin.notification')
                                </div>
                            </div>
		<div class="col-sm-10">

								<div class="panel" id="txtHint">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Listes des palmarès : </h3>
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
                                                        <th>Catégorie</th>
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
                                                        <td><div class="label label-table label-primary">{{ucfirst($dt->libellecategorie)}}</div></td>
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
                                    <!--===================================================-->
                                    <!-- End Striped Table -->
                                </div>

		</div>
		
	</div>
	
</div>

@section('script')
@include('admin.palmares.ajax')
@endsection

@endsection