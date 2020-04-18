<head>
    <title>Untitled Page</title>
</head>
<body>
    <div id="header"
        style="height: 102px; width: 800px; background-color: #0000FF;">
    </div>
    <div id="content"
style="height: 340px; width: 800px; background-color: #00FFFF; font-size: large; font-weight: 100;">
</br>
        <p>
        <?php
$new = 'hello11111';
        echo "Здорова,земляне!";
        $new = $_GET['new'];

        if($new=='1'){
        echo '1';
        }
        if($new=='2'){
        echo '2';
        }
        ?>
</p>
</br>
        <input type="button" value="<?php  echo "Самая главная кнопка"; ?>"
        name="button1"/>
    </div>
    <div id="footer"
        style="height: 141px; width: 800px; background-color: #008000;">
    </div>
</body>
</html>
