@include('admin.header-match')

@include('admin.style')

<section id="page-content">
  <div class="row">

  	<div class="col-md-8">
        <!-- message de notification -->
        @include('admin.notification')
        <!-- fin message de notification -->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Ajout d'un nouveau membre du comité </h3>
            </div>
            <div class="panel-body">
            <!--Dismissible popover-->
            <a href="#" class="btn btn-default btn-labeled fa fa-plus add-popover" data-original-title="Ajout comité" data-content="Ajouter un membre" data-placement="top" data-trigger="focus" data-toggle="modal" data-target="#myModal">Ajouter un membre</a>
            <a href="#" class="btn btn-danger btn-labeled fa fa-trash add-popover" data-toggle="popover">Supprimer membre(s)</a>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            </div>
        </div>
    
    </div>

   @include('admin.fmbb.modal.create')  

    <div class="col-md-12">
         <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"> {{$titre}}</h3>
                    </div>
                                    <div class="panel-body">
                                        <!--Hover Rows--> 
                                        <!--===================================================-->
                                        <table class="table table-hover table-vcenter">
                                            <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    @foreach($columns as $col)
                                                     <th class="hidden-xs">{{$col}}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($getstructure as $str)
                                                <tr>
                                                    <td>
                                                        <div class="checkbox">
                                                            <label class="form-checkbox form-icon active">
                                                            <input type="checkbox">
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="media-object center"> <img src="{{link_img('images/uploads/'.$str->avatarurl)}}" width="30" height="20" alt="" class="img-rounded img-sm"> </div>
                                                    </td>
                                                    <td class="hidden-xs"> 
                                                      {{$str->noms}} 
                                                    </td>
                                                    <td class="hidden-xs">
                                                      @if($str->fonctions)
                                                      <b> {{$str->fonctions}} </b>
                                                      @else
                                                       <b> {{$str->classification}} </b>
                                                       @endif
                                                    </td>
                                                    <td class="hidden-xs"> 
                                                      @if($str->contacts)  
                                                        {{$str->contacts}}
                                                      @else
                                                        {{$str->validation}}
                                                      @endif 
                                                    </td>
                                                    <td class="hidden-xs"> 
                                                      {{$str->emails}}
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-mint btn-icon icon-lg fa fa-pencil" data-toggle="modal" data-target="#edit{{$str->id}}"></button>
                                                        @include('admin.fmbb.modal.edit')
                                                         <button class="btn btn-primary btn-icon icon-lg fa fa-star"></button>
                                                        <button class="btn btn-danger btn-icon icon-lg fa fa-times" data-toggle="modal" data-target="#delete{{$str->id}}"></button>
                                                        @include('admin.fmbb.modal.delete')
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <!--===================================================--> 
                                        <!--End Hover Rows--> 
                                    </div>
                                </div>
                            </div>

  </div>                     
</section> 

@include('admin.footer-match')