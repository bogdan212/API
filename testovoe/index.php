<!DOCTYPE html>
<html lang ru>
<head>
    <?php
    $website_title ='Главная';

    require 'blocks/head.php';?>
</head>
  <body>

    <?php require 'blocks/header.php';?>


      <main class="container mt-5">
      <div class="row">
      <div class="col-md-8 mb-4">
        <div id="contact_form">
          <form action="sdelka.php" method="post">
            <div class="field">
              <label for="cname">Имя</label><input id="cname" class="form-control" type="text" name="cname">
            </div>

            <div class="field">
              <label for="cphone">Телефон</label><input id="cphone" class="form-control" type="phone" name="cphone">
            </div>
            <div class="field">
              <label for="cemail">E-mail</label><input id="cemail" class="form-control" type="email" name="cemail">
            </div>


            <div>
              <button type="submit">Создать контакт</button>
              <button type="reset">Очистить форму</button>
            </div>
          </form>
        </div>
      </div>

       <?php require 'blocks/aside.php';?>

  </div>

</main>
<?php require 'blocks/footer.php';?>



  </body>
  </html>
