@include('admin.header-match')

<section id="page-content">
  	<div class="row">
        <div class="col-lg-6">

          <!-- Message de notification -->
          @include('admin.notification')
          <!-- End Notification -->

          <div class="panel">
                                  <div class="panel-heading">
                                      <div class="panel-control">
                                          <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                                          <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                                          <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                                          <button class="btn btn-default" data-dismiss="panel"><i class="fa fa-times"></i></button>
                                      </div>
                                      <h3 class="panel-title">Ajouter une nouvelle video</h3>
                                  </div>
                                  <!-- BASIC FORM ELEMENTS -->
                                  <!--===================================================-->
                                  <form class="panel-body form-horizontal" method="post" action="{{$action}}">
                                      <!--Static-->
                                      {{csrf_field()}}
                                      <!--Textarea-->
                                      <div class="form-group">
                                          <label class="col-md-3 control-label" for="demo-textarea-input">Url de la video</label>
                                          <div class="col-md-9">
                                              <textarea id="demo-textarea-input" rows="5" class="form-control" name="iframe" placeholder="Insérer l'Url de la video..." required></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label class="col-md-3 control-label">Le plateforme de la video</label>
                                          <div class="col-md-9">
                                                <div class="radio">
                                                    <!-- Inline Icon Radios Buttons -->
                                                    <!--===================================================-->
                                                    <label class="form-radio form-icon btn btn-primary btn-labeled form-text active">
                                                    <input type="radio" name="type" value="facebook" checked> facebook
                                                    </label>
                                                    <label class="form-radio form-icon btn btn-danger btn-labeled form-text">
                                                    <input type="radio" name="type" value="youtube"> Youtube
                                                    </label>
                                                    <label class="form-radio form-icon btn btn-info btn-labeled form-text">
                                                    <input type="radio" name="type" value="dailymotion"> Dailymotion
                                                    </label>
                                                    <!--===================================================-->
                                                </div>
                                            </div>
                                      </div>
                                      <div class="form-group">
                                            <label class="col-md-3 control-label">Cette video est en <span class="label label-pink">Live</span></label>
                                            <div class="col-md-9">
                                                <div class="checkbox">
                                                    <!-- Inline Icon Checkboxes -->
                                                    <label class="form-checkbox form-icon active">
                                                    <input type="checkbox" name="live" value="on"> Live</label>
                                                </div>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn-success btn-labeled fa fa-save pull-right">Sauvegarder</button>
                                  </form>
                                  <!--===================================================-->
                              </div>
        </div>

      	<div class="col-lg-12">
          	<div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Listes des Videos </h3>
                            </div>
                            <div class="panel-body">
                                      <div class="row">
                                        @foreach($getlistes as $listes)
                                        <div class="col-md-4">
                                          <div class="thumbnail">
                                              {!! $listes->lienvideo !!}
                                              <div class="caption">
                                                <p>Statut de la video : {!! $listes->live !!} </p>
                                                <div class="checkbox">
                                                        <label class="form-checkbox form-icon active">
                                                        @if($listes->post == false )
                                                        <input type="checkbox" {{$listes->post}} value="{{ $listes->id }}" onclick="go(this.value)"> Publiée dans le front</label>
                                                        @else
                                                        <input type="checkbox" {{$listes->post}} value="{{ $listes->id }}" onclick="cancel(this.value)"> Publiée dans le front</label>
                                                        @endif
                                                        <a href="{{route('admin.video.delete',$listes->id)}}" class="btn btn-danger btn-icon icon-lg fa fa-times"></a>
                                                </div>
                                              </div>
                                          </div>
                                        </div>
                                        @endforeach
                                      </div>
                                <!--===================================================-->
                                <!-- End Foo Table - Filtering -->
                            </div>
                        </div>
		</div>
	</div>
</section>
<script src="{{asset('assets/js/checkbox.js')}}"></script>
@include('admin.footer-match')
