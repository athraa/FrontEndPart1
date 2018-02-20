<html>
    <head>
        <meta charset="utf-8">
        <title> أنضم الان</title>
        <!-- fontawesome -->
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <!--bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=El+Messiri|Montserrat" rel="stylesheet">
        <!-- style -->
        <link rel="stylesheet" href="css/formStyle.css">
      </head>
   
      <body>

        <div class="container">

          <form action="userinfo_insert.php"  method="POST" enctype="multipart/form-data">
          <img src="images/logo.png" alt="code for iraq" class="thumbnail">
            <h3 class="text-center"><i class="fas fa-heart"></i> أنضم الأن </h3>
            <p class="text-center lead" dir="rtl">
              قبل الارسال لاتنسى اختيار من القوائم مايناسب خبرتك ( مطور / مبرمج ، شبكات ، Linux )<br>
              لايشترط ان يكون اختصاصك تكنولوجيا المعلومات لتنضم لنا ان لم يكن نرجو تزويدنا في قسم others<br>
              لايشترط ان يكون لديك خبرة للانضمام سجل معنا وانضم لعائلتنا
            </p>

            <!-- first name -->
            <div class="form-group row">
              <label for="fName" class="col-sm-3 col-form-label">First Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="First Name" name="first_name">
              </div>
            </div>

            <!-- last name-->
            <div class="form-group row">
              <label for="lName" class="col-sm-3 col-form-label">Last Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Last Name" name="last_name">
              </div>
            </div>

            <!-- age -->
            <div class="form-group row">
              <label for="age" class="col-sm-3 col-form-label">Age</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" placeholder="Age" name="birth_date">
              </div>
            </div>

            <!-- email -->
            <div class="form-group row">
              <label for="age" class="col-sm-3 col-form-label">Email</label>
              <div class="col-sm-8">
                <input type="email" class="form-control" placeholder="Email" name ="Email">
              </div>
            </div>

            <!-- gender -->
            <div class="form-group row">
              <label for="gender" class="col-sm-3 col-form-label">Gender</label>
              <div class="col-sm-8">
                <select class="form-control" name ="gender">
                  <option selected>Choose...</option>
                  <option value="1">male</option>
                  <option value="2">female</option>
                </select>
              </div>
            </div>

            <!-- country -->
        <div class="form-group row">
          <label for="province" class="col-sm-3 col-form-label">Country</label>
          <div class="col-sm-8">
            <select class="form-control" name="country"> 
                  <option value="1">Afghanistan</option>
                  <option value="2">Åland Islands</option>
                  <option value="3">Albania</option>
                  <option value="4">Algeria</option>
                  <option value="5">American Samoa</option>
                  <option value="6">Andorra</option>
                  <option value="7">Angola</option>
                  <option value="8">Anguilla</option>
                  <option value="9">Antarctica</option>
                  <option value="10">Antigua and Barbuda</option>
                  <option value="11">Argentina</option>
                  <option value="12">Armenia</option>
                  <option value="13">Aruba</option>
                  <option value="14">Australia</option>
                  <option value="15">Austria</option>
                  <option value="16">Azerbaijan</option>
                  <option value="17">Bahamas</option>
                  <option value="18">Bahrain</option>
                  <option value="19">Bangladesh</option>
                  <option value="20">Barbados</option>
                  <option value="21">Belarus</option>
                  <option value="22">Belgium</option>
                  <option value="33">Belize</option>
                  <option value="24">Benin</option>
                  <option value="25">Bermuda</option>
                  <option value="26">Bhutan</option>
                  <option value="27">Bolivia, Plurinational State of</option>
                  <option value="28">Bonaire, Sint Eustatius and Saba</option>
                  <option value="29">Bosnia and Herzegovina</option>
                  <option value="30">Botswana</option>
                  <option value="31">Bouvet Island</option>
                  <option value="32">Brazil</option>
                  <option value="33">British Indian Ocean Territory</option>
                  <option value="34">Brunei Darussalam</option>
                  <option value="35">Bulgaria</option>
                  <option value="36">Burkina Faso</option>
                  <option value="37">Burundi</option>
                  <option value="38">Cambodia</option>
                  <option value="39">Cameroon</option>
                  <option value="40">Canada</option>
                  <option value="41">Cape Verde</option>
                  <option value="42">Cayman Islands</option>
                  <option value="43">Central African Republic</option>
                  <option value="44">Chad</option>
                  <option value="45">Chile</option>
                  <option value="46">China</option>
                  <option value="47">Christmas Island</option>
                  <option value="48">Cocos (Keeling) Islands</option>
                  <option value="49">Colombia</option>
                  <option value="50">Comoros</option>
                  <option value="51">Congo</option>
                  <option value="52">Congo, the Democratic Republic of the</option>
                  <option value="53">Cook Islands</option>
                  <option value="54">Costa Rica</option>
                  <option value="55">Côte d'Ivoire</option>
                  <option value="56">Croatia</option>
                  <option value="57">Cuba</option>
                  <option value="58">Curaçao</option>
                  <option value="59">Cyprus</option>
                  <option value="60">Czech Republic</option>
                  <option value="61">Denmark</option>
                  <option value="62">Djibouti</option>
                  <option value="63">Dominica</option>
                  <option value="64">Dominican Republic</option>
                  <option value="65">Ecuador</option>
                  <option value="66">Egypt</option>
                  <option value="67">El Salvador</option>
                  <option value="68">Equatorial Guinea</option>
                  <option value="69">Eritrea</option>
                  <option value="70">Estonia</option>
                  <option value="71">Ethiopia</option>
                  <option value="72">Falkland Islands (Malvinas)</option>
                  <option value="73">Faroe Islands</option>
                  <option value="74">Fiji</option>
                  <option value="75">Finland</option>
                  <option value="76">France</option>
                  <option value="77">French Guiana</option>
                  <option value="78">French Polynesia</option>
                  <option value="ATF">French Southern Territories</option>
                  <option value="79">Gabon</option>
                  <option value="80">Gambia</option>
                  <option value="81">Georgia</option>
                  <option value="82">Germany</option>
                  <option value="83">Ghana</option>
                  <option value="84">Gibraltar</option>
                  <option value="85">Greece</option>
                  <option value="86">Greenland</option>
                  <option value="87">Grenada</option>
                  <option value="88">Guadeloupe</option>
                  <option value="89">Guam</option>
                  <option value="90">Guatemala</option>
                  <option value="91">Guernsey</option>
                  <option value="92">Guinea</option>
                  <option value="93">Guinea-Bissau</option>
                  <option value="94">Guyana</option>
                  <option value="95">Haiti</option>
                  <option value="96">Heard Island and McDonald Islands</option>
                  <option value="97">Holy See (Vatican City State)</option>
                  <option value="98">Honduras</option>
                  <option value="99">Hong Kong</option>
                  <option value="100">Hungary</option>
                  <option value="101">Iceland</option>
                  <option value="102">India</option>
                  <option value="103">Indonesia</option>
                  <option value="104">Iran, Islamic Republic of</option>
                  <option value="105" selected="">Iraq</option>
                  <option value="106">Ireland</option>
                  <option value="107">Isle of Man</option>
                  <option value="108">Italy</option>
                  <option value="109">Jamaica</option>
                  <option value="110">Japan</option>
                  <option value="111">Jersey</option>
                  <option value="112">Jordan</option>
                  <option value="113">Kazakhstan</option>
                  <option value="114">Kenya</option>
                  <option value="115">Kiribati</option>
                  <option value="116">Korea, Democratic People's Republic of</option>
                  <option value="117">Korea, Republic of</option>
                  <option value="118">Kuwait</option>
                  <option value="119">Kyrgyzstan</option>
                  <option value="120">Lao People's Democratic Republic</option>
                  <option value="121">Latvia</option>
                  <option value="122">Lebanon</option>
                  <option value="123">Lesotho</option>
                  <option value="124">Liberia</option>
                  <option value="125">Libya</option>
                  <option value="126">Liechtenstein</option>
                  <option value="127">Lithuania</option>
                  <option value="128">Luxembourg</option>
                  <option value="129">Macao</option>
                  <option value="130">Macedonia, the former Yugoslav Republic of</option>
                  <option value="131">Madagascar</option>
                  <option value="132">Malawi</option>
                  <option value="133">Malaysia</option>
                  <option value="134">Maldives</option>
                  <option value="135">Mali</option>
                  <option value="136">Malta</option>
                  <option value="137">Marshall Islands</option>
                  <option value="138">Martinique</option>
                  <option value="139">Mauritania</option>
                  <option value="140">Mauritius</option>
                  <option value="141">Mayotte</option>
                  <option value="142">Mexico</option>
                  <option value="143">Micronesia, Federated States of</option>
                  <option value="144">Moldova, Republic of</option>
                  <option value="145">Monaco</option>
                  <option value="146">Mongolia</option>
                  <option value="147">Montenegro</option>
                  <option value="148">Montserrat</option>
                  <option value="149">Morocco</option>
                  <option value="150">Mozambique</option>
                  <option value="151">Myanmar</option>
                  <option value="152">Namibia</option>
                  <option value="153">Nauru</option>
                  <option value="154">Nepal</option>
                  <option value="155">Netherlands</option>
                  <option value="156">New Caledonia</option>
                  <option value="157">New Zealand</option>
                  <option value="158">Nicaragua</option>
                  <option value="159">Niger</option>
                  <option value="160">Nigeria</option>
                  <option value="161">Niue</option>
                  <option value="162">Norfolk Island</option>
                  <option value="163">Northern Mariana Islands</option>
                  <option value="164">Norway</option>
                  <option value="165">Oman</option>
                  <option value="166">Pakistan</option>
                  <option value="167">Palau</option>
                  <option value="168">Palestinian</option>
                  <option value="169">Panama</option>
                  <option value="170">Papua New Guinea</option>
                  <option value="171">Paraguay</option>
                  <option value="172">Peru</option>
                  <option value="173">Philippines</option>
                  <option value="174">Pitcairn</option>
                  <option value="175">Poland</option>
                  <option value="176">Portugal</option>
                  <option value="177">Puerto Rico</option>
                  <option value="178">Qatar</option>
                  <option value="179">Réunion</option>
                  <option value="180">Romania</option>
                  <option value="181">Russian Federation</option>
                  <option value="182">Rwanda</option>
                  <option value="183">Saint Barthélemy</option>
                  <option value="184">Saint Helena, Ascension and Tristan da Cunha</option>
                  <option value="185">Saint Kitts and Nevis</option>
                  <option value="186">Saint Lucia</option>
                  <option value="187">Saint Martin (French part)</option>
                  <option value="188">Saint Pierre and Miquelon</option>
                  <option value="189">Saint Vincent and the Grenadines</option>
                  <option value="190">Samoa</option>
                  <option value="191">San Marino</option>
                  <option value="192">Sao Tome and Principe</option>
                  <option value="193">Saudi Arabia</option>
                  <option value="194">Senegal</option>
                  <option value="195">Serbia</option>
                  <option value="196">Seychelles</option>
                  <option value="197">Sierra Leone</option>
                  <option value="198">Singapore</option>
                  <option value="199">Sint Maarten (Dutch part)</option>
                  <option value="200">Slovakia</option>
                  <option value="201">Slovenia</option>
                  <option value="202">Solomon Islands</option>
                  <option value="203">Somalia</option>
                  <option value="204">South Africa</option>
                  <option value="205">South Georgia and the South Sandwich Islands</option>
                  <option value="206">South Sudan</option>
                  <option value="207">Spain</option>
                  <option value="208">Sri Lanka</option>
                  <option value="209">Sudan</option>
                  <option value="210">Suriname</option>
                  <option value="211">Svalbard and Jan Mayen</option>
                  <option value="212">Swaziland</option>
                  <option value="213">Sweden</option>
                  <option value="214">Switzerland</option>
                  <option value="215">Syrian Arab Republic</option>
                  <option value="216">Taiwan, Province of China</option>
                  <option value="217">Tajikistan</option>
                  <option value="218">Tanzania, United Republic of</option>
                  <option value="219">Thailand</option>
                  <option value="220">Timor-Leste</option>
                  <option value="221">Togo</option>
                  <option value="222">Tokelau</option>
                  <option value="223">Tonga</option>
                  <option value="224">Trinidad and Tobago</option>
                  <option value="225">Tunisia</option>
                  <option value="226">Turkey</option>
                  <option value="227">Turkmenistan</option>
                  <option value="228">Turks and Caicos Islands</option>
                  <option value="229">Tuvalu</option>
                  <option value="230">Uganda</option>
                  <option value="231">Ukraine</option>
                  <option value="232">United Arab Emirates</option>
                  <option value="233">United Kingdom</option>
                  <option value="234">United States</option>
                  <option value="235">United States Minor Outlying Islands</option>
                  <option value="236">Uruguay</option>
                  <option value="237">Uzbekistan</option>
                  <option value="238">Vanuatu</option>
                  <option value="239">Venezuela, Bolivarian Republic of</option>
                  <option value="240">Viet Nam</option>
                  <option value="241">Virgin Islands, British</option>
                  <option value="242">Virgin Islands, U.S.</option>
                  <option value="243">Wallis and Futuna</option>
                  <option value="244">Western Sahara</option>
                  <option value="245">Yemen</option>
                  <option value="246">Zambia</option>
                  <option value="247">Zimbabwe</option>
              </select>
              </div></div>
            <!-- province -->
            <div class="form-group row">
              <label for="province" class="col-sm-3 col-form-label">For Iraqis -- choose province</label>
              <div class="col-sm-8">
                <select class="form-control" name="province">
                  <option selected>Choose...</option>
                  <option value="1">Baghdad </option>
                  <option value="2">Dohuk </option>
                  <option value="3">Erbil </option>
                  <option value="4">Sulaymaniyah</option>
                  <option value="5">Nineveh </option>
                  <option value="6">Kirkuk</option>
                  <option value="7">Salahuddin </option>
                  <option value="8">Diyala </option>
                  <option value="9">Anbar </option>
                  <option value="10">Babil </option>
                  <option value="10">Wasit  </option>
                  <option value="10">Najaf </option>
                  <option value="10">Karbala </option>
                  <option value="10">Muthanna </option>
                  <option value="10">Dhi Qar </option>
                  <option value="10">Maysan </option>
                  <option value="10">Qadissiya </option>
                  <option value="10">Basra  </option>
                </select>
              </div>
            </div>

            <!-- os -->
            <div class="form-group row">
              <label for="os" class="col-sm-3 col-form-label">Current Operating System</label>
              <div class="col-sm-8">
                <select class="form-control" name ="os[]" multiple="multiple">
                  <option selected>Choose...</option>
                  <option value="0">free DB </option>
                  <option value="1">windows </option>
                  <option value="2"> Mac OS </option>
                  <option value="3">Linux</option>
                </select>

              </div>
            </div>

            <!-- role -->
            <div class="form-group row">
              <label for="role" class="col-sm-3 col-form-label">Choose Role</label>
              <div class="col-sm-8">
                <select class="form-control" name="role">
                    <option selected>Choose ... </option>
                    <option value="1">Developer </option>
                    <option value="2">Programmer </option>
                    <option value="3">Network </option>
                    <option value="4">Database</option>
                    <option value="5">System admin </option>
                    <option value="6">IoT</option>
                    <option value="7">Artificial </option>
                    <option value="8">Ethical Hacking </option>
                    <option value="9">Other </option>
                </select>
                </div></div>

                <div class="form-group row">
              <label for="age" class="col-sm-3 col-form-label"></label>
              <div class="col-sm-8">
                <input type="submit" class="btn btn-Forward Request" value="Forward Request">
              </div>
            </div>

                


        </form>
        </div>
 
</body>
</html>