<?php include_once "lib/php/functions.php";?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cat's Website</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include "parts/meta.php"; ?>
</head>	
<body>

	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
				<h2>Grid</h2>
				<div class="grid">
					<div class="col-xs-6"> Column 6</div>
					<div class="col-xs-6"> Column 6</div>
				</div>

				<div class="container">
				<div class="grid">
					<div class="col-xs-4"> Column 4</div>
					<div class="col-xs-4"> Column 4</div>
					<div class="col-xs-4"> Column 4</div>

					<div class="col-xs-3"> Column 3</div>
					<div class="col-xs-6"> Column 6</div>
					<div class="col-xs-3"> Column 3</div>
				</div>				
				</div>
		</div>
	</div>

	<div class="container">
		<div class="card soft">
				<h2>Responsive Grid</h2>
				<div class="grid gap xs-small md-medium">
					<div class="col-xs-12 col-md-6"> Column 6</div>
					<div class="col-xs-12 col-md-6"> Column 6</div>
				</div>

			<div class="container">
				<div class="grid">
					<div class="col-xs-12 col-md-4 col-xl-3"> Column 4</div>
					<div class="col-xs-12 col-md-4 col-xl-3"> Column 4</div>
					<div class="col-xs-12 col-md-4 col-xl-6"> Column 4</div>
				
				<div class="grid ten gap">
					<div class="col-xs-2"> Column 2</div>
					<div class="col-xs-2"> Column 2</div>
					<div class="col-xs-2"> Column 2</div>
					<div class="col-xs-2"> Column 2</div>
					<div class="col-xs-2"> Column 2</div>
					</div>
				</div>				
        	</div> 
		</div>
	</div>


	<div class="container">
		<div class="grid gap xs-small md-medium">
			<!-- .col-xs-6.col-md-3*4>.card>{Card} -->
			<div class="col-xs-6 col-md-3">
				<div class="card soft"> <img src="https://via.placeholder.com/500" alt=" "class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"> <img src="https://via.placeholder.com/500" alt=" "class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"> <img src="https://via.placeholder.com/500" alt=" "class="media-image"></div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="card soft"> <img src="https://via.placeholder.com/500" alt=" "class="media-image"></div>
			</div>
		</div>

	</div>



	<div class="container">
		<article id="article1" class="article card soft">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>Article 1</h2>
				</div>
				<div class="flex-stretch">
					<small>5:20 AM</small>
				</div>
			</div>
			<div class="article-body">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolor perspiciatis veritatis minima ex nisi cum numquam voluptate facilis fuga, illum exercitationem porro possimus blanditiis, sit consequuntur, eius magni. Aliquam consequatur dicta, maiores numquam doloremque ut adipisci recusandae eaque nostrum!</p>
				<p>Odio at sed repellendus doloremque quo ipsa cum beatae quibusdam id officiis neque quisquam dolorem adipisci vel culpa cumque laborum, enim quam ab omnis nesciunt doloribus est consequatur. Eius culpa voluptatibus ipsam assumenda, labore quis laboriosam beatae earum mollitia non?</p>
				<p>In atque perferendis illum explicabo omnis fugiat voluptatem, ex similique quasi error. Ut iste aperiam natus deserunt corporis reprehenderit qui magnam fugiat placeat non cupiditate cum incidunt labore atque provident quo inventore, a quas obcaecati necessitatibus. Tempore quaerat nam eos.</p>
			</div>
		</article>
		<article id="article2" class="article card hard">
			<h2>Article 2</h2>
			<div class="article-body">
				<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis perferendis mollitia quod animi libero vitae minus ipsam adipisci, inventore dignissimos, deserunt incidunt voluptatem molestiae minima obcaecati voluptate doloremque maxime nesciunt doloribus veniam, asperiores deleniti laboriosam! Quaerat eveniet voluptas odit assumenda?</p>
				<p>Culpa illum nam ullam minus totam exercitationem aperiam neque cupiditate, dolor fuga enim, obcaecati magnam ad nesciunt, ipsam quisquam numquam rerum ea quas? Quos fuga doloribus doloremque obcaecati non minus quas excepturi cupiditate voluptas sint, amet aliquam, temporibus sit rem?</p>
				<p>Ullam cum, sunt tempora quae, doloremque eos quos amet, doloribus provident nam, nisi laboriosam voluptas. Corporis cumque quisquam nostrum reiciendis labore iure in ad qui saepe adipisci. Iure ex quo sed repudiandae enim illum, amet tempore ea soluta quaerat vero!</p>
			</div>
		</article>
	</div>
	<div class="view-window" style="background-image: url('img/ramen.jpg">
		
	</div>
	<div class="container">
		<article id="article3" class="article">
			<h2>Article 3</h2>
			<div class="article-body">
				<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis minima quae consequatur praesentium voluptatem, perferendis unde, accusamus facere eos obcaecati incidunt, atque provident veniam voluptate possimus magni ullam asperiores. Tempore placeat a cumque quas, velit quos, illo repellat exercitationem. Nulla!</p>
				<p>Delectus dolores aliquam iusto quibusdam et harum rem aliquid id asperiores cum nam saepe, ducimus perferendis voluptate assumenda velit, nisi consequatur unde corrupti magni necessitatibus officiis esse. Necessitatibus corrupti animi tenetur alias, illum quia molestiae a nostrum distinctio voluptates harum.</p>
				<p>Culpa repellat rerum voluptatum ad officia, cumque dolores molestias eum laboriosam facere explicabo, animi est? Culpa neque pariatur repudiandae, debitis nihil dignissimos consectetur ut ratione quos magni architecto sapiente harum fuga excepturi ducimus! Tenetur ratione atque nemo inventore maxime maiores.</p>
			</div>
		</article>
		<article id="article3" class="article">
			<h2>Article 4</h2>
			<div class="article-body">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Qui itaque sapiente eum autem facilis amet at natus fugiat a minima eveniet quia dolor optio laudantium placeat veritatis odit, rem molestias! Eius commodi perspiciatis, soluta ipsum eum quae et, autem. Sed!</p>
				<p>Nisi, veniam, blanditiis? Perspiciatis debitis odio eius adipisci, consequuntur? Architecto, natus, nisi. Commodi vero eum nihil quae pariatur quis eos autem optio. Dignissimos aut cupiditate a vero culpa! Itaque qui magni cum, iure inventore quo quos omnis, vel numquam consectetur.</p>
				<p>Aliquam, animi. Officia, officiis unde magni, quos rem quibusdam dolores odit in voluptatum dolor quas architecto ullam vero tenetur! Quibusdam blanditiis, libero commodi corrupti iste neque dicta ipsam, iusto voluptate quidem veniam fuga aperiam, sunt voluptates dolores at maxime? Quidem!</p>
			</div>
		</article>
		</div>
	</div>


</body>
</html>






























