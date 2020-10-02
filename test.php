<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   


        <style>
            textarea {
                background-color:#FAFAFA;
                border:#EFEFEF solid 1px;
                color:#333;
            }
        </style>

</head>
<body>
          
<div >
                        <textarea class="content" name="contenu"></textarea>
                    </div>
                    <script>
        $(document).ready(function() {
            $('.content').richText();
        });
        </script>
</body>
</html>