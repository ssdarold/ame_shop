<?php

header('HTTP/1.0 403 Forbidden');
require 'partials/main/header.php'

?>

<div class="container d-flex">
    <div style="margin: 200px auto;">
    <h1 class="text-center">Доступ запрещен</h1>
    <p class="text-center">У вас недостаточно прав для просмотра этого раздела</p>
</div>
</div>

<?php require 'partials/main/footer.php'; ?>