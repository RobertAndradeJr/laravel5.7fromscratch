<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Create a New project</h1>

        <form method="POST" action="/projects">

            {{ csrf_field() }}

            <div>

                <input type="text" name="title" placeholder="Project title">

            </div>

            <div>

                <textarea name="description" placeholder="Project Description..." id="" cols="30" rows="10"></textarea>

            </div>

            <div>

                <button type="submit">Create Project</button>

            </div>
        </form>
</body>

</html>
