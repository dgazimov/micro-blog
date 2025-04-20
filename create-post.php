<?php
require("config.php");
require("db.php");

if (!empty($_POST)) {
    if (empty($_POST['content']) && empty($_FILES['cover']['name'])) {
        $errors[] = "Пост обязательно должен содержать текст или обложку";
    }

    if (empty($errors)) {
      $post = R::dispense('posts');
      $post->title = trim($_POST['title']);
      $post->content = trim($_POST['content']);
      $post->created_at = date('Y-m-d H:i:s');
      $id = R::store($post);
    }
}

include(ROOT . "/templates/head.tpl");
include(ROOT . "/templates/header.tpl");

?>


<main class="page-content">
			<div class="container container-narrow">
				<form class="form" method="POST" enctype="multipart/form-data">
					<h2 class="form__title">Добавить запись</h2>

                    <?php
                        if (isset($errors) && !empty($errors)) {
                            foreach ($errors as $error) {
                                echo "$error <br>";
                            }
                        }

                        if (isset($id)){
                           echo "Пост успешно создан";
                        }
                    ?>

					<label class="fieldset">
						<div class="label">Название</div>
						<input type="text" class="input" name="title" />
					</label>

					<label class="fieldset">
						<div class="label">Содержание</div>
						<textarea name="content" id="" class="textarea"></textarea>
					</label>

					<fieldset class="fieldset">
						<div class="label">Обложка</div>
						<label class="fieldset fieldset--checkbox">
							<input type="checkbox" name="deleteCover" />
							Удалить обложку
						</label>
						<input type="file" name="cover"/>
					</fieldset>

					<button class="button button--lg">Опубликовать</button>
				</form>
			</div>
</main>

<?php
include(ROOT . "/templates/footer.tpl");
?>