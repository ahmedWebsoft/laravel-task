
          <div class="portlet">
            <div class="portlet-heading bg-dark-theme">
              <a class="link_b toggle" data-toggle="collapse" data-parent="#accordion4" href="#HomeMainTitle4"></a>
              <h3 class="portlet-title">Section Four</h3>
              <div class="portlet-widgets">
                <button type="submit" id="save4" class="btn btn-white waves-effect btn-rounded">
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
            <div id="HomeMainTitle4" class="panel-collapse collapse">
              <div class="portlet-body">
                @foreach($languages->where('default',1) as $default_language)


                <div class="col-sm-12">
                  <label for="field-1" class="control-label">Heading</label>
                  <div class="form-group">
                  <input type="text" name="heading[]" class="sectionFourTitle form-control" required
                    value="{{$about->where('language_id',$default_language->id)->where('type', 10)->first()->heading}}" />
                  </div>
                </div>

                <div class="col-sm-12">
                  <label class="control-label">Section Image</label>
                  <media-gallery-handeler class="sectionFourImage" 
                  name="icon" :file-size="2000"
                  :supported-formats="['image']"
                  preload="{{$about->where('language_id',$default_language->id)->where('type', 10)->first()->icon ?? null}}"
                  width="200" 
                  height="150" />
                </div>

                <br>
                <input type="hidden" name="language_id[]" value="{{$default_language->id}}"
                  class="sectionFourLanguage_id">
                @endforeach
                <br>
                <!-- portlet -->
                <div class="portlet m-b-0" class="panel-collapse collapse">
                  <div class="portlet-heading bg-light-theme">
                    <a class="link_b toggle" data-toggle="collapse" data-parent="#accordion4" href="#highlight4"></a>
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
                        <input type="text" name="heading[]" class="sectionFourTitle form-control" required
                          value="{{$about->where('language_id',$language->id)->where('type', 10)->first()->heading}}" />
                        </div>
                      </div>

                      <input type="hidden" name="language_id[]" value="{{$language->id}}"
                        class="sectionFourLanguage_id">
                    </div>
                    @endforeach
                  </div>
                </div>

                <!-- portlet -->
                <div class="portlet m-b-0">
                  <div class="portlet-heading bg-dark-theme">
                    <a class="link_b toggle" data-toggle="collapse" data-parent="#accordion2" href="#highlight2"></a>
                    <h3 class="portlet-title">Section Four inner Part</h3>
                    <div class="portlet-widgets">
                      <a href="{{route('content.about.sectionFourInner.create')}}"
                        class="btn btn-white waves-effect btn-rounded">
                        <span class="btn-label">
                          <i class="fa fa-plus"></i>
                        </span> Add
                      </a>
                      <span class="divider"></span>
                      <span class="text-white">
                        <i class="ion-minus-round"></i>
                      </span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div id="highlight2" class="panel-collapse collapse">
                    <div class="portlet-body">
                      <div class="custom_datatable">
                        <table id="datatable2" class="table table-bordered table-striped" width="100%" cellspacing="0"
                          cellpadding="0">
                          <thead>
                            <tr>
                              <th width="5%">Sr.</th>
                              <th width="30%">Icon</th>
                              <th class="no-sort text-center" width="20%">Actions</th>
                            </tr>
                          </thead>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>