<html>

<head>
	<title>list</title>

</head>

<body>
	<h1>My List of Tasks</h1>

	<ul>

         @foreach($tasks as $task)
        <li><a href="/task/{!! $task->id !!}">{{$task->title}}</a></li>
         @endforeach
   
    </ul>

</body>
</html>
