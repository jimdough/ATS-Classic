<link href="longForm.css" rel="stylesheet" type="text/css" />

<!-- Form Highlighting -->

<script type="text/javascript">
        $(document).ready(function(){
                $("input").focus(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .addClass("curFocus")
                });
                $("input").blur(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .removeClass("curFocus")
                });
				
				 $("select").focus(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .addClass("curFocus")
                });
                $("select").blur(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .removeClass("curFocus")
                });
				 $("textarea").focus(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .addClass("curFocus")
                });
                $("textarea").blur(function() {
                        $(this)
                                .closest('.sectionBreak')
                                        .removeClass("curFocus")
                });
				
        });
</script>

<!--END -->


<body>
<div id="longLeadForm">

<form action="emailProcess.php" method="post" name="longLeadForm" id="longContactForm">

<div class="sectionBreak">
	<div class="text"><b>Please complete the form below to have a representative contact you with more information.</b></div>
</div>

<div class="sectionBreak">

    <div class="label">First Name</div>
    <div class="input"><input type="text"  name="FirstName" id="firstName" size="18" class="required" /></div>
    
    <div class="label">Last Name</div>
    <div class="input"><input type="text" name="LastName" id="lastName" size="18" class="required" /></div>
        
    <div class="label clear">E-Mail Address</div>
    <div class="input"><input type="text" name="EmailAddress" id="email" size="18" class="required email" /></div>
    
    <div class="label">Phone Number</div>
    <div class="input"><input type="text" name="Phone" id="phone" size="18" class="required" /></div>
    
    <div class="label clear">Address 1</div>
    <div class="input"><input type="text" name="Address1" id="address1" size="18" /></div>
    
    <div class="label">Address 2</div>
    <div class="input"><input type="text" name="Address2" id="address2" size="18" /></div>
      
    <div class="label clear">City</div>
    <div class="input"><input type="text" name="City" id="city" size="18" /></div>
    
    <div class="label">State</div>
    <div class="input">
    <select name="GeoState" id="state">
        <option value="">Select a State</option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
    </select>
    </div>
    
    <div class="label clear">ZipCode</div>
    <div class="input"><input type="text" name="ZipCode" id="ZipCode" size="5" /></div>
    
    <div class="label">Company</div>
    <div class="input"><input type="text" name="Company" id="Company" size="18" /></div>
    
    <div class="clear"></div>
  
</div>

<div class="sectionBreak">

    <div class="labelLarge">Comment or Question</div>
    <div class="inputLarge"><textarea name="Comment" id="comment" cols="45" rows="5"></textarea></div>
<br>
    <div class="submitButton clear"><input type="submit" name="submit" id="submit" value="Submit this Form" /></div>

</div>

</form>
</div>
