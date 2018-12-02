  <div class="col-sm-4">
        <form action="" method="post">
        <div class="form-group">
          <label for="header">Заголовок:</label>
          <input type="text" class="form-control" name="header">
        </div>
        <div class="form-group">
          <textarea name="text"></textarea>
        </div>
		<div class="form-group">
          <label for="autor">Автор:</label>
          <input type="text" class="form-control" name="autor">
        </div>
        <button type="submit" class="btn btn-success">Добавить запись</button>
        <br><br>
        </form>
    </div>
<?php
$connect=mysqli_connect("localhost","root","","test");//Соединяемся с базой данных
if(isset($_POST['header']))//Проверяем наличие пост данных
{
mysqli_query($connect,"INSERT INTO `blog`(`header`, `text`,`autor`) VALUES ('{$_POST['header']}','{$_POST['text']}','{$_POST['autor']}')");}//Прописываем запрос, В нашем случае надо заполнять таблицу через форму, поэтому используем INSERT.
?>