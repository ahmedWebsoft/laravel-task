<script type="text/javascript">
  $(document).ready(function () {

         //Update Description--------------
          $('#save5').click(function() {
            
            let formData = new FormData();
            $(".sectionFiveDescription").each(function(i, value) {
              
              formData.append("text[]", $(this).val());
            });

            $(".sectionFiveTitle").each(function(i, value) {
              formData.append("heading[]", $(this).val());
            });

            $(".sectionFiveImages").each(function(i, value) {
              formData.append("icon[]", $('input[name="icon[]"]').val());
            });
           
            $(".sectionFiveLanguage_id").each(function(i, value) {
              formData.append("language_id[]", $(this).val());
            });

            axios.
            post('{{route("content.home.sectionFive.update")}}', formData, {
                _token: '{{csrf_token()}}',
            }).then(function(res) {
                swal(
                    'Updated!',
                    'Section have been updated.',
                    'success'
                )
                console.log(res);
            }).catch(function(err) {
                swal(
                    'Failed',
                    err.message,
                    'error'
                )
                console.log(err);
            });
        }); 


  });
</script>