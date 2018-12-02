<div class="row content">


    <div class="col-sm-9">

      <h4><small>
      <?php
    $connect=mysqli_connect("localhost","root","","test");//Соединяемся с базой данных
	
	class DataBase//Класс для работы с БД
	{
		var $num=1;
		function result($connect)//Функция для извлечения из БД выбранной новости
		{
			$result=mysqli_query($connect, "SELECT * FROM blog where id=$this->num");
			return $result;
		}
		function setNum($num)//Функция для выбора порядкового номера новости
		{
			$this->num=$num;
		}
	}
	
	$object=new DataBase;
	$object->setNum($_GET['num']);// Выбираем порядковый номер новость
    $post=mysqli_fetch_array($object->result($connect));
    echo $post['date']; //Выбираем запись даты из таблицы Блог
  ?>
      </small></h4>
      <hr>
      <h2><?php
      echo $post['header'];//Выбираем запись заголовка из таблицы Блог
  ?>
  </h2>
      <h5><span class="glyphicon glyphicon-time"></span> Опубликовал <?php
      echo $post['autor'];//Выбираем запись автора из таблицы Блог
  ?>
  </h5><br>
      <p><?php
      echo $post['text'];//Выбираем запись статьи из таблицы Блог
  ?>
  </p>
      <hr>

      <h4>Оставить комментарий:</h4>
      <form role="form" action="comment.php" method="get">
	  <?php
	  echo "<input name='num' type='hidden' value={$_GET['num']}>";//Отправляем параметр порядкого номера новости для добавления в соответствующее БД коммента
	  ?>
        <div class="form-group">
          <textarea class="form-control" rows="3" required name='text'></textarea>
        </div>
        <div class="form-group">
          <label for="usr">Псевдоним:</label>
          <input type="text" class="form-control" name="usr">
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
      </form>
      <br><br>
      
      <p><span class="badge"><?php 
    $result=mysqli_query($connect, "SELECT * FROM `comments{$_GET['num']}`");
    echo mysqli_num_rows($result);
    ?>
      </span> комментарий:</p><br>
      
      <div class="row">
        <?php
            $result=mysqli_query($connect, "SELECT * FROM `comments{$_GET['num']}`");
            while($data=mysqli_fetch_array($result))//Пробежимся по всем комментам из БД
            {
        ?>
        <div class="col-sm-2 text-center">
          <br><small>
        <?php 
            echo $data['date'];//Показываем дату коммента
        ?>
</small>
        </div>
        <div class="col-sm-10">
          <h4>
        <?php 
            echo $data['autor'];//Показываем автора коммента
        ?>
          </h4>
          <p>
        <?php 
            echo $data['text'];//Показываем текст коммента
        ?>
        </p>
          <br>
          </div>
        <?php
            }
        ?>
      </div>
    </div>
  </div>