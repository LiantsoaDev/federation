 <!-- Modal -->
        <div class="modal fade" id="add" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:100px 30px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form" method="POST" action="{{$action}}">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="usrname"><span class="fa fa-user"></span> &nbsp;Nom du Palmarès</label>
                  <textarea type="text" class="form-control" id="usrname" name="prix"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Date</label>
                  <div id="demo-dp-component">
                      <div class="input-group date">
                          <input type="text" id="datepicker" class="form-control" name="date" autocomplete="off">
                          <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
                      </div>
                      <small class="text-muted">choisissez une date</small>
                  </div>
                </div>
                <div class="form-group">
                    <label for="psw"><span class="fa fa-eye"></span> &nbsp;Option</label>
                        <div class="checkbox">
                            <!-- Inline Icon Checkboxes -->
                            <label class="form-checkbox form-icon active">
                            <input type="checkbox" name="option" checked=""> Afficher ( Par défaut ) </label>
                        </div>
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-list-ol"></span> &nbsp;Catégories</label>
                    <select class="form-control" name="categorie">
                      @foreach($competition as $cop)
                      <option value="{{$cop->id}}">Equipe Nationale {{$cop->libellecategorie}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-list-ol"></span> &nbsp;Genre</label>
                    <select class="form-control" name="genre">
                      <option value="homme">Homme</option>
                      <option value="femme">Femme</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Annuler</button>
               <button type="submit" class="btn btn-success btn-default pull-right"><span class="fa fa-check"></span> Enregistrer</button>
            </div>
            </form>
          </div>
          
        </div>
      </div> 
    <!-- end modal --> 