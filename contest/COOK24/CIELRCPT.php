<?php require("../../includes/header.php"); ?><h1>Ciel and Receipt</h1><div class="content">

<p>
Tomya is a girl. She loves Chef Ciel very much.
</p>
<p>
Tomya like a positive integer <b>p</b>, and now she wants to get a receipt of Ciel's restaurant whose total price is exactly <b>p</b>.<br />
The current menus of Ciel's restaurant are shown the following table.
</p>
<table border="1" align="center">
<tr>
<td><b>Name of Menu</b></td>
<td align="right"><b>price</b></td>
</tr>
<tr>
<td>eel flavored water</td>
<td align="right">1</td>
</tr>
<tr>
<td>deep-fried eel bones</td>
<td align="right">2</td>
</tr>
<tr>
<td>clear soup made with eel livers</td>
<td align="right">4</td>
</tr>
<tr>
<td>grilled eel livers served with grated radish</td>
<td align="right">8</td>
</tr>
<tr>
<td>savory egg custard with eel</td>
<td align="right">16</td>
</tr>
<tr>
<td>eel fried rice (S)</td>
<td align="right">32</td>
</tr>
<tr>
<td>eel fried rice (L)</td>
<td align="right">64</td>
</tr>
<tr>
<td>grilled eel wrapped in cooked egg</td>
<td align="right">128</td>
</tr>
<tr>
<td>eel curry rice</td>
<td align="right">256</td>
</tr>
<tr>
<td>grilled eel over rice</td>
<td align="right">512</td>
</tr>
<tr>
<td>deluxe grilled eel over rice</td>
<td align="right">1024</td>
</tr>
<tr>
<td>eel full-course</td>
<td align="right">2048</td>
</tr>
</table>
<p>
Note that the <b>i</b>-th menu has the price 2<sup><b>i</b>-1</sup> (1 ≤ <b>i</b> ≤ 12).
</p>
<p>
Since Tomya is a pretty girl, she cannot eat a lot.<br />
So please find the minimum number of menus whose total price is exactly <b>p</b>.<br />
Note that if she orders the same menu twice, then it is considered as two menus are ordered. (See <b>Explanations</b> for details)
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
Each test case contains an integer <b>p</b>.
</p>
<h3>Output</h3>
<p>
For each test case, print the minimum number of menus whose total price is exactly <b>p</b>.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 5<br />
1 ≤ <b>p</b> ≤ 100000 (10<sup>5</sup>)<br />
There exists combinations of menus whose total price is exactly <b>p</b>.
</p>
<h3>Sample Input</h3>
<pre>4
10
256
255
4096</pre><h3>Sample Output</h3>
<pre>2
1
8
2</pre><h3>Explanations</h3>
<p>
In the first sample, examples of the menus whose total price is 10 are the following:<br />
1+1+1+1+1+1+1+1+1+1 = 10 (10 menus)<br />
1+1+1+1+1+1+1+1+2 = 10 (9 menus)<br />
2+2+2+2+2 = 10 (5 menus)<br />
2+4+4 = 10 (3 menus)<br />
2+8 = 10 (2 menus)<br />
Here the minimum number of menus is 2.
</p>
<p>
In the last sample, the optimal way is 2048+2048=4096 (2 menus).<br />
Note that there is no menu whose price is 4096.
</p>
    </div><table border="1" align="center">
<tr>
<td><b>Name of Menu</b></td>
<td align="right"><b>price</b></td>
</tr>
<tr>
<td>eel flavored water</td>
<td align="right">1</td>
</tr>
<tr>
<td>deep-fried eel bones</td>
<td align="right">2</td>
</tr>
<tr>
<td>clear soup made with eel livers</td>
<td align="right">4</td>
</tr>
<tr>
<td>grilled eel livers served with grated radish</td>
<td align="right">8</td>
</tr>
<tr>
<td>savory egg custard with eel</td>
<td align="right">16</td>
</tr>
<tr>
<td>eel fried rice (S)</td>
<td align="right">32</td>
</tr>
<tr>
<td>eel fried rice (L)</td>
<td align="right">64</td>
</tr>
<tr>
<td>grilled eel wrapped in cooked egg</td>
<td align="right">128</td>
</tr>
<tr>
<td>eel curry rice</td>
<td align="right">256</td>
</tr>
<tr>
<td>grilled eel over rice</td>
<td align="right">512</td>
</tr>
<tr>
<td>deluxe grilled eel over rice</td>
<td align="right">1024</td>
</tr>
<tr>
<td>eel full-course</td>
<td align="right">2048</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-07-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>