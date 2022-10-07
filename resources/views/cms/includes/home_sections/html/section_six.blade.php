         
                            <div class="portlet">
                              <div class="portlet-heading bg-dark-theme">
                                <a class="link_b toggle" data-toggle="collapse" data-parent="#accordion4" href="#HomeMainTitle6"></a>
                                <h3 class="portlet-title">Youtube Link</h3>
                                <div class="portlet-widgets">
                                  <button type="submit" id="save6" class="btn btn-white waves-effect btn-rounded">
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
                              <div id="HomeMainTitle6" class="panel-collapse collapse">
                                <div class="portlet-body">
                                  @foreach($languages->where('default',1) as $default_language)
                                    <div class="col-sm-12">
                                      <label for="field-12" class="control-label">Link URL</label>
                                      <div class="form-group">
                                        <input type="url" name="heading[]" class="sectionSixTitle form-control" required id="link1" 
                                          value= "{{$home->where('language_id',$default_language->id)->where('type', 6)->first()->heading}}" />                        
                                      </div>
                                    </div> 
                                          
                                  <br>
                                  
                                  <input type="hidden" name="language_id[]" value="{{$default_language->id}}" class="sectionSixLanguage_id">
                                  @endforeach
                                  <br>
                                    <!-- portlet -->
                                      <div class="portlet m-b-0" class="panel-collapse collapse">
                                        <div class="portlet-heading bg-light-theme">
                                          <a class="link_b toggle" data-toggle="collapse" data-parent="#accordion6" href="#highlight6"></a>
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
                                                <label for="field-13" class="control-label">Link URL</label>
                                                <div class="form-group">
                                                  <input type="url" name="heading[]" class="sectionSixTitle form-control" required id="link2" disabled="disabled"
                                                    value= "{{$home->where('language_id',$language->id)->where('type', 6)->first()->heading}}"  />                        
                                                </div>
                                              </div> 
                                              
                                              <input type="hidden" name="language_id[]" value="{{$language->id}}" class="sectionSixLanguage_id">
                                              </div>
                                            </div>
                                          </div>
                                            @endforeach
                                        </div>
                                      </div>
                                      <!-- portlet -->
                                    </div> 