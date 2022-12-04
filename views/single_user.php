<?php require 'partials/main/header.php';?>


<div class="container d-flex">
    <div style="margin: 100px auto;">
    <h1><?php echo $single_user_info['user_name']; ?></h1>
    <img style="height: 80px; width: auto;" src="/img/bg-img/<?php echo $single_user_info['user_avatar']; ?>">
    <a href="#" data-toggle="modal" data-target="#exampleModal">Сменить аватар</a>
    <h3>Список заказов:</h3>
    <h3>Список комментариев:</h3>
    <a href="/logout" style="text-decoration: underline;">Выйти</a>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Выберите новый аватар</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="avatarForm" action="/users/changeavatar" enctype="multipart/form-data">
        <input type="file" name="filedata" />
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" onclick="formSubmit()">Сохранить</button>
      </div>
    </div>
  </div>
</div>

<!-- Скрипт отправки формы смены аватара -->
<script>
    function formSubmit() {
        let form = document.getElementById('avatarForm')
        form.action = "/changeavatar"
        form.method = "POST"
        form.submit()
    }
</script>

<?php require 'partials/main/footer.php'; ?>