<?php
    
 /**
 * Admin Single Page - Login
 *
 * *Description* 
 *
 * @author Alexander Weigelt <support@alexander-weigelt.de>
 * @link http://alexander-weigelt.de
 * @version Surftime CMS 3.0.3
 * @license http://creativecommons.org/licenses/by-nc-nd/4.0/legalcode CC BY-NC-ND 4.0
 */
 

if(defined('DIR_PROTECTION') and DIR_PROTECTION){

		print('
				<div class="small-12 large-6 large-centered columns">
					<form action="'.DIR.'" method="post">
						<fieldset>
						<legend>Login</legend>
						<div>
							<label for="user" class="'.$this->classFormLogin.'">Benutzername</label>
							<input type="text" id="user" name="loginUser" class="'.$this->classFormLogin.'" value="" placeholder="Username" required>
						</div>
						<div>
							<label for="password" class="'.$this->classFormLogin.'">Passwort</label>
							<input type="password" id="password" name="loginPass" class="'.$this->classFormLogin.'" value="" placeholder="Passwort" required>
						</div>
						<div>
							<input class="button expand extramargin" type="submit" name="loginSubmit" value="Login">
						</div>
						</fieldset>
					</form>
					<p>&larr; '.$this->Menu('SingleLink', 'index','Home').'</p>
				</div>
		');	
	
}
?>