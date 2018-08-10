<!-- Modal -->
       <div class="modal fade" id="update{{$dt->id}}" role="dialog">
       <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">
           <div class="modal-header" style="padding:100px 30px;">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

           <div class="modal-body" style="padding:40px 50px;">

             <form role="form" method="POST" action="{{$update}}" enctype="multipart/form-data">
               {{csrf_field()}}
               <input type="hidden" name="id" value="{{$dt->id}}">
               <div class="form-group">
                 <label for="usrname"><span class="fa fa-user"></span> &nbsp;Titre</label>
                 <input type="text" class="form-control" id="usrname" name="titre" value="{{(!empty($dt->titre)? $dt->titre : null)}}" autocomplete="off" required>
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
                 <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Options</label>
                 <div class="checkbox">
                    <label class="form-checkbox form-icon active">
                      <input type="checkbox" name="options" {{ ($dt->options == 0)? "checked='checked'" : null }}> Afficher directement dans le Front-office
                      </label>
                    </div>
               </div>

               <div class="form-group">
                  <label class="control-label"><span class="fa fa-tags"></span>&nbsp;Tags :</label>
                      <input id="jquery-tagIt-white" class="inverse" name="tags" value="{{ (!empty($dt->tags)? $dt->tags : 'organigramme') }}">
              </div>

               <div class="form-group">
                 <label for="psw"><span class="fa fa-image"></span> &nbsp;Uploader l'organigramme</label>
                 <input type="file" class="form-control" id="psw" name="file">
               </div>

               <div class="form-group">
                 <label for="psw"><span class="fa fa-briefcase"></span> &nbsp;Dans quel page l'afficher ? </label>
                 <select class="form-control" name="page">
                   <option value="{{route('front.comite.executif')}}">Comité Executif</option>
                   <option value="{{route('front.membre.index')}}">Les Membres de la FMBB</option>
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
