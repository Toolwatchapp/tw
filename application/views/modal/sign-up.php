<form method="post" name="signup">
    <div class="form-group">
       <h1>Sign up</h1>
    </div>
	<fieldset class="stepOne">
		<div class="form-group">
			<input type="email" class="form-control" name="email" placeholder="Enter your email" autofocus="true">
			<span class="signup-error email-error"></span>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="Set a password">
			<span class="signup-error password-error"></span>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="confirmPassword" placeholder="Confirm your password">
			<span class="signup-error confirm-password-error"></span>
		</div>
		<div class="form-group">
			<center><a class="btn btn-primary btn-lg signupNextStep">Continue</a></center>
		</div>
	</fieldset>
	<fieldset class="stepTwo">
        <div class="form-group">
            <h4>One last thing...</h4>
        </div>
		<div class="form-group">
            <small>We'd love to call you by your name</small>
			<input type="text" class="form-control" name="firstname" placeholder="Enter your firstname" autofocus="true">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="name" placeholder="Enter your name">
		</div>
		<div class="form-group">
            <small>And your localisation (you know, for data accuracy and stuff)</small>
			<select name="timezone" size="1" data-placeholder="Select time zone" class="form-control">
				<option value="">Select timezone</option>
                <option value="Etc/GMT-11">GMT-11:00 International Date Line West</option>
                <option value="Pacific/Midway">GMT-11:00 Midway Island</option>
                <option value="Pacific/Samoa">GMT-11:00 Samoa</option>
                <option value="US/Hawaii">GMT-10:00 Hawaii</option>
                <option value="US/Alaska">GMT-09:00 Alaska</option>
                <option value="US/Pacific">GMT-08:00 Pacific Time (US &amp; Canada)</option>
                <option value="America/Tijuana">GMT-08:00 Tijuana</option>
                <option value="US/Arizona">GMT-07:00 Arizona</option>
                <option value="US/Mountain">GMT-07:00 Mountain Time (US &amp; Canada)</option>
                <option value="America/Chihuahua">GMT-07:00 Chihuahua</option>
                <option value="America/Mazatlan">GMT-07:00 Mazatlan</option>
                <option value="US/Central">GMT-06:00 Central Time (US &amp; Canada)</option>
                <option value="Etc/GMT-6">GMT-06:00 Central America</option>
                <option value="America/Mexico_City">GMT-06:00 Mexico City</option>
                <option value="America/Monterrey">GMT-06:00 Monterrey</option>
                <option value="Canada/Saskatchewan">GMT-06:00 Saskatchewan</option>
                <option value="US/Eastern">GMT-05:00 Eastern Time (US &amp; Canada)</option>
                <option value="US/East-Indiana">GMT-05:00 Indiana (East)</option>
                <option value="America/Bogota">GMT-05:00 Bogota</option>
                <option value="America/Lima">GMT-05:00 Lima</option>
                <option value="America/Caracas">GMT-04:30 Caracas</option>
                <option value="Canada/Atlantic">GMT-04:00 Atlantic Time (Canada)</option>
                <option value="America/La_Paz">GMT-04:00 La Paz</option>
                <option value="America/Santiago">GMT-04:00 Santiago</option>
                <option value="Canada/Newfoundland">GMT-03:30 Newfoundland</option>
                <option value="America/Buenos_Aires">GMT-03:00 Buenos Aires</option>
                <option value="Etc/GMT+3">GMT-03:00 Greenland</option>
                <option value="Etc/GMT+2">GMT-02:00 Mid-Atlantic</option>
                <option value="Atlantic/Azores">GMT-01:00 Azores</option>
                <option value="Atlantic/Cape_Verde">GMT-01:00 Cape Verde Is.</option>
                <option value="Africa/Casablanca">GMT+00:00 Casablanca</option>
                <option value="Europe/Dublin">GMT+00:00 Dublin</option>
                <option value="Europe/Lisbon">GMT+00:00 Lisbon</option>
                <option value="Europe/London">GMT+00:00 London</option>
                <option value="UTC">GMT+00:00 UTC</option>
                <option value="Europe/Amsterdam">GMT+01:00 Amsterdam</option>
                <option value="Europe/Belgrade">GMT+01:00 Belgrade</option>
                <option value="Europe/Berlin">GMT+01:00 Berlin</option>
                <option value="Europe/Bratislava">GMT+01:00 Bratislava</option>
                <option value="Europe/Brussels">GMT+01:00 Brussels</option>
                <option value="Europe/Budapest">GMT+01:00 Budapest</option>
                <option value="Europe/Copenhagen">GMT+01:00 Copenhagen</option>
                <option value="Europe/Ljubljana">GMT+01:00 Ljubljana</option>
                <option value="Europe/Madrid">GMT+01:00 Madrid</option>
                <option value="Europe/Paris">GMT+01:00 Paris</option>
                <option value="Europe/Prague">GMT+01:00 Prague</option>
                <option value="Europe/Rome">GMT+01:00 Rome</option>
                <option value="Europe/Sarajevo">GMT+01:00 Sarajevo</option>
                <option value="Europe/Skopje">GMT+01:00 Skopje</option>
                <option value="Europe/Stockholm">GMT+01:00 Stockholm</option>
                <option value="Europe/Vienna">GMT+01:00 Vienna</option>
                <option value="Europe/Warsaw">GMT+01:00 Warsaw</option>
                <option value="Europe/Zagreb">GMT+01:00 Zagreb</option>
                <option value="Europe/Athens">GMT+02:00 Athens</option>
                <option value="Europe/Bucharest">GMT+02:00 Bucharest</option>
                <option value="Africa/Cairo">GMT+02:00 Cairo</option>
                <option value="Africa/Harare">GMT+02:00 Harare</option>
                <option value="Europe/Helsinki">GMT+02:00 Helsinki</option>
                <option value="Europe/Istanbul">GMT+02:00 Istanbul</option>
                <option value="Asia/Jerusalem">GMT+02:00 Jerusalem</option>
                <option value="Europe/Kiev">GMT+02:00 Kiev</option>
                <option value="Europe/Minsk">GMT+02:00 Minsk</option>
                <option value="Europe/Riga">GMT+02:00 Riga</option>
                <option value="Europe/Sofia">GMT+02:00 Sofia</option>
                <option value="Europe/Tallinn">GMT+02:00 Tallinn</option>
                <option value="Europe/Vilnius">GMT+02:00 Vilnius</option>
                <option value="Europe/Moscow">GMT+03:00 Moscow</option>
                <option value="Europe/Volgograd">GMT+03:00 Volgograd</option>
                <option value="Asia/Baghdad">GMT+03:00 Baghdad</option>
                <option value="Asia/Kuwait">GMT+03:00 Kuwait</option>
                <option value="Africa/Nairobi">GMT+03:00 Nairobi</option>
                <option value="Asia/Riyadh">GMT+03:00 Riyadh</option>
                <option value="Asia/Tehran">GMT+03:30 Tehran</option>
                <option value="Asia/Baku">GMT+04:00 Baku</option>
                <option value="Asia/Muscat">GMT+04:00 Muscat</option>
                <option value="Asia/Tbilisi">GMT+04:00 Tbilisi</option>
                <option value="Asia/Yerevan">GMT+04:00 Yerevan</option>
                <option value="Asia/Kabul">GMT+04:30 Kabul</option>
                <option value="Asia/Karachi">GMT+05:00 Karachi</option>
                <option value="Asia/Tashkent">GMT+05:00 Tashkent</option>
                <option value="Asia/Kolkata">GMT+05:30 Kolkata</option>
                <option value="Asia/Kathmandu">GMT+05:45 Kathmandu</option>
                <option value="Asia/Almaty">GMT+06:00 Almaty</option>
                <option value="Asia/Dhaka">GMT+06:00 Dhaka</option>
                <option value="Asia/Rangoon">GMT+06:30 Rangoon</option>
                <option value="Asia/Bangkok">GMT+07:00 Bangkok</option>
                <option value="Asia/Jakarta">GMT+07:00 Jakarta</option>
                <option value="Asia/Chongqing">GMT+08:00 Chongqing</option>
                <option value="Asia/Hong_Kong">GMT+08:00 Hong Kong</option>
                <option value="Asia/Kuala_Lumpur">GMT+08:00 Kuala Lumpur</option>
                <option value="Australia/Perth">GMT+08:00 Perth</option>
                <option value="Asia/Singapore">GMT+08:00 Singapore</option>
                <option value="Asia/Taipei">GMT+08:00 Taipei</option>
                <option value="Asia/Ulaanbaatar">GMT+08:00 Ulaan Bataar</option>
                <option value="Asia/Urumqi">GMT+08:00 Urumqi</option>
                <option value="Asia/Seoul">GMT+09:00 Seoul</option>
                <option value="Asia/Tokyo">GMT+09:00 Tokyo</option>
                <option value="Australia/Adelaide">GMT+09:30 Adelaide</option>
                <option value="Australia/Darwin">GMT+09:30 Darwin</option>
                <option value="Australia/Brisbane">GMT+10:00 Brisbane</option>
                <option value="Pacific/Guam">GMT+10:00 Guam</option>
                <option value="Australia/Hobart">GMT+10:00 Hobart</option>
                <option value="Australia/Melbourne">GMT+10:00 Melbourne</option>
                <option value="Pacific/Port_Moresby">GMT+10:00 Port Moresby</option>
                <option value="Australia/Sydney">GMT+10:00 Sydney</option>
                <option value="Asia/Kamchatka">GMT+11:00 Kamchatka</option>
                <option value="Pacific/Auckland">GMT+12:00 Auckland</option>
                <option value="Pacific/Fiji">GMT+12:00 Fiji</option>
			</select>
			<span class="signup-error timezone-error"></span>
		</div>
		<div class="form-group">
			<select name="country" class="form-control"> 
				<option value="" selected="selected">Select Country</option> 
				<option value="Switzerland">Switzerland</option> 
				<option value="Afghanistan">Afghanistan</option> 
				<option value="Albania">Albania</option> 
				<option value="Algeria">Algeria</option> 
				<option value="American Samoa">American Samoa</option> 
				<option value="Andorra">Andorra</option> 
				<option value="Angola">Angola</option> 
				<option value="Anguilla">Anguilla</option> 
				<option value="Antarctica">Antarctica</option> 
				<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
				<option value="Argentina">Argentina</option> 
				<option value="Armenia">Armenia</option> 
				<option value="Aruba">Aruba</option> 
				<option value="Australia">Australia</option> 
				<option value="Austria">Austria</option> 
				<option value="Azerbaijan">Azerbaijan</option> 
				<option value="Bahamas">Bahamas</option> 
				<option value="Bahrain">Bahrain</option> 
				<option value="Bangladesh">Bangladesh</option> 
				<option value="Barbados">Barbados</option> 
				<option value="Belarus">Belarus</option> 
				<option value="Belgium">Belgium</option> 
				<option value="Belize">Belize</option> 
				<option value="Benin">Benin</option> 
				<option value="Bermuda">Bermuda</option> 
				<option value="Bhutan">Bhutan</option> 
				<option value="Bolivia">Bolivia</option> 
				<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
				<option value="Botswana">Botswana</option> 
				<option value="Bouvet Island">Bouvet Island</option> 
				<option value="Brazil">Brazil</option> 
				<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
				<option value="Brunei Darussalam">Brunei Darussalam</option> 
				<option value="Bulgaria">Bulgaria</option> 
				<option value="Burkina Faso">Burkina Faso</option> 
				<option value="Burundi">Burundi</option> 
				<option value="Cambodia">Cambodia</option> 
				<option value="Cameroon">Cameroon</option> 
				<option value="Canada">Canada</option> 
				<option value="Cape Verde">Cape Verde</option> 
				<option value="Cayman Islands">Cayman Islands</option> 
				<option value="Central African Republic">Central African Republic</option> 
				<option value="Chad">Chad</option> 
				<option value="Chile">Chile</option> 
				<option value="China">China</option> 
				<option value="Christmas Island">Christmas Island</option> 
				<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
				<option value="Colombia">Colombia</option> 
				<option value="Comoros">Comoros</option> 
				<option value="Congo">Congo</option> 
				<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
				<option value="Cook Islands">Cook Islands</option> 
				<option value="Costa Rica">Costa Rica</option> 
				<option value="Cote D'ivoire">Cote D'ivoire</option> 
				<option value="Croatia">Croatia</option> 
				<option value="Cuba">Cuba</option> 
				<option value="Cyprus">Cyprus</option> 
				<option value="Czech Republic">Czech Republic</option> 
				<option value="Denmark">Denmark</option> 
				<option value="Djibouti">Djibouti</option> 
				<option value="Dominica">Dominica</option> 
				<option value="Dominican Republic">Dominican Republic</option> 
				<option value="Ecuador">Ecuador</option> 
				<option value="Egypt">Egypt</option> 
				<option value="El Salvador">El Salvador</option> 
				<option value="Equatorial Guinea">Equatorial Guinea</option> 
				<option value="Eritrea">Eritrea</option> 
				<option value="Estonia">Estonia</option> 
				<option value="Ethiopia">Ethiopia</option> 
				<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
				<option value="Faroe Islands">Faroe Islands</option> 
				<option value="Fiji">Fiji</option> 
				<option value="Finland">Finland</option> 
				<option value="France">France</option> 
				<option value="French Guiana">French Guiana</option> 
				<option value="French Polynesia">French Polynesia</option> 
				<option value="French Southern Territories">French Southern Territories</option> 
				<option value="Gabon">Gabon</option> 
				<option value="Gambia">Gambia</option> 
				<option value="Georgia">Georgia</option> 
				<option value="Germany">Germany</option> 
				<option value="Ghana">Ghana</option> 
				<option value="Gibraltar">Gibraltar</option> 
				<option value="Greece">Greece</option> 
				<option value="Greenland">Greenland</option> 
				<option value="Grenada">Grenada</option> 
				<option value="Guadeloupe">Guadeloupe</option> 
				<option value="Guam">Guam</option> 
				<option value="Guatemala">Guatemala</option> 
				<option value="Guinea">Guinea</option> 
				<option value="Guinea-bissau">Guinea-bissau</option> 
				<option value="Guyana">Guyana</option> 
				<option value="Haiti">Haiti</option> 
				<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
				<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
				<option value="Honduras">Honduras</option> 
				<option value="Hong Kong">Hong Kong</option> 
				<option value="Hungary">Hungary</option> 
				<option value="Iceland">Iceland</option> 
				<option value="India">India</option> 
				<option value="Indonesia">Indonesia</option> 
				<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
				<option value="Iraq">Iraq</option> 
				<option value="Ireland">Ireland</option> 
				<option value="Israel">Israel</option> 
				<option value="Italy">Italy</option> 
				<option value="Jamaica">Jamaica</option> 
				<option value="Japan">Japan</option> 
				<option value="Jordan">Jordan</option> 
				<option value="Kazakhstan">Kazakhstan</option> 
				<option value="Kenya">Kenya</option> 
				<option value="Kiribati">Kiribati</option> 
				<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
				<option value="Korea, Republic of">Korea, Republic of</option> 
				<option value="Kuwait">Kuwait</option> 
				<option value="Kyrgyzstan">Kyrgyzstan</option> 
				<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
				<option value="Latvia">Latvia</option> 
				<option value="Lebanon">Lebanon</option> 
				<option value="Lesotho">Lesotho</option> 
				<option value="Liberia">Liberia</option> 
				<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
				<option value="Liechtenstein">Liechtenstein</option> 
				<option value="Lithuania">Lithuania</option> 
				<option value="Luxembourg">Luxembourg</option> 
				<option value="Macao">Macao</option> 
				<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
				<option value="Madagascar">Madagascar</option> 
				<option value="Malawi">Malawi</option> 
				<option value="Malaysia">Malaysia</option> 
				<option value="Maldives">Maldives</option> 
				<option value="Mali">Mali</option> 
				<option value="Malta">Malta</option> 
				<option value="Marshall Islands">Marshall Islands</option> 
				<option value="Martinique">Martinique</option> 
				<option value="Mauritania">Mauritania</option> 
				<option value="Mauritius">Mauritius</option> 
				<option value="Mayotte">Mayotte</option> 
				<option value="Mexico">Mexico</option> 
				<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
				<option value="Moldova, Republic of">Moldova, Republic of</option> 
				<option value="Monaco">Monaco</option> 
				<option value="Mongolia">Mongolia</option> 
				<option value="Montserrat">Montserrat</option> 
				<option value="Morocco">Morocco</option> 
				<option value="Mozambique">Mozambique</option> 
				<option value="Myanmar">Myanmar</option> 
				<option value="Namibia">Namibia</option> 
				<option value="Nauru">Nauru</option> 
				<option value="Nepal">Nepal</option> 
				<option value="Netherlands">Netherlands</option> 
				<option value="Netherlands Antilles">Netherlands Antilles</option> 
				<option value="New Caledonia">New Caledonia</option> 
				<option value="New Zealand">New Zealand</option> 
				<option value="Nicaragua">Nicaragua</option> 
				<option value="Niger">Niger</option> 
				<option value="Nigeria">Nigeria</option> 
				<option value="Niue">Niue</option> 
				<option value="Norfolk Island">Norfolk Island</option> 
				<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
				<option value="Norway">Norway</option> 
				<option value="Oman">Oman</option> 
				<option value="Pakistan">Pakistan</option> 
				<option value="Palau">Palau</option> 
				<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
				<option value="Panama">Panama</option> 
				<option value="Papua New Guinea">Papua New Guinea</option> 
				<option value="Paraguay">Paraguay</option> 
				<option value="Peru">Peru</option> 
				<option value="Philippines">Philippines</option> 
				<option value="Pitcairn">Pitcairn</option> 
				<option value="Poland">Poland</option> 
				<option value="Portugal">Portugal</option> 
				<option value="Puerto Rico">Puerto Rico</option> 
				<option value="Qatar">Qatar</option> 
				<option value="Reunion">Reunion</option> 
				<option value="Romania">Romania</option> 
				<option value="Russian Federation">Russian Federation</option> 
				<option value="Rwanda">Rwanda</option> 
				<option value="Saint Helena">Saint Helena</option> 
				<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
				<option value="Saint Lucia">Saint Lucia</option> 
				<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
				<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
				<option value="Samoa">Samoa</option> 
				<option value="San Marino">San Marino</option> 
				<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
				<option value="Saudi Arabia">Saudi Arabia</option> 
				<option value="Senegal">Senegal</option> 
				<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
				<option value="Seychelles">Seychelles</option> 
				<option value="Sierra Leone">Sierra Leone</option> 
				<option value="Singapore">Singapore</option> 
				<option value="Slovakia">Slovakia</option> 
				<option value="Slovenia">Slovenia</option> 
				<option value="Solomon Islands">Solomon Islands</option> 
				<option value="Somalia">Somalia</option> 
				<option value="South Africa">South Africa</option> 
				<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
				<option value="Spain">Spain</option> 
				<option value="Sri Lanka">Sri Lanka</option> 
				<option value="Sudan">Sudan</option> 
				<option value="Suriname">Suriname</option> 
				<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
				<option value="Swaziland">Swaziland</option> 
				<option value="Sweden">Sweden</option> 
				<option value="Switzerland">Switzerland</option> 
				<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
				<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
				<option value="Tajikistan">Tajikistan</option> 
				<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
				<option value="Thailand">Thailand</option> 
				<option value="Timor-leste">Timor-leste</option> 
				<option value="Togo">Togo</option> 
				<option value="Tokelau">Tokelau</option> 
				<option value="Tonga">Tonga</option> 
				<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
				<option value="Tunisia">Tunisia</option> 
				<option value="Turkey">Turkey</option> 
				<option value="Turkmenistan">Turkmenistan</option> 
				<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
				<option value="Tuvalu">Tuvalu</option> 
				<option value="Uganda">Uganda</option> 
				<option value="Ukraine">Ukraine</option> 
				<option value="United Arab Emirates">United Arab Emirates</option> 
				<option value="United Kingdom">United Kingdom</option> 
				<option value="United States">United States</option> 
				<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
				<option value="Uruguay">Uruguay</option> 
				<option value="Uzbekistan">Uzbekistan</option> 
				<option value="Vanuatu">Vanuatu</option> 
				<option value="Venezuela">Venezuela</option> 
				<option value="Viet Nam">Viet Nam</option> 
				<option value="Virgin Islands, British">Virgin Islands, British</option> 
				<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
				<option value="Wallis and Futuna">Wallis and Futuna</option> 
				<option value="Western Sahara">Western Sahara</option> 
				<option value="Yemen">Yemen</option> 
				<option value="Zambia">Zambia</option> 
				<option value="Zimbabwe">Zimbabwe</option>
            </select>
			<span class="signup-error global-error"></span>
		</div>
		<div class="form-group">
			<center><button type="submit" class="btn btn-primary btn-lg btn-spinner">Sign up <i class="fa fa-spinner fa-pulse"></i></button></center>
		</div>
	</fieldset>
	<div class="form-group">
		  <center>Actually, I have an account. <br>Let me <a data-modal-update="true" data-href="/login/">log in!</a></center>
	</div>  
</form>