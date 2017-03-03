
<?php
	$css_path = get_template_directory_uri(); 
?>

<!-- jQuery -->
<script src="<?php echo $css_path."/"?>js/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="<?php echo $css_path."/"?>js/bootstrap.min.js"></script>
<script src="<?php echo $css_path."/"?>js/parsley.min.js"></script>

<script type="text/javascript">

    $('#application-form').parsley();

    window.ParsleyValidator
        .addValidator('fileextension', function (value, requirement) {
            // the value contains the file path, so we can pop the extension
            var fileExtension = value.split('.').pop();

            return fileExtension === requirement;
        }, 32)
        .addMessage('en', 'fileextension', 'We only accept PDF format.');


    $("#how_you_know4").change(function () {
        //check if its checked. If checked move inside and check for others value
        if (this.checked) {
            //add a text box next to it
            $("#how_you_know_other").show();
        } 
        else if (!this.checked) {
            //remove if unchecked
            $("#how_you_know_other").hide();
        }
    });
</script>
<?php wp_footer(); ?>
</body>

</html>