<!-- checking, if lang has not choosen  -->
<?php if(!isset($_SESSION['lang'])) { ?>
	<div class="row lang-position my-0 mx-auto">
		<div class="col-12">
			<form method="GET" action="" id="form_lang">
				<div class="lang-card text-center">
					<h1>Sofgigienik saytiga hush kelibsiz</h1>
					<hr>
					<h2>Tilni tanlang</h2>
					<button type="submit" value="uz" name="lang" class="btn d-block m-auto" id="lang" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] === 'uz'); ?>>
						<p class="lang-size">Uzbek tili</p>
					</button>
					<button type="submit" value="ru" name="lang" class="btn d-block m-auto" id="lang" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] === 'ru'); ?>>
						<p class="lang-size">Rus tili</p>
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="shadow">
<? } ?>
<!-- end checking -->