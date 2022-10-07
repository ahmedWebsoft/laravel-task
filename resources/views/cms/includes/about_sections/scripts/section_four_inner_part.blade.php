<script type = "text/javascript" >

    $(document).ready(function($) {

        var table = $('#datatable2').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('aboutSectionFourInner.data')}}",
                columns: [
                    {data: 'id'},
                    {data: 'icon'},
                    {data: 'id'},
                ],

                "columnDefs": [{
                        "targets": 'no-sort',
                        "orderable": false,
                    },
                    {
                        "targets": 0,
                        "render": function(data, type, row, meta) {
                            return meta.row + 1;
                        },
                    },

                    {
                        "targets": 1,
                        "render": function(data, type, row, meta) {
                            return '<img src="{{App\Configuration::where('key','files_link')->first()->value}}'+data+'" style="height:100px;width:100px;"/>';
                        },
                    },

                    {
                        "targets": -1,
                        "render": function(data, type, row, meta) {
                            var edit = '{{route("content.about.sectionFourInner.edit",[":id"])}}';
                            edit = edit.replace(':id', data);
                            var checked = row.status == 1 ? 'checked' : null;

                            return `
                <div class="text-center">
                    <a href = "` + edit + `" class="text-info p-1"><i class="fas fa-edit"></i>
                      </a>
                     &nbsp;

                    <a href = "javascript:;" class="delete text-danger p-2 btn-delete" data-id=` + data + `><i class="fas fa-trash-alt"></i>
                      </a>
                     &nbsp;

                      <input class="status2" name="status" type="checkbox" data-plugin="switchery"
                      data-color="#005CA3" data-size="small" ` + checked + ` value= ` + row.id + `/>
                </div>
                `;
                        },
                    },

                ],

                "drawCallback": function(settings) {
                    let elems = Array.prototype.slice.call(document.querySelectorAll('.status2'));
                    if (elems) {
                        elems.forEach(function(html) {
                            var switchery = new Switchery(html, {
                                color: '#005CA3',
                                className: 'switchery',
                                disabled: false,
                                size: 'small',
                                speed: '0.1s'
                            });
                        });
                    }

                    ////----- DELETE
                    $('.btn-delete').click(function(e) {
                        var delete_id = $(this).data("id");
                        var $this = $(this);
                        console.log(delete_id);
                        swal({
                                title: "Are you sure?",
                                text: "Once deleted, you will not be able to recover Content!",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    axios
                                        .post('{{route("content.about.sectionFourInner.destroy")}}', {
                                            _method: 'DELETE',
                                            _token: '{{csrf_token()}}',
                                            id: delete_id
                                        })
                                    swal("Content has been deleted!", {
                                        icon: "success",
                                    })

                                    table
                                        .row($this.parents('tr'))
                                        .remove()
                                        .draw();
                                }
                            });
                    });
                   
                      $('.status2').change(function () {
                        var $this = $(this);
                        var id = $this.val();
                        var status = this.checked;

                        if (status) {
                          status = 1;
                        } else {
                          status = 0;
                        }
                        
                        axios
                          .post('{{route("content.about.sectionFourInner.status")}}', {
                            _token: '{{csrf_token()}}',
                            _method: 'patch',
                            id: id,
                            status: status,
                          })
                          .then(function (responsive) {
                            console.log(responsive);
                          })
                          .catch(function (error) {
                            console.log(error);
                          });
                      });

                }

            },

        );
    });

</script>
