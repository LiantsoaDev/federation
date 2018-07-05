 <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:100px 30px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form" method="POST" action="{{$action}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <label for="usrname"><span class="fa fa-user"></span> &nbsp;Nom et prénom</label>
                  <input type="text" class="form-control" id="usrname" name="noms" placeholder="ex: Rakoto Tahiana">
                </div>
                @if($modal == 'comite')
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Fonction</label>
                  <input type="text" class="form-control" id="psw" name="fonction" placeholder="fonction actuelle...">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-phone"></span> &nbsp;Contact</label>
                  <input type="numeric" class="form-control" id="psw" name="contact" placeholder="+261...">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-at"></span> &nbsp;Email</label>
                  <input type="email" class="form-control" id="psw" name="email" placeholder="example@gmail.com">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-list-ol"></span> &nbsp;Position</label>
                    <select class="form-control" name="position">
                      @for($i=1;$i<=$post;$i++)
                      <option value="{{$i}}">{{$i}}</option>
                      @endfor
                    </select>
                </div>
                @endif
                @if($modal == 'technique')
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Classification</label>
                  <input type="text" class="form-control" id="psw" name="classification" placeholder="ex: National ou Régional ou Stagiaire">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-phone"></span> &nbsp;Validation</label>
                  <input type="text" class="form-control" id="psw" name="validation" placeholder="ex: 2ans">
                </div>
                @endif
                @if($modal == 'region')
                <div class="form-group">
                  <label for="psw"><span class="fa fa-phone"></span> &nbsp;Region</label>
                  <input type="text" class="form-control" id="psw" name="region" placeholder="ex: Analamanga">
                </div>
                @endif
                <div class="form-group">
                  <label for="psw"><span class="fa fa-image"></span> &nbsp;Photo de profil ou Avatar</label>
                  <input type="file" class="form-control" id="psw" name="file">
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