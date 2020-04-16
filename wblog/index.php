<?php
echo 'Это страница wblog';
$_ = [1=>'Страница 1',2=>'Страница 2'];
echo print_r ($_GET).'<br /><br />';
echo "<a href='wblog.ru/index?page=1'>Ссылка 1</a>";
echo "<a href='wforum.ru/index?page=2'>Cсылка 2</a>";
if(isset($_GET['page'])){
echo $_[$_GET['page']];
}
?>

?>
