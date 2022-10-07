<div class="portlet m-b-0">
  <div class="portlet-heading bg-dark-theme">
    <a class="link_b toggle" data-toggle="collapse" data-parent="#accordion1" href="#highlight"></a>
    <h3 class="portlet-title">Section Two</h3>
    <div class="portlet-widgets">
      <a href="{{route('content.about.sectionTwo.create')}}" class="btn btn-white waves-effect btn-rounded">
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

  <div id="highlight" class="panel-collapse collapse">
    <div class="portlet-body">
      <div class="custom_datatable">
        <table id="datatable" class="table table-bordered table-striped" width="100%" cellspacing="0"
          cellpadding="0">
          <thead>
            <tr>
              <th width="5%">Sr.</th>
              <th>Icon</th>
              <th>Heading</th>
              <th class="no-sort text-center" width="15%">Actions</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>