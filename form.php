<label> First Name
    [text* applicant-first-name] </label>

<label> Last Name
    [text* applicant-last-name] </label>

<label> Date of Birth
    [date* applicant-dob] </label>

<label> Street
    [text* applicant-street] </label>

<label> City
	[text* applicant-city] </label>
    
<label> State
	[select* applicant-state
 "Alabama|AL" "Alaska|AK" "Arizona|AZ" "Arkansas|AR"
 "California|CA" "Colorado|CO" "Connecticut|CT" "Delaware|DE"
 "Washington DC|DC" "Florida|FL" "Georgia|GA" "Hawaii|HI"
 "Idaho|ID" "Illinois|IL" "Indiana|IN" "Iowa|IA" "Kansas|KS"
 "Kentucky|KY" "Louisiana|LA" "Maine|ME"  "Maryland|MD"
 "Massachusetts|MA" "Michigan|MI" "Minnesota|MN" "Mississippi|MS"
 "Missouri|MO" "Montana|MT" "Nebraska|NE" "Nevada|NV"
 "New Hampshire|NH" "New Jersey|NJ" "New Mexico|NM" "New York|NY"
 "North Carolina|NC" "North Dakota|ND" "Ohio|OH" "Oklahoma|OK"
 "Oregon|OR" "Pennsylvania|PA" "Rhode Island|RI"
 "South Carolina|SC" "South Dakota|SD" "Tennessee|TN"
 "Texas|TX" "Utah|UT" "Vermont|VT" "Virginia|VA" "Washington|WA"
 "West Virginia|WV" "Wisconsin|WI" "Wyoming|WY"] </label>

 <label> Zip
 	[text* applicant-zip] </label>
 	
 <label> Primary Phone
 	[tel* applicant-primary-phone] </label>

 <label> Secondary Phone
 	[tel applicant-secondary-phone] </label>

<label> Email
    [email* applicant-email] </label>

<label> Drivers License #
    [text applicant-license] </label>

<label> Social Security #
    [number applicant-social] </label>

[submit "Send"]