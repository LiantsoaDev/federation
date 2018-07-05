<!-- Modal -->
  <div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Suppression d'un programme d'activité</h4>
        </div>
        <div class="modal-body">
          <p>Voulez-vous supprimer indéfiniment ce programme d'activité ?</p>
        </div>
        <div class="modal-footer">
          <a href="{{route('activite.delete',$value->id)}}" type="button" class="btn btn-danger">Supprimer</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
        </div>
      </div>
      
    </div>
  </div>