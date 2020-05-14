<h1>Стихотворения</h1>
<p>
<ul>
<li><a href="/verses_adam_mickiewicz">Стихотворения Адама Мицкевича</a></li>
<li><a href="/verses_anna_ahmatova">Стихотворения Анны Ахматовой</a></li>
<li><a href="/verses_alexander_block">Стихотворения Александра Блока</a></li>
<li><a href="/verses_nikolai_gumilev">Стихотворения Николая Гумилева</a></li>
</ul>

<br></br>
<table>
Ниже приведена таблица стихотворений, их авторов и годов написания.
<tr><td>Автор</td><td>Год</td><td>Название</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Author'].'</td><td>'.$row['Year'].'</td><td>'.$row['Title'].'</td></tr>';
	}
	
?>
</table>
</p>