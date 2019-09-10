<br><br>
<div class="login-wrap">
	<div class="login-html">

	<?php if( isset($error) ) : ?>
		<p style="color:red; font-style:italic">Email atau Password salah!!!</p>
	<?php endif; ?>


    <div><h1 style="color:white">Portal YAK</h1></div>
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Register</label>
		<div class="login-form">
			<div class="sign-in-htm">
			    <form action="<?= BASEURL ?>/home/login" method="post">
    				<div class="group">
    					<label for="email" class="label">Email</label>
    					<input style="background:white;color:black" id="email" type="email" class="input" name="email">
    				</div>
    				<div class="group">
    					<label for="pass" class="label">Password</label>
    					<input style="background:white;color:black" id="pwd" type="password" class="input" data-type="password" name="password">
    				</div>
    				<div class="group">
						<button class="button" type="submit" name="login">Sign In</button>
    				</div>
			    </form>
			</div>
			<div class="for-pwd-htm">
			    <form action="" method="post">
					<div class="group">
    					<input style="background:white;color:black" id="username" name="username" type="username" class="input" placeholder="User Name" required>
    				</div>
    				<div class="group">
    					<input style="background:white;color:black" id="email" name="email" type="email" class="input" placeholder="Email" required>
    				</div>
    				<div class="group">
    					<input style="background:white;color:black"  id="password" name="password" type="password" class="input" placeholder="Password" required>
    				</div>
    				<div class="group">
    					<input style="background:white;color:black"  id="password2" name="password2" type="password" class="input" placeholder="Password Confirmation" required>
    				</div>
    				<div class="group">
						<button class="button" type="submit" name="register">Register!!!</button>
    				</div>
			    </form>
			</div>
		</div>
	</div>
</div>
