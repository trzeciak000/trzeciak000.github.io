<!doctype html>
<html>
<head>
  <meta charset="UTF-8">

  <title>Formularz kontaktowy - Serwis RTV Żywiec</title>

	<link rel="stylesheet" href="style.css">
</head>
<body background="tlo.jpg">
	<a href="index.html"><center><img src="baner.png"></center></a>
<center>
	<div id="menu1">
  <div id="menu2">
    <ul>
      <li><a href="index.html">Usługi</a></li>
      <li><a href="kontakt.html">Kontakt</a></li>
      <li><a href="o_firmie.html">O firmie</a></li>
                <li><a class="end">&nbsp;</a></li>
    </ul>
  </div>
	</div>
	<div id="tekst"><center>
	<script type="text/javascript">

function usun_pl(formularz)
{
	for (i = 0; i < formularz.length; i++)
	{
		var pole = formularz.elements[i];
		if (pole.type != "text" && pole.type != "textarea") continue;
		var str = "";
		for (j = 0; j < pole.value.length; j++)
		{
			switch (pole.value.charAt(j))
			{
				case "ą": str += "a"; break;
				case "ć": str += "c"; break;
				case "ę": str += "e"; break;
				case "ł": str += "l"; break;
				case "ń": str += "n"; break;
				case "ó": str += "o"; break;
				case "ś": str += "s"; break;
				case "ź": str += "z"; break;
				case "ż": str += "z"; break;
				case "Ą": str += "a"; break;
				case "Ć": str += "c"; break;
				case "Ę": str += "e"; break;
				case "Ł": str += "l"; break;
				case "Ń": str += "n"; break;
				case "Ó": str += "o"; break;
				case "Ś": str += "s"; break;
				case "Ź": str += "z"; break;
				case "Ż": str += "z"; break;
				default: str += pole.value.charAt(j); break;
			}
		}
		pole.value = str;
	}
}
// ]]>
</script>



<br>
	
<table border="0"><form method="post" onsubmit="usun_pl(this)" > 
<tr> 
<td>Treść wiadomości</td> 
<td><textarea name="tresc" style="width: 250px; height: 100px"></textarea></td> 
</tr> 
<tr> 
<td>Imię, nazwisko lub nick</td> 
<td><input type="text" name="imie" style="width: 250px"></td> 
</tr> 
<tr> 
<td>Adres e-mail</td> 
<td><input type="text" name="email" style="width: 250px"></td> 
</tr> 
<tr> 
<td>&nbsp;</td> 
<td><input type="submit" name="submit" value="Wyślij">&nbsp; 
<input type="reset" value="Od nowa"></td></form> 
</tr> 
</table>			
			
			
			
			
			
			
			</td>
			</table>
			</td>
			
			
		
		</tr>
		</table>
	<br>

	<div id="stopka"><b>Strona by: <address>209511</b> (209511@edu.p.lodz.pl)</adress></div>
	
</body>
</html>
