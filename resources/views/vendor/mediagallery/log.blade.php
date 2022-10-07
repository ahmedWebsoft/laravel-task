@extends('cms.layouts.masterpage')

@section('title', 'Users logins')

@section('top-styles')

<!-- DataTables -->
<link href="{{url('')}}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{url('')}}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<link href="{{url('')}}/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
@endsection

@section('header')
  @parent
@endsection

@section('leftsidebar')
  @parent
@endsection

@section('content')
<!-- Start content -->
<div class="content">
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
      <div class="col-sm-12">
        <!-- <h4 class="page-title">Portlets</h4> -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">
              <i class="ti-home"></i>
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Logs</a>
          </li>
          <li class="breadcrumb-item active">Media Logs</li>
        </ol>
      </div>
    </div>

    <div class="portlet">
      <div class="portlet-heading bg-light-theme">
        <h3 class="portlet-title">
          <i class="fas fa-photo-video mr-2"></i> Media Logs</h3>
        <div class="portlet-widgets">

        </div>
        <div class="clearfix"></div>
      </div>
      <div id="bg-primary1" class="panel-collapse collapse show">
        <div class="portlet-body">
          <div class="bg-black-transparent3 m-b-15">
            <div class="row">
              <div class="col-10 mx-auto m-t-15">
                <div class="row">
                  <div class="col-md-12 pull-right text-center">
                    <div class="form-group">
                      <div>
                        <div class="input-group theme-input-group select-max-h-200">
                        </div>
                        <!-- input-group -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-9 pull-right text-center">
                    <div class="form-group">
                      <div>
                        <div class="input-group theme-input-group select-max-h-200">
                          <div class="input-group-prepend">
                            <span id="basic-addon1" class="input-group-text">Date</span>
                          </div>
                          <input required type="text" class="form-control" name="date" placeholder="yyyy-mm-dd" id="date" autocomplete="off">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="md md-event-note"></i>
                            </span>
                          </div>
                        </div>
                        <!-- input-group -->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <div>
                        <button class="btn btn-light-theme btn-block waves-effect waves-light" type="submit" id="search">
                          <i class="fa fa-search pr-1"></i> Search</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="custom_datatable">
            <table id="datatable" class="table table-bordered table-striped" width="100%" cellspacing="0" cellpadding="0">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Actions</th>
                  <th>Files or Folders</th>
                  <th>User Name</th>
                  <th>Datetime</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- container -->
</div>
<!-- content -->
@endsection

@section('rightsidebar')
  @parent
@endsection

@section('bottom-mid-scripts')
<script src="{{url('')}}/plugins/moment/moment.js"></script>

<!-- Required datatable js -->
<script src="{{url('')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('')}}/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="{{url('')}}/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="{{url('')}}/plugins/datatables/buttons.bootstrap4.min.js"></script>
<!-- Responsive examples -->
<script src="{{url('')}}/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="{{url('')}}/plugins/datatables/responsive.bootstrap4.min.js"></script>

<script src="{{url('')}}/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
@endsection

@section('bottom-bot-scripts')
<script type="text/javascript">
    $(document).ready(function() {
        //$('#datatable').DataTable();

    var table = $('#datatable').DataTable({
			data: [],
			"columns": [
        {"data":"id"},
				{"data": "action", "defaultContent": ""},
				{"data": "file_name", "defaultContent": ""},
				{"data": "user_name", "defaultContent": ""},
				{"data": "created_at", "defaultContent": ""},

			],
      "columnDefs": [ {
        "targets": 0,
        "render": function (data, type, row, meta) {
          return meta.row + 1;
        },
      },
      {
      "targets": -1,
        "render": function (data, type, row, meta) {
          return  new Date(data).toLocaleString();
        },
      }

      ],
		});

		$('#date').daterangepicker({
        startDate: '2000-01-01',
        endDate: moment(),
        minDate: '2000-01-01',
        maxDate: '2100-12-01',
        dateLimit: false,
        showDropdowns: true,
        showWeekNumbers: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        drops: 'down',
        buttonClasses: ['btn', 'btn-sm'],
        applyClass: 'btn-default',
        cancelClass: 'btn-white',
        separator: ' to ',
        locale: {
            format: 'YYYY-MM-DD',
            applyLabel: 'Submit',
            cancelLabel: 'Cancel',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    }, function (start, end, label) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    });

	$('#search').click(function(){
		var date = $('#date').val();
      axios
      .post("{{route('media-log.data')}}",{
	    	date : date.split(' - '),
        _token: "{{csrf_token()}}",
      })
      .then(function(response){
        table.clear().draw();
        table.rows.add(response.data).draw();

        //Custombox.close();
      })
      .catch(function(error){
        console.log(error);
      });
    });

    $('#search').click();
    });

</script>
@endsection
