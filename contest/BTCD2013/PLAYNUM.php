<?php require("../../includes/header.php"); ?><h1>Play with numbers</h1><div class="content">
<p>
In Casino Royal , there was a gambling machine which was quite innovative. It contains a row of numbers, 'MoneyRow. Each time a player plays, the machine generates some random pairs of integers a and b. All such pairs are shown to the player who then has one chance to reorder the numbers of the MoneyRow.<br />
<br /><br />
After he is done with the rearranging and presses start button, money equal to the sum of the numbers from ath cell to bth cell ( both inclusive ) of the MoneyRow is added in his account.This process is repeated for each pair (but with the same arrangement of the MoneyRow) generated by the machine and the money in the account keeps on increasing.<br />
<br /><br />
Given the row and all pairs, you have to predict the maximum money he can win. </p>
<h3>Input</h3>
<p>The first line contains T, the number of test cases. The next line contains two space separated integers n and q : the count of Numbers in the row and the number of pairs,respectively.<br />
<br /><br />
The next line contains n space separated integers Ni, The numbers in the row.<br />
<br /><br />
Each of the following q lines contain two space separated integers a and b representing the pair.
</p>
<h3>Output</h3>
<p>In a single line print a single integer : Maximum amount of money he can win. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10^6</b></li>
<li><b>1</b> ≤ <b>a</b> ≤ <b>b</b> ≤ <b>n</b></li>
<li><b>1</b> ≤ <b>Ni</b> ≤ <b>10^6</b></li>
<li><b>1</b> ≤ <b>q</b> ≤ <b>10^6</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
5 3
1 2 3 4 5
3 4
3 4
1 5

<b>Output:</b>
33
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/harshg0910">harshg0910</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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