<!-- Kunden -->
<div class="container-fluid clients">
	<div class="container">
		<div class="row">
			<div class="col-md-3 clientsLeft d-flex align-items-center">
				<h2>Meine Partner:</h2>
			</div>
			<div class="col-md-9 clientsRight">
				<div class="clients__slider">

					@foreach(Clients::clientsLoop() as $display_client)
						<div class="clients__singleslide">
							<div class="logo" style="background-image: url(@php echo $display_client['thumbnail'] @endphp)"></div>
						</div>
					@endforeach

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Kunden Ende -->
