<div class="modal fade" id="update{{$categ->id}}" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Voulez-vous modifier la catégorie "<b>{{$categ->libellecategorie}}</b>" ?</h4>
        </div>
        <div class="modal-body">
          <!--Text Input-->
          <form method="POST" action="{{$update}}">
            {{csrf_field()}}
          <div class="form-group">
              <label class="col-md-3 control-label" for="demo-text-input">Catégorie : </label>
              <div class="col-md-9">
                  <input type="hidden" name="id" value="{{$categ->id}}">
                  <input type="text" id="demo-text-input" class="form-control" name="categorie" value="{{$categ->libellecategorie}}">
                  <small class="help-block">(*) Ne pas utiliser une catégorie existante</small>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Modifier</button>
          <button type="reset" class="btn btn-default" data-dismiss="modal">Annuler</button>
        </div>
        </form>
      </div>
      
    </div>
  </div>