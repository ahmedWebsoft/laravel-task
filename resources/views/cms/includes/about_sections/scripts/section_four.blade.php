<script type="text/javascript">
  $(document).ready(function () {

    $('#save').parsley();

 //Update Description--------------
 $('#save4').click(function() {
            
            let formData = new FormData();

            $(".sectionFourTitle").each(function(i, value) {
              formData.append("heading[]", $(this).val());
            });


            $(".sectionFourImage").each(function(i, value) {
              formData.append("icon", $('input[name="icon"]').val());
            });

           
            $(".sectionFourLanguage_id").each(function(i, value) {
              formData.append("language_id[]", $(this).val());
            });

            axios.
            post('{{route("content.about.sectionFour.update")}}', formData, {
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
