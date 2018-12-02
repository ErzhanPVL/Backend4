<h2>Статьи</h2>            
  <table class="table">
    <thead>
    
    <tr>
        <th>№</th>
        <th>Заголовок</th>
        <th>Текст</th>
        <th>Автор</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $connect=mysqli_connect("localhost","root","","test");//Соединяемся с базой данных
  $data=mysqli_query($connect,"SELECT * FROM `blog`");//Выбираем все записи из таблицы Блог
  $cnt=0;//Присваиваем переменной значение 0
  while($post=mysqli_fetch_array($data)){//Создаем цикл:"Пока в таблице есть записи"
?>  
    <tr>
        <td><?php echo ++$cnt;//с каждой новой записью, число увеличивается на 1?></td>
        <td><?php echo "<a href='\services?num={$cnt}'>", $post['header'];// заголовок, который передаёт параметр номера новости?></a></td>
        <td><?php echo $post['text'];// основной текст?></td>
        <td><?php echo $post['autor'];// автор?></td>
    </tr><?
  }//Заполняем ячейки
    ?>
    </tbody>
  </table>