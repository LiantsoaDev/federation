<div class="modal fade" id="delete{{$dt->id_palmares}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Supprimer ce palmarès</h4>
        </div>
        <div class="modal-body">
          <p>Voulez-vous supprimer définitivement le Palmarès : <b>{{$dt->prix}}</b> ?</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('admin.palmares.delete',$dt->id_palmares)}}" type="button" class="btn btn-danger">Supprimer</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        </div>
      </div>
      
    </div>
  </div>