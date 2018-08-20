 <!-- Modal -->
        <div class="modal fade" id="create" role="dialog">
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
                  <input type="text" class="form-control" id="usrname" name="nom" placeholder="ex: Rakoto Tahiana" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Fédération affilée</label>
                  <input type="text" class="form-control" id="psw" name="federation" value="Fédération Malagasy du Basket-ball (FMBB)" autocomplete="on">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Licence ID</label>
                  <input type="text" class="form-control" id="psw" name="licence" placeholder="ex: 260086432332">
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