<!-- Modal -->
  <div class="modal fade" id="delete{{$str->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Suppression d'un Membre de la WABC</h4>
        </div>
        <div class="modal-body">
          <p>Voulez vous supprimer définitivement le membre "{{$str->nom}}" ?.</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('admin.community.delete',$str->id)}}" type="button" class="btn btn-danger">Supprimer</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        </div>
      </div>
      
    </div>
  </div>