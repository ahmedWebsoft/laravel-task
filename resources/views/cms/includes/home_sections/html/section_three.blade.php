  
                        <div class="portlet">
                          <div class="portlet-heading bg-dark-theme">
                            <a class="link_b toggle" data-toggle="collapse" data-parent="#accordion3" href="#HomeMainTitle3"></a>
                            <h3 class="portlet-title">Section Three</h3>
                            <div class="portlet-widgets">
                              <button type="submit" id="save3" class="btn btn-white waves-effect btn-rounded">
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
                          <div id="HomeMainTitle3" class="panel-collapse collapse">
                            <div class="portlet-body">
                              @foreach($languages->where('default',1) as $default_language)
                                <div class="col-sm-12">
                                  <label for="field-1" class="control-label">Heading</label>
                                  <div class="form-group">
                                    <input type="text" name="heading[]" class="sectionThreeTitle form-control" required
                                      value= "{{$home->where('language_id',$default_language->id)->where('type',3)->first()->heading}}" />                        
                                  </div>
                                </div> 
                                
                                <div class="col-sm-12">
                                  <label for="field-1" class="control-label">Description</label>
                                  <div class="custom-summernote">
                                    <textarea name="text[]" class="sectionThreeDescription summernote" required>
                                      {{$home->where('language_id',$default_language->id)->where('type',3)->first()->text}}
                                    </textarea>                        
                                  </div>
                                </div>   
                                
                              <br>
                              
                              <input type="hidden" name="language_id[]" value="{{$default_language->id}}" class="sectionThreeLanguage_id">
                              @endforeach
                              <br>
                                <!-- portlet -->
                                  <div class="portlet m-b-0" class="panel-collapse collapse">
                                    <div class="portlet-heading bg-light-theme">
                                      <a class="link_b toggle" data-toggle="collapse6" data-parent="#accordion3" href="#highlight3"></a>
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
                                              <input type="text" name="heading[]" class="sectionThreeTitle form-control" required
                                                value= "{{$home->where('language_id',$language->id)->where('type',3)->first()->heading}}" />                        
                                          </div> 
                                          
                                          <div class="col-md-12">
                                            <label for="">Description</label>
                                          <div class="custom-summernote">
                                            <textarea name="text[]" class="sectionThreeDescription summernote" required>
                                              {{$home->where('language_id',$language->id)->where('type',3)->first()->text}}
                                            </textarea>
                                          <input type="hidden" name="language_id[]" value="{{$language->id}}" class="sectionThreeLanguage_id">
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