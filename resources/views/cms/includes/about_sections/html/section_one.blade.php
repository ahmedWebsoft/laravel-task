<div class="portlet">
  <div class="portlet-heading bg-dark-theme">
    <a class="link_b toggle" data-toggle="collapse" data-parent="#accordion1" href="#HomeMainTitle1"></a>
    <h3 class="portlet-title">Section One</h3>
    <div class="portlet-widgets">
      <button type="submit" id="save" class="btn btn-white waves-effect btn-rounded">
        <span class="btn-label">
          <i class="fa fa-save"></i>
        </span> Save
      </button>
      <span class="divider"></span>
      <span class="text-white">
        <i class="ion-minus-round"></i>
      </span>
    </div>
    <div class="clearfix"></div>
  </div>
  <div id="HomeMainTitle1" class="panel-collapse collapse">
    <div class="portlet-body">
      @foreach($languages->where('default',1) as $default_language)
      <div class="col-sm-12">
        <div class="form-group">
        <label for="field-1" class="heading control-label">Heading</label>
        <input type="text" name="heading[]" class="sectionOneTitle form-control" required
          value="{{$about->where('language_id',$default_language->id)->where('type', 7)->first()->heading}}" />
        </div>
      </div>

      <div class="col-sm-12">
        <label for="field-1" class="control-label">Description</label>
        <div class="custom-summernote">
          <textarea name="text[]" id="text" class="sectionOneDescription summernote" required>
                    {{$about->where('language_id',$default_language->id)->where('type', 7)->first()->text}}
                  </textarea>
        </div>
      </div>
      <br>
      <input type="hidden" name="language_id[]" value="{{$default_language->id}}"
        class="sectionOneLanguage_id">
      @endforeach
      <br>
      <!-- portlet -->
      <div class="portlet m-b-0" class="panel-collapse collapse">
        <div class="portlet-heading bg-light-theme">
          <a class="link_b toggle" data-toggle="collapse" data-parent="#accordion1" href="#highlight1"></a>
          <h3 class="portlet-title">Multi-Languages</h3>
          <div class="portlet-widgets">
            <span class="divider"></span>
            <span class="text-white">
              <i class="ion-minus-round"></i>
            </span>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="portlet-body">
          @foreach($languages->where('default',0) as $language)
          <br>
          <div class="card">
            <div class="card-header">
              {{$language->name}}
            </div>

            <div class="col-sm-12">
              <label for="field-1" class="control-label">Heading</label>
              <div class="form-group">
                <input type="text" name="heading[]" class="sectionOneTitle form-control" required
                  value="{{$about->where('language_id',$language->id)->where('type', 7)->first()->heading}}" />
              </div>
            </div>

            <div class="col-md-12">
              <label for="">Description</label>
              <div class="custom-summernote">
                <textarea name="text[]" id="text" class="sectionOneDescription summernote" required>
                            {{$about->where('language_id',$language->id)->where('type', 7)->first()->text}}
                          </textarea>
                <input type="hidden" name="language_id[]" value="{{$language->id}}"
                  class="sectionOneLanguage_id">
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- portlet -->
    </div>

  </div>
</div>