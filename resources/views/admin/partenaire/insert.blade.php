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

               <div class="form-group">
                 <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Description</label>
                 <input type="text" class="form-control" id="psw" name="description" required>
               </div>

               <div class="form-group">
                 <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Description : Cocher pour afficher</label>
                 <div class="checkbox">
                    <!-- Inline Icon Checkboxes -->
                    <label class="form-checkbox form-icon active">
                    <input type="checkbox" name="option" checked=""> Afficher </label>
                </div>
               </div>

               <div class="form-group">
                 <label for="psw"><span class="fa fa-image"></span> &nbsp;Icône ou logo du partenaire</label>
                 <input type="file" class="form-control" id="psw" name="file">
               </div>
               <small><code>Information : </code> La taille du logo ou icône page doit être au moins de <code>600x600px</code> et le fichier doit être un <code>.png ou .jpeg ou .svg ou .jpg</code></small><hr>
               <div class="alert alert-dark" role="alert">
                  <strong><small>Taille standard : </small></strong> 583 x 418 px
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
