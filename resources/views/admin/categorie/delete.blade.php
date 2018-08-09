<div class="modal fade" id="delete{{$categ->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Voulez-vous supprimer la catégorie "<b>{{$categ->libellecategorie}}</b>" ?</h4>
        </div>
        <div class="modal-footer">
          <a href="{{route('admin.categorie.delete',$categ->id)}}" type="submit" class="btn btn-danger">Supprimer</a>
          <button type="reset" class="btn btn-default" data-dismiss="modal">Annuler</button>
        </div>
      </div>
      
    </div>
  </div>