<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css'); ?>">
    <script src="https://unpkg.com/feather-icons"></script>
</head>


<body>
    <?= $this->include('template/navbar') ;?>
    <?= $this->renderSection('content') ;?>


    <script>
    feather.replace();
    </script>
    <script src="<?php echo base_url('script.js')?>">

    </script>
</body>

</html>