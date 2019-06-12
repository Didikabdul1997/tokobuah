<!DOCTYPE html>
<html>

<head>
    <script src='<?php echo base_url(); ?>assets/tinymce/js/tinymce/tinymce.min.js' referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</head>

<body>
    <h1>TinyMCE Quick Start Guide</h1>
    <form method="post">
        <textarea id="mytextarea">Hello, World!</textarea>
    </form>
</body>

</html>