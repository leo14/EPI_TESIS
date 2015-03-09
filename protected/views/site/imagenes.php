
<?php 

widget('ext.coco.CocoWidget'
        ,array(
            'id'=>'cocowidget1',
            'onCompleted'=>'function(id,filename,jsoninfo){  }',
            'onCancelled'=>'function(id,filename){ alert("cancelled"); }',
            'onMessage'=>'function(m){ alert(m); }',
            'allowedExtensions'=>array('jpeg','jpg','gif','png'),
            'sizeLimit'=>2000000,
            'uploadDir' => 'assets/',
            // para recibir el archivo subido:
            'receptorClassName'=>'application.models.MyModel',
            'methodName'=>'onFileUploaded',
            'userdata'=>$model->primaryKey,
        ));
 ?>