<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>Projects</h1>

  <ul>

  @foreach($projects as $project)
    <li>{{$project->title}} -> {{$project->description}}</li>
  @endforeach

  </ul>
  <script src="js/scripts.js"></script>
</body>
</html>