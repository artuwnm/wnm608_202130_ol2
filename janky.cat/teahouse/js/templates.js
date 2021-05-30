


const listItemTemplate = templater(o=>`
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
		<figure class="figure product display-flex flex-column">
			<div class="flex-stretch">
			<img src="img/${o.thumbnail}" alt=""> </div>
			<figcaption class="flex-none">
					<div class="productname">${o.name}</div>
					<div class="price">&dollar;${o.price.toFixed(2)}</div>
					<div class="description">${o.description}</div>

					<div class="flex-grow">
							<div class="form-control display-flex">
								<button type="button"class="small-form-button">Add to Cart</button>

							</div>

						</div>
			</figcaption>
		</figure>
	</a>
`);