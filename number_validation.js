function allnumeric(inputtxt)
   {
      var numbers = /^[0-9]+$/;
      if(inputtxt.value.match(numbers))
      {
      alert('Your Registration number has accepted....');
      document.form1.text1.focus();
      return true;
      }
      else
      {
      alert('Please input numeric characters only');
      document.form1.text1.focus();
      return false;
      }
   } 

   $(document).ready(function(){
    let mobile = $('#mobile').val();
    var val = mobile.value
if (/^\d{10}$/.test(val)) {
    // value is ok, use it
} else {
    alert("Invalid number; must be ten digits")
    number.focus()
    return false
}
    
    console.log(user);
   })



   function IsMobileNumber(txtMobId) {
    var mob = /^[1-9]{1}[0-9]{9}$/;
    var txtMobile = document.getElementById(txtMobId);
    if (mob.test(txtMobile.value) == false) {
        alert("Please enter valid mobile number.");
        txtMobile.focus();
        return false;
    }
    return true;
}