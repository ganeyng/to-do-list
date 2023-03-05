function dataVal(data)
{
	if(data == "" || data == null)
	{
		document.getElementById("errorMsg").innerHTML = "Input cannot be empty";
		return false;
	}
	else if(data.length > 40)
	{
		document.getElementById("errorMsg").innerHTML = "Input must not exceed 40 letters";
		return false;
	}
	else
	{
		document.getElementById("errorMsg").innerHTML = "";
		return true;
	}	
}