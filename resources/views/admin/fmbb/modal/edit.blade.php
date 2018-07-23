 <!-- Modal -->
 @if(!empty($str))
        <div class="modal fade" id="edit{{$str->id}}" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:100px 30px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form" method="POST" action="{{$action_update}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$str->id}}">
                @if($modal == 'region')
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Nom de la Région</label>
                  <input type="text" class="form-control" id="psw" name="region" value="{{$str->LIBELLE}}">
                </div>
                @endif
                @if( !empty($str->noms))
                <div class="form-group">
                  <label for="usrname"><span class="fa fa-user"></span> &nbsp;Nom et prénom</label>
                  <input type="text" class="form-control" id="usrname" name="noms" value="{{$str->noms}}">
                </div>
                @elseif( !empty($str->president))
                <div class="form-group">
                  <label for="usrname"><span class="fa fa-user"></span> &nbsp;Nom et prénom</label>
                  <input type="text" class="form-control" id="usrname" name="noms" value="{{$str->president}}">
                </div>
                @endif
                @if($modal == 'comite')
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Fonction</label>
                  <input type="text" class="form-control" id="psw" name="fonction" value="{{$str->fonctions}}">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-phone"></span> &nbsp;Contact</label>
                  <input type="numeric" class="form-control" id="psw" name="contact" value="{{$str->contacts}}">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-at"></span> &nbsp;Email</label>
                  <input type="email" class="form-control" id="psw" name="email" value="{{$str->emails}}">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-list-ol"></span> &nbsp;Position</label>
                  <span class="label label-pink pull-right">{{$str->position_system}}</span>
                    <select class="form-control" name="position">
                      @for($i=1;$i<=$post;$i++)
                          <option value="{{$i}}">{{$i}}</option>
                      @endfor
                    </select>
                </div>
                @endif
                @if($modal == 'technique' )
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Classification</label>
                  <input type="text" class="form-control" id="psw" name="classification" value="{{$str->classification}}">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-phone"></span> &nbsp;Validation</label>
                  <input type="numeric" class="form-control" id="psw" name="validation" value="{{$str->validation}}">
                </div>
                @endif
                @if(!empty($option))
                <div class="form-group">
                  <label for="psw"><span class="fa fa-image"></span> &nbsp;Logo de la Ligue</label>
                  <input type="file" class="form-control" id="psw" name="logo">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-image"></span> &nbsp;Localisation géographique de la région</label>
                  <input type="file" class="form-control" id="psw" name="img">
                </div>
                @endif
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
    @endif