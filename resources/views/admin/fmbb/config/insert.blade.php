<!-- Modal -->
       <div class="modal fade" id="insert" role="dialog">
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
                 <label for="usrname"><span class="fa fa-user"></span> &nbsp;Titre</label>
                 <input type="text" class="form-control" id="usrname" name="titre" required>
               </div>

               @if($errors->first('required'))
               <div class="col-md-6">
                 <div class="alert alert-danger" role="alert">
                   <h4 class="alert-heading">Avertissement</h4>
                   <p>{{ $errors->first('required') }}</p>
                 </div>
               </div>
               @endif

               <div class="form-group">
                 <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Description</label>
                 <input type="text" class="form-control" id="psw" name="description" required>
               </div>

               <div class="form-group">
                 <label for="psw"><span class="fa fa-phone"></span> &nbsp;Code ou Texte</label>
                 <textarea rows="6" class="form-control" name="code"></textarea>
               </div>

               <div class="form-group">
                 <label for="psw"><span class="fa fa-image"></span> &nbsp;Photo de profil ou Avatar</label>
                 <input type="file" class="form-control" id="psw" name="file">
               </div>
               <small><code>Information : </code> La taille du landing page doit être au moins de <code>1500 x 640 pixels.</code></small>

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
