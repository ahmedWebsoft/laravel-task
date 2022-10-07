<script type="text/javascript">
  $(document).ready(function () {

   //Update Description--------------
   $('#save4').click(function() {
            
            let formData = new FormData();
            $(".sectionFourDescription").each(function(i, value) {
              
              formData.append("text[]", $(this).val());
            });

            $(".sectionFourTitle").each(function(i, value) {
              formData.append("heading[]", $(this).val());
            });

           
            $(".sectionFourLanguage_id").each(function(i, value) {
              formData.append("language_id[]", $(this).val());
            });

            axios.
            post('{{route("content.home.sectionFour.update")}}', formData, {
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