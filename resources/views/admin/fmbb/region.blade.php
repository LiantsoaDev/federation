@include('admin.header-match')

@include('admin.style')
<section id="page-content">
	<div class="row">
                            <div class="col-sm-8">
                                <div class="panel">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Listes des régions</h3>
                                    </div>
                                    <!-- Striped Table -->
                                    <!--===================================================-->
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nom de la Région</th>
                                                        <th>Président réprésentant</th>
                                                        <th>Contrôle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($lists as $key => $str)
                                                    <tr>
                                                        <td>{{$key}}</td>
                                                        <td>{{$str->LIBELLE}}</td>
                                                        <td>{{$str->president}}</td>
                                                        @if(!empty($str))
                                                        <td>
                                                        <button class="btn btn-mint btn-icon icon-lg fa fa-pencil" data-toggle="modal" data-target="#edit{{$str->id}}"></button>
                                                        @include('admin.fmbb.modal.edit')
                                                         <button class="btn btn-primary btn-icon icon-lg fa fa-star"></button>
                                                        <button class="btn btn-danger btn-icon icon-lg fa fa-times" data-toggle="modal" data-target="#delete{{$str->id}}"></button>
                                                        @include('admin.fmbb.modal.delete')
                                                        </td>
                                                        @endif
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
                            <div class="col-md-4">
						        <!-- message de notification -->
						        @include('admin.notification')
						        <!-- fin message de notification -->
						        <div class="panel">
						            <div class="panel-heading">
						                <h3 class="panel-title">Ajout Région </h3>
						            </div>
						            <div class="panel-body">
						            <!--Dismissible popover-->
						            <a href="#" class="btn btn-default btn-labeled fa fa-plus add-popover" data-original-title="Ajout Région" data-content="Ajouter une région" data-placement="top" data-trigger="focus" data-toggle="modal" data-target="#myModal">Ajouter Région</a>
						            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                                    @include('admin.fmbb.modal.create')
						            </div>
						        </div>
						    </div>
                        </div>
</section>

@include('admin.footer-match')