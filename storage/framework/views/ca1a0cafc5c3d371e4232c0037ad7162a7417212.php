<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo e($topic->title); ?></title>
        <style type="text/css">
            table {
                width: 100%;
                border: 1px solid #CCC;
                border-left: none;
            }
            table tr td {
                padding: 5px;
                border-bottom: 1px solid #CCC;
                border-left: 1px solid #CCC;
            }
        </style>
    </head>
    <body>
        <?php
            $content = html_entity_decode($topic->getContent->body);
            $content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);
            $content = str_replace('src="/uploads/', 'src="https://svc.esis.edu.mn/uploads/', $content);
        ?>
        <h1><?php echo e($topic->title); ?></h1>
        <?php echo $content; ?>

    </body>
</html><?php /**PATH /home/admin/web/help.esis.edu.mn/public_html/resources/views/pdf.blade.php ENDPATH**/ ?>