@include('admin.header-match')


<section id="page-content">
  	<div class="row">
      	<div class="col-lg-12">
          	<!-- Message de notification -->
          	@include('admin.notification')
          	<!-- End Notification -->


<div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Listes de tous les Articles</h3>
                            </div>
                            <div class="panel-body">
                                    <div class="pad-btm form-inline">
                                        <div class="row">
                                            <div class="col-sm-6 text-xs-center">
                                                <div class="form-group">
                                                    <label class="control-label">Statut</label>
                                                    <select id="demo-foo-filter-status" class="form-control">
                                                        <option value="">Voir tous</option>
                                                        <option value="active">Publié</option>
                                                        <option value="disabled">Archivé</option>
                                                        <option value="waiting">En attente</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-xs-center text-right">
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- Foo Table - Filtering -->
                                <!--===================================================-->
                                <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="15">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true">Image illustration</th>
                                            <th>Titre de l'Article</th>
                                            <th data-hide="phone, tablet">Description des Articles</th>
                                            <th data-hide="phone, tablet">Date de publication</th>
                                            <th data-hide="phone, tablet">Statut</th>
                                            <th data-hide="phone, tablet">Options</th>
                                            <th data-hide="phone, tablet">Suppression</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	@foreach( $all as $a )

                                        <tr>
                                            <td><div class="text-center"><img src="{{asset('images/uploads/'.$a->image)}}" class="rounded" alt="..." width="250" height="150"></div></td>
                                            <td>{{$a->titre}}</td>
                                            <td>{!! $a->contenu !!}<hr><b>Tags: <i>{{$a->tag}}</i></b></td>
                                            <td>{{ $a->date_publication }}</td>
                                            <td>{!! $a->statut !!}</td>
                                            <td><div class="panel-body demo-jasmine-btn"><a href="{{route('modif.article',$a->id)}}" class="btn btn-default btn-icon btn-circle icon-lg fa fa-edit"></a><a href="{{route('detail.article.admin',$a->id)}}" class="btn btn-mint btn-icon btn-circle icon-lg fa fa-eye"></a>{!!$a->priorite!!}<a href="{{route('article.archive',$a->id)}}" class="btn btn-danger btn-icon btn-circle icon-lg fa fa-trash"></a></div></td>
                                            <td><div class="panel-body demo-jasmine-btn"><a href="{{route('article.archive',$a->id)}}" class="btn btn-danger btn-labeled fa fa-times">Suppression</a></div></td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                <div class="text-right">
                                                    {{ $all->links() }}
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <!--===================================================-->
                                <!-- End Foo Table - Filtering -->
                            </div>
                        </div>


		</div>
	</div>
</section>

@include('admin.footer-match')