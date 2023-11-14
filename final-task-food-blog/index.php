<?php include 'header.php'; ?>

<!-- Название сайта
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="sitetitle">Гастрономический блог</h1>
		<p class="lead">
            о еде, просто идеальна для гурманов
		</p>
	</div>
<!-- Завершение названия сайта
================================================== -->

<!-- Начало рекомендаций
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Рекомендуемые</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		<!-- первая публикация -->
		<div class="card">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="news.php">
						<div class="thumbnail" style="background-image:url(assets/img/demopic/1.jpg);">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block">
						<h2 class="card-title"><a href="news.php">Получи вдохновение тут</a></h2>
						<h4 class="card-text">Вы узнаете полезные кулинарные хитрости и советы от опытных поваров, которые могут улучшить ваш навык приготовления пищи.</h4>
						<div class="metafooter">
							<div class="wrapfooter">
								<span class="meta-footer-thumb">
								<a href="author.html"><img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="Sal"></a>
								</span>
								<span class="author-meta">
								<span class="post-name"><a href="author.html">Steve</a></span><br/>
								<span class="post-date">12 Августа 2022</span><span class="dot"></span><span class="post-read">6 минут на чтение</span>
								</span>
								<span class="post-read-more"><a href="news.php" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- завершение первой публикации -->
    </div>

    <!-- Нижний колонтитул
	================================================== -->
	<div class="footer">
		<p class="pull-left">
			 Copyright &copy; 2023 Me Website 
		</p>
		<p class="pull-right">
			<a target="_blank" href="mailto:one.infoo@gmail.com">Sergok1</a>
		</p>
		<div class="clearfix">
		</div>
	</div>
	<!-- Завершение нижнего колонтитула
	================================================== -->

</div>
<!-- /.container -->

<!-- Помещается в конце документа, чтобы страницы загружались быстрее -->
<!-- jquery - Она упрощает взаимодействие с HTML-документами, обработку событий, анимацию и взаимодействие с сервером. -->
<script src="assets/js/jquery.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<!-- Bootstrap - это фреймворк для разработки адаптивных и стильных веб-приложений -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- IE10: Этот скрипт представляет из себя обходной путь для исправления некоторых багов, связанных с отображением веб-страниц в Internet Explorer 10 -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
</body>
</html>