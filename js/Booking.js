function validateform()
{	if(document.form1.card.value.length==0)
	{	alert("Please enter the name in your card");
		return;	
	}

	if(document.form1.roomtype.selectedIndex==0)
	{
		alert("Please select a room type you wish")
		return;
	}

	if(document.form1.nroom.selectedIndex==0)
	{
		alert("How many rooms do you want?")
		return;
	}

	if(document.form1.nadults.selectedIndex==0)
	{
		alert("Mention the no.of adults")
		return;
	}

	
	if(document.form1.nchildren.selectedIndex==0)
	{
		alert("Mention the no.of children")
		return;
	}

	if(document.form1.ncheck.checked=="")
	{
		alert("You have to agree the terms and conditions!!")
		return;
    }
}