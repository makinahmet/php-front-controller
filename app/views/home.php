<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="public/assets/style.css">
</head>
<body>
    <div class="row">
        This bold marked text "<b><?php echo $databaseInfo; ?></b>" is from model of this page. <br />
        This underlined text "<u><?php echo $title; ?></u>" is title and from controller of this page. <br />
        This page itself is view page and display datas from its model and controllers.
    </div>
    <script src="public/assets/site.js"></script>
</body>
</html>