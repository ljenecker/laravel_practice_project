<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>Create a new project</h1>

  <form method='POST' action='/projects'>

    {{ csrf_field() }}
    <div>
      <input type='text' name='title' placeholder='Project title'>
    </div>

    <div>
       <textarea name='description' placeholder='Project Description'></textarea>
    </div>

    <div>
        <button type='submit'>Create Project</button>
     </div>
  </form>

  <script src="js/scripts.js"></script>
</body>
</html>