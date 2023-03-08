<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission</title>
</head>
<body>
    <form action="/submission" method="POST">
        @csrf
        <select name="category" id="category">
            <option selected disabled>Choose a category</option>
            <option value="Sport">Sport</option>
            <option value="Finance">Finance</option>
            <option value="Movies">Movies</option>
        </select>
        <textarea name="content" id="content" cols="30" rows="10" placeholder="Content"></textarea>
        <button>Enviar</button>
    </form>
</body>
</html>