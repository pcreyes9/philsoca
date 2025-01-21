
<form wire:submit.prevent="submit">
    {{-- <div wire:loading>LOADING...</div> --}}
    @csrf
    <div class="error-container"></div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label style="font-weight: 750; font-size: medium; color: black">Last Name </label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold; text-transform:uppercase" class="form-control form-control-name" name="name" id="name" placeholder="" type="text" wire:model="last_name" value={{$last_name}} >
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="font-weight: 750; font-size: medium; color: black">First Name</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold; text-transform:uppercase" class="form-control form-control-email" name="text" id="text" placeholder="" type="text" wire:model="first_name" value={{$first_name}}>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="font-weight: 750; font-size: medium; color: black">Middle Initial</label>
                <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold; text-transform:uppercase" class="form-control form-control-email" name="text" type="text"  id="text" placeholder=""  wire:model="middle_initial" value={{$middle_initial}}  >
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label style="font-weight: 750; font-size: medium; color: black">Name of Hospital</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold; " class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalName" placeholder="" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
            <label style="font-weight: 750; font-size: medium; color: black">Address of Hospital</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold;s" class="form-control form-control-subject" name="subject" id="subject" wire:model="hospitalAddress" placeholder="" required>
            </div>
        </div>
        <div class="col-md-4">
            {{-- {{ $country }} --}}
            <label style="font-weight: 750; font-size: medium; color: black">Country</label> 
        
            <select id="country" name="country" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2" wire:model.live="country" required style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
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
                <option value="Brunei">Brunei</option>
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
                <option value="Guernsey">Guernsey</option>
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
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
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
                <option value="Montenegro">Montenegro</option>
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
                <option value="Serbia">Serbia</option>
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
                <option value="Taiwan">Taiwan</option>
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
                <option value="VietNam">VietNam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
        </div>
        <div class="col-md-4">
            <div class="form-group">
            <label style="font-weight: 750; font-size: medium; color: black">Email</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white; font-weight: bold" class="form-control form-control-subject" type="email" name="subject" id="subject" wire:model="email" placeholder="" required>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="form-group">
            <label style="font-weight: 750; font-size: medium; color: black">Contact Number</label>
            <input style="box-shadow: 2px 2px 3px gray; background-color: #000066; color: white;; font-weight: bold" class="form-control form-control-subject" type="number" name="subject" id="subject" wire:model="contactNumber" placeholder="" required>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <label style="font-weight: 750; font-size: medium; color: black">Gender</label><br>
            <div class="form-check">
                <input style="color: #000066" class="form-check-input" type="radio" readonly name="radioGender" value = "male" id="male" wire:model="gender" required>
                <label style="color: #000066" class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input style="color: #000066" class="form-check-input" type="radio" name="radioGender" value = "female" id="female" wire:model="gender" required>
                <label style="color: #000066" class="form-check-label" for="female">
                    Female
                </label>
            </div>
        </div>
           
            {{-- <div class="col-md-4 mt-4">
                <label style=" font-weight: 750; font-size: medium; color:white">Senior Citizen</label><br>
                <div class="form-check">
                    <input style="color: white"  class="form-check-input" type="radio" name="radioSenior" value = "yesSen" id="yesSen" wire:model.live='senior' required>
                    <label style="color: white" class="form-check-label" for="yesSen">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input style="color: white" class="form-check-input" type="radio" name="radioSenior" value = "noSen"  id="noSen" wire:model.live='senior'  required>
                    <label style="color: white" class="form-check-label" for="noSen">
                        No
                    </label>
                </div>
            </div> --}}

        
            {{-- @if ( $senior  == 'yesSen')
                <div class="col-md-4 mt-4">
                    <label style=" font-weight: 750; font-size: medium; color:white">Senior Citizen ID</label><br>
                    <input style="color: white" type="file" wire:model="imgSenior" required>
                    @error('paymentProof') <span class="error">{{ $message }}</span> @enderror
                </div>
            @endif --}}
                
            
            <div class="col-md-4 mt-4">
                <label style="font-weight: 750; font-size: medium; color: black">Rate to be paid:</label><br>
                @if  ($country  == "Brunei" ||  $country  == "Cambodia" ||  $country  == "Indonesia" ||  $country  == "Laos" ||  $country  == "Malaysia" || 
                     $country  == "Myanmar" ||  $country  == "Singapore" ||  $country  == "Thailand" ||  $country  == "Vietnam")

                    <label style="font-weight: 750; font-size: medium; color: black">ASEAN MEMBER: $450</label><br>
                    
                @else
                    <label style="font-weight: 750; font-size: medium; color: black">NON ASEAN MEMBER: $600</label><br>
                @endif
                <label style="font-style: italic; font-weight: 300; font-size: normal; color: black">Early Bird (Jan 20 - Apr 30, 2025)</label><br>

            
                <label style="font-weight: 750; font-size: medium; color: black"></label>
                @error('paymentProof') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-4 mt-4">
                <label style="font-weight: 750; font-size: medium; color: black">Proof of Payment</label><br>
                <input style="color: #000066" type="file" wire:model="paymentProof" required>
                @error('paymentProof') <span class="error">{{ $message }}</span> @enderror
            </div>
            
        </div>
        
        <br>

        @if (session()->has('message'))
            <div class="alert alert-warning">
                {{ session('message') }}
            </div>
        @endif
        {{-- <div class="form-group">
            <label>Message</label>
            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required></textarea>
        </div> --}}
        <p class="para-head fd mb-2">Bank Details</p>
        <p class="hotel-p fd">
            Bank Name: <strong>Bank of the Philippine Islands (BPI)</strong>  <br>
            Bank Address: <strong>SM North Branch Brgy. Pag-asa, Quezon City; 1105 </strong> <br> Account Number:<strong> 004434-0395-47</strong> <br> 
            Account name: <strong>Philippine Society of Anesthesiologists, Inc.</strong> <br> SWIFT CODE: <strong>BOPIPHMM</strong>
        </p>

        <div class="text-right"><br>
            <button wire:loading.attr="disabled" type="submit" class="btn btn-primary solid blank" style="background: #d6cb00; color: #000066">
                {{-- <div class="loader"></div> --}}
                <svg wire:loading xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path fill="currentColor" d="M12,1A11,11,0,1,0,23,12,11,11,0,0,0,12,1Zm0,19a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z" opacity="0.25"/><path fill="currentColor" d="M10.14,1.16a11,11,0,0,0-9,8.92A1.59,1.59,0,0,0,2.46,12,1.52,1.52,0,0,0,4.11,10.7a8,8,0,0,1,6.66-6.61A1.42,1.42,0,0,0,12,2.69h0A1.57,1.57,0,0,0,10.14,1.16Z"><animateTransform attributeName="transform" dur="0.75s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></path></svg>
                <div wire:loading.remove>
                    Register
                </div>
                
            </button>
        </div>
    </div>
</form>









