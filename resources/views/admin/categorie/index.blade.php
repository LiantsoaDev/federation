@extends('admin.layouts.app')

@section('content')

<div id="page-content">
	<div class="row">
		<div class="col-sm-7">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Ajouter une catégorie</h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--Buttons with label-->
                                        <form method="POST" action="{{$action}}">
                                            {{ csrf_field() }}
                                        <!--===================================================-->
                                        <button class="btn btn-default btn-labeled fa fa-save pull-right">Enregistrer</button>
                                        <!--===================================================-->
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="demo-text-input">Ajouter une catégorie :</label>
                                            <div class="col-md-6">
                                                <input type="text" id="demo-text-input" name="categorie" class="form-control" placeholder="ex: U18">
                                                <small class="help-block">(*) ajouter une catégorie inexistante dans la liste</small>
                                            </div>
                                        </div>
                                        <!--===================================================-->
                                        </form>
                                    </div>
                                    @if( $errors->first('categorie') )
                                        <div class="alert alert-danger media fade in">
                                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                            <div class="media-left">
                                                <span class="icon-wrap icon-wrap-xs alert-icon">
                                                <i class="fa fa-bolt fa-lg"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="alert-title">Avertissement</h4>
                                                <p class="alert-message">{{$errors->first('categorie')}}</p>
                                            </div>
                                        </div>
                                        @endif
                                    @include('admin.notification')
                                </div>
                            </div>
		<div class="col-sm-7">

								<div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Listes des catégories</h3>
                                    </div>
                                    <!-- Striped Table -->
                                    <!--===================================================-->
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>libelle catégorie</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($categorie as $categ)
                                                    <tr>
                                                        <td><i class="fa fa-trophy"></i></td>
                                                        <td><div class="label label-table label-mint">{{$categ->libellecategorie}}</div></td>
                                                        <td>
                                                        	<button class="btn btn-default fa fa-pencil" data-toggle="modal" data-target="#update{{$categ->id}}"></button>
                                                            @include('admin.categorie.update')
                                                			<button class="btn btn-danger fa fa-trash" data-toggle="modal" data-target="#delete{{$categ->id}}"></button>
                                                            @include('admin.categorie.delete')
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!--===================================================-->
                                    <!-- End Striped Table -->
                                </div>

		</div>
		
	</div>
	
</div>

@endsection