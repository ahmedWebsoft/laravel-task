<script type="text/javascript">
  $(document).ready(function () {

    $('#save').parsley();

    $('.summernote').summernote({
      height: 150,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: false                 // set focus to editable area after initializing summernote
    });

 //Update Description--------------
 $('#save').click(function() {
            
            let formData = new FormData();
            $(".sectionOneDescription").each(function(i, value) {
              
              formData.append("text[]", $(this).val());
            });

            $(".sectionOneTitle").each(function(i, value) {
              formData.append("heading[]", $(this).val());
            });

           
            $(".sectionOneLanguage_id").each(function(i, value) {
              formData.append("language_id[]", $(this).val());
            });

            axios.
            post('{{route("content.home.sectionOne.update")}}', formData, {
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