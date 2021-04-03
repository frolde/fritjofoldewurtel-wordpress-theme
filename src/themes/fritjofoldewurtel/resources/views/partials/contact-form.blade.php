<!-- Kontakt -->
<div class="container-fluid block contact">
	<div class="container">
		<div class="row contact-row">

			<div class="col-12 contact-headline-col">
				<h2>Kontakt</h2>
				<strong>Lassen Sie uns ein Gespräch beginnen! Ich freue mich auf Ihren Anruf oder Ihre Nachricht.</strong>
			</div>

			<div class="col-12 col-md-6 contact-col contact-col-phone">
				<a class="contact-link" href="tel:@php AccountLinks::the_account_link('phone_number') @endphp">
					<i class="contact-icon fas fa-phone"></i>
					<span class="contact-link-label">@php AccountLinks::the_account_link('phone_number') @endphp</span>
				</a>
			</div>

			<div class="col-12 col-md-6 contact-col contact-col-mail">
				<a class="contact-link" href="mailto:@php AccountLinks::the_account_link('email_address') @endphp">
					<i class="contact-icon fas fa-envelope"></i>
					<span class="contact-link-label">@php AccountLinks::the_account_link('email_address') @endphp</span>
				</a>
			</div>

		</div>
	</div>
</div>
<!-- Kontakt Ende -->
