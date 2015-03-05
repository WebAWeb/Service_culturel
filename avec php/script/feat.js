function showCo()
{
	var mireCont = document.getElementById("mire");
	var mire = mireCont.getElementsByTagName("form");
	console.log(mireCont);
	var delta;
	var h = deformat($(mireCont).css("height"));
	console.log(h);
	if(h>0)
	{
		delta=-3;
	}
	else
	{
		delta=3;
	}
	console.log(delta);
	var cpt=0;
	var inter = setInterval(function()
	{
		var h = $(mireCont).css("height");
		console.log(h);
		$(mireCont).css("height","+="+delta);
		cpt++;
		if(cpt==25)
		{
			clearInterval(inter)
		}
	},25);

}

function deformat(value)
{
	//int tempValue =;
	if(isNaN(value))
	{
		var l = value.length;
		var i = l-1;
		var ok = false;

		while(i>=0 && !ok)
		{
			if(isNaN(value.charAt(i)))
			{
				i--;
			}
			else
			{
				ok=true;
			}
		}

		return value.substring(0,i+1);
	}
}