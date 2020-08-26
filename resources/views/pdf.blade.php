<html>
    <head>
        <meta charset="utf-8">
        <title>{{$topic->title}}</title>
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
        @php
            $content = html_entity_decode($topic->getContent->body);
            $content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);
            $content = str_replace('src="/uploads/', 'src="https://svc.esis.edu.mn/uploads/', $content);
        @endphp
        <h1>{{$topic->title}}</h1>
        {!! $content  !!}
    </body>
</html>