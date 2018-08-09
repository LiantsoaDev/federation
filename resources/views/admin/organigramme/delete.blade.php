<!-- Modal -->
       <div class="modal fade" id="delete{{$dt->id}}" role="dialog">
       <div class="modal-dialog">

         <!-- Modal content-->
         <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Suppression - Organigramme</h4>
            </div>

          <div class="modal-body">
            <p>Voulez-vous supprimer définitivement l'<code>{{ucfirst($dt->titre)}}</code> ? </p>
          </div>

          <div class="modal-footer">
            <a href="{{route('admin.orga.delete',$dt->id)}}" type="button" class="btn btn-danger pull-left" >Supprimer</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
          </div>
        </div>
      

       </div>
     </div>
   <!-- end modal -->
