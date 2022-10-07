<script type="text/javascript">
  $(document).ready(function () {

    $('#save').parsley();

    $('.summernote2').summernote({
      height: 150,                 // set editor height
      minHeight: null,             // set minimum height of editor
      maxHeight: null,             // set maximum height of editor
      focus: false                 // set focus to editable area after initializing summernote
    });

 //Update Description--------------
 $('#save3').click(function() {
            
            let formData = new FormData();
            $(".sectionThreeDescription").each(function(i, value) {
              
              formData.append("text[]", $(this).val());
            });

            $(".sectionThreeTitle").each(function(i, value) {
              formData.append("heading[]", $(this).val());
            });

           
            $(".sectionThreeLanguage_id").each(function(i, value) {
              formData.append("language_id[]", $(this).val());
            });

            axios.
            post('{{route("content.about.sectionThree.update")}}', formData, {
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