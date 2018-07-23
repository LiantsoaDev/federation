 <!-- Modal -->
        <div class="modal fade" id="update{{$str->id}}" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header" style="padding:100px 30px;">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="padding:40px 50px;">
              <form role="form" method="POST" action="{{$update}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$str->id}}">
                <div class="form-group">
                  <label for="usrname"><span class="fa fa-user"></span> &nbsp;Nom et prénom</label>
                  <input type="text" class="form-control" id="usrname" name="nom" value="{{$str->nom}}" autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Fédération affilée</label>
                  <input type="text" class="form-control" id="psw" name="federation" value="{{$str->federation}}">
                </div>
                <div class="form-group">
                  <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Licence ID</label>
                  <input type="text" class="form-control" id="psw" name="licence" value="{{ (empty($str->licence_id)? null : $str->licence_id) }}">
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