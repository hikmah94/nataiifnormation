
<script type="text/javascript">
function validateForm()
{
var a=document.forms["createmsg"]["to"].value;
if (a==null || a=="")
  {
  alert("Pls. Fill the form");
  return false;
  }
var b=document.forms["createmsg"]["cat"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the category");
  return false;
  }
  var j=document.forms["createmsg"]["sub"].value;
if (j==null || j=="")
  {
  alert("Pls. Enter the subject");
  return false;
  }
  var c=document.forms["createmsg"]["body"].value;
if (c==null || c=="")
  {
  alert("Pls. Enter the body");
  return false;
  }
  /*if (c.which!=8 && c.which!=0 && (c.which<48 || c.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }
if (b.which!=8 && b.which!=0 && (b.which<48 || b.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }*/
}
</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>

<form action="adminmsgexec.php" method="post" name="addroom" onsubmit="return validateForm()">
 TO<br />
  <input name="to" type="text" class="ed" /><br />
  Category<br />
  <select name="cat"  class="ed">
  <option value="parent">Parent</option>
   <option value="student">Student</option>
  </select><br />
   Subject<br />
  <input name="sub" type="text" class="ed" /><br />
  Body<br />
  <textarea name="body" class="ed"></textarea><br />
    <input type="submit" name="Submit" value="save" id="button1" />
</form>
