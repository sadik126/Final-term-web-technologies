function validateForm(){

	var id=document.getElementById('id').value;
  if(id=="username"){
    document.getElementById('msg1').innerHTML="**id cannot be empty";
    return false;
  }

  var password=document.getElementById('id').value;
  if(id=="password"){
    document.getElementById('msg2').innerHTML="**password cannot be empty";
    return false;
  }

}