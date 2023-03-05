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

function makeList()
{	
	
	let data = document.getElementById("data").value;
	let dataValidated = dataVal(data);
	
	let list = document.getElementsByClassName("list")[0];
	//listBox[0].innerHTML = data;
	
	if(dataValidated)
	{
		let listBox = document.createElement("div");
		let deleteBtn = document.createElement("button");
		
		listBox.innerText = data;
		
		// For parent listBox
		list.appendChild(listBox);
		console.log(listBox);
		listBox.classList.add("workStyle");
		
		//For child deleteBtn
		listBox.appendChild(deleteBtn);
		deleteBtn.classList.add("del-btn");
		
		console.log(deleteBtn);
		//deleteBtn.addEventListener("click", removeList(listBox));
		deleteBtn.onclick = function()
		{
			listBox.remove();
		}
		
		//document.getElementById("input").clear();
		//data.reset();

		// return false;
	}
}