<?php
require("config.php");

include(ROOT . "/templates/head.tpl");
include(ROOT . "/templates/header.tpl");
?>


<main class="page-content">
			<div class="container container-narrow">
				<form class="form">
					<h2 class="form__title">Добавить запись</h2>

					<label class="fieldset">
						<div class="label">Название</div>
						<input type="text" class="input" />
					</label>

					<label class="fieldset">
						<div class="label">Содержание</div>
						<textarea name="" id="" class="textarea"></textarea>
					</label>

					<fieldset class="fieldset">
						<div class="label">Обложка</div>
						<label class="fieldset fieldset--checkbox">
							<input type="checkbox" />
							Удалить обложку
						</label>
						<input type="file" />
					</fieldset>

					<button class="button button--lg">Опубликовать</button>
				</form>
			</div>
</main>

<?php
include(ROOT . "/templates/footer.tpl");
?>