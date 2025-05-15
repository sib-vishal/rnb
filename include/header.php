<header class="header stricky">
	<div class="containerFull">
		<div class="inline-header">
			<div class="left_logo">
				<a href="index.php">
					<img src="images/logo.svg" alt="">
				</a>
			</div>
			<div class="menu-links">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about-us.php">About</a></li>
					<li><a href="rural-excellence.php">Rural Excellence</a></li>
					<li><a href="impact-stories.php">Impact</a></li>
					<li><a href="ambition.php">Ambition</a></li>
					<li><a href="donate.php">Donate</a></li>
					<li><a href="contact-us.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>

<!-- Modal -->

<div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content donate-modal-content">
			<div class="modal-header border-0 py-0">
				<div>
					<h5 class="modal-title sub_heading text_secondary fontWeight600">Donate.</h5>
					<small class="" style="">"Together, we can transform the University’s
						vision."</small>
				</div>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
					aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form>
					<input type="number" class="form-control donate-input" placeholder="Amount*" required>
					<input type="text" class="form-control donate-input" placeholder="Name*" required>

					<div class="d-flex gap-2">
						<input type="email" class="form-control donate-input" placeholder="Email*" required>
						<input type="tel" class="form-control donate-input" placeholder="Phone*" required>
					</div>

					<textarea class="form-control donate-input" placeholder="Address*" rows="2" required></textarea>

					<div class="d-flex gap-2">
						<input type="text" class="form-control donate-input" placeholder="Pincode*" required>
						<input type="text" class="form-control donate-input" placeholder="PAN number*" required>
					</div>

					<select class="form-select donate-input">
						<option selected disabled>Donate Once</option>
						<option>Monthly</option>
					</select>

					<input type="text" class="form-control donate-input"
						placeholder="How would you like your contribution to be used?">

					<button type="submit" class="btn_2 d-block w-100 py-2">Submit</button>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content p-4 text-white" style="background-color: #00205B; border-radius: 16px;">
			<div class="text-center mb-3">
				<div
					style="width: 64px; height: 64px; margin: 0 auto; background-color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
					<svg width="65" height="65" fill="green" viewBox="0 0 16 16">
						<path
							d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM7 11.207l5.354-5.353-.708-.708L7 9.793 4.354 7.146l-.708.708L7 11.207z" />
					</svg>
				</div>
			</div>
			<h5 class="text-center fw-bold text-white">Thank You for Your Support!</h5>
			<p class="text-center text_blue_light mb-3 mt-4" style="font-size: 0.9rem; color:#6CB2E2">
				Your donation has been successfully processed. Your generosity helps us continue our work and make a
				meaningful impact.
			</p>
			<div class="text-start text-white mb-3">
				<strong>Next Steps:</strong>
				<ul class="ps-3 mt-2" style="font-size: 0.85rem; list-style:disc;">
					<li class="mt-2">A confirmation email with the details of your donation has been sent to your inbox.</li>
					<li class="mt-2">Your support makes a difference! Stay connected with us for updates.</li>
					<li class="mt-2">Need assistance? Contact our support team [here].</li>
				</ul>
			</div>
			<div class="d-flex justify-content-center mt-4">
				<button class="btn btn-light rounded-pill px-5" data-bs-dismiss="modal">Back</button>
				<a href="#" class="btn btn-warning rounded-pill px-4 ms-2">View Receipt</a>
			</div>
		</div>
	</div>
</div>







<!-- donate button -->
<a href="#" class="donate-button" data-bs-toggle="modal" data-bs-target="#successModal">Donate</a>


<div class="cursor"></div>
<div class="cursor2"></div>