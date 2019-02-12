<?php
/*
    Copyright (C) 2011 Ross Lagerwall <rosslagerwall@gmail.com>

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Lesser General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Lesser General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
function comment($pageName) {
echo '<div id="comment"><p><span style="font-size:18px;">Yorumlar:</span></p>';
if (file_exists($pageName."yorumlar.txt")) {
$fileC = file($pageName."yorumlar.txt");
foreach ($fileC as $line) {
$arr = explode("~", $line);
echo "<b>".$arr[2]."</b>";
echo "<p><b class=\"nick\">".$arr[0]."</b><br>";
echo " ".date("d.m.Y H:i:s", $arr[1])."</p>";
}
}else{
echo "No comments!";
}
echo '<div style="background-color:black;height:2px;width:100%"></div>
<div id="write">
<span style="font-size:18px">Yorum yazın:</span>
<form style="margin-top:5px" method="post" action="yorumgonder.php">
<table>
<tr><td><center><input type="text" size="4" name="name" value="Vice"></td></tr>
<tr><td>';
echo '<textarea autofocus name="comment" rows="10" cols="40"></textarea></td></tr>
<tr><td align="center"><input type="submit" name="submit" value="yolla"></td></tr>
</table>
<input type="hidden" name="page" value="'.$pageName.'">
</form>
</div>
</div></center>';
}
?>