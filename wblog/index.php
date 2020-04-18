<?php
$_ = [2=>'страница 2',3=>'страница 3'];
echo 'Страница wblog!';
echo '<br /><br />';
echo "<a href='page2.php?page=2'>Страница 2</a><br />";
echo "<a href='page3.php?page=3'>Страница 3</a><br />";
if(isset($_GET['page'])){
echo "<br />".$_[$_GET['page']]."<br />";
}
?>
<input type="button" value="<?php echo "Самая главная кнопка"; ?>"
name="button1"/>
