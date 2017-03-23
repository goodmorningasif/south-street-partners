<?php
  /**
  * Section =>  Contact
  */ 

?>

<header>
  <h2>Contact</h2>
</header>
<form>
  <div class="col-1">
		<input id="f-fullname" type="text" placeholder="Name" name="name" required>
		<input id="f-email" type="email" placeholder="Email" name="email" required>
		<input id="f-tel" type="tel" placeholder="Phone" name="tel" required>
	</div>
	<div class="col-2">
		<textarea id="f-notes" type="message" name="message" placeholder="Notes" rows="10" cols="30"></textarea>
		<input id="f-submit" type="submit" value="submit">
	</div>
</form>