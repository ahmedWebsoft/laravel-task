<script type="text/javascript">
  $(document).ready(function () {

      
         //Update Description--------------
         $('#save6').click(function() {
            
            let formData = new FormData();
            $(".sectionSixTitle").each(function(i, value) {
              formData.append("heading[]", $(this).val());
            });

   
            $(".sectionSixLanguage_id").each(function(i, value) {
              formData.append("language_id[]", $(this).val());
            });

            axios.
            post('{{route("content.home.sectionSix.update")}}', formData, {
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