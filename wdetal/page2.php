<?php
  require_once "global.php";

  open_page("Заголовок", "Описание", "Ключевые слова");

  include "header.php";
  include "left.php";
  include "right.php";

  get_page()->begin_center();

  echo "<div class='data'>Блок информации в основной части 1</div>";
  echo "<div class='data'>Блок информации в основной части 2</div>";
  echo "<div class='data'>Блок информации в основной части 3</div>";
  echo "<div class='data'>Блок информации в основной части 4</div>";
  echo "<div class='data'>Блок информации в основной части 5</div>";
  echo "<div class='data'>Блок информации в основной части 6</div>";
  echo "<div class='data'>Блок информации в основной части 7</div>";

  get_page()->end_center();

  include "footer.php";

  close_page();
?>
