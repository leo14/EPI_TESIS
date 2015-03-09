<?php
/* @var $this ActividadesController */
/* @var $dataProvider CActiveDataProvider */
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="uploadify/jquery.uploadify.min.js?ver=<?php echo rand(0,9999);?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="uploadify/uploadify.css">
<style type="text/css">
body {
    font: 13px Arial, Helvetica, Sans-serif;
}
</style>
</head>

<body>
    <h1>Subir Archivo</h1>
    <div style="margin-left: 36%;margin-top: 12%;">
        
    <form>
        <div id="queue"></div>
        <input id="file_upload" name="file_upload" type="file" multiple="true">
    </form>
    </div>

    <script type="text/javascript">
        <?php $timestamp = time();?>
        $(function() {
            $('#file_upload').uploadify({
                'formData'     : {
                    'timestamp' : '<?php echo $timestamp;?>',
                    'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
                },
                'swf'      : 'uploadify/uploadify.swf',
                'uploader' : 'uploadify/uploadify.php',
                'buttonText'   : 'Subir imagen',
                'width'        : 100,
            });
        });
    </script>
</body>
</html>