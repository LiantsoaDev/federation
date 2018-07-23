@if($modal == 1)
 <!-- Modal -->
  <div class="modal fade" id="delete{{$str->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Supprimer Membre</h4>
        </div>
        <div class="modal-body">
          <p>Voulez vous supprimer "<b>{{$str->noms}}</b>" en tant que "<b>{{$str->fonctions}}</b>" ?</p>
        </div>
        <div class="modal-footer">
           <a href="{{route('admin.fmbb.delete-comity',$str->id)}}" type="button" class="btn btn-danger">Supprimer</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        </div>
      </div>
      
    </div>
  </div>
@elseif(!empty($option))
<!-- Modal -->
  <div class="modal fade" id="delete{{$str->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Supprimer Membre</h4>
        </div>
        <div class="modal-body">
          <p>Voulez vous supprimer "<b>{{$str->president}}</b>" en tant que "<b>{{$str->LIBELLE}}</b>" ?</p>
        </div>
        <div class="modal-footer">
           <a href="{{route('admin.region.delete',$str->id)}}" type="button" class="btn btn-danger">Supprimer</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        </div>
      </div>
      
    </div>
  </div>
@else
<!-- Modal -->
  <div class="modal fade" id="delete{{$str->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Supprimer Membre</h4>
        </div>
        <div class="modal-body">
          <p>Voulez vous supprimer "<b>{{$str->noms}}</b>" en tant que "<b>{{$str->classification}}</b>" ?</p>
        </div>
        <div class="modal-footer">
           <a href="{{route('admin.fmbb.delete-technic',$str->id)}}" type="button" class="btn btn-danger">Supprimer</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        </div>
      </div>
      
    </div>
  </div>
  @endif