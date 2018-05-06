<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator - dairymgt.info</title>

    <!-- Stylesheets -->
    [[ HTML::style('stylesheets/bootstrap.min.css') ]]
    [[ HTML::style('stylesheets/main.css') ]]

    <!-- Javascript -->
    [[ HTML::script('javascripts/angular.min.js') ]]

    <script type="text/javascript">
    </script>
</head>
<body>

<div class="container">
    <div class="page-header text-center">
        <h1>Dairymgt.info Administrator</h1>
    </div>
    @yield('content')
</div>
</body>
</html>