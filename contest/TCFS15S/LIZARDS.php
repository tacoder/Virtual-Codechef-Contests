<?php require("../../includes/header.php"); ?><h1>Weird Lizards</h1><div class="content">
<p>Lizards are weird creatures. Not only are they afraid of bigger animals, they even get afraid when they see some other lizard staring at them.</p>
<p> <b>N</b> lizards are standing in a line, each of them is either facing left or right. A pair of indices <b>(i,j)</b> (i &lt; j) is called an <i>afraid pair</i> if lizard at index i is facing right, and lizard at index j is facing left. </p>
<p> <b>Q</b> queries are given, each query represented by two integers l and r (0 ≤ l ≤ r &lt; N). Query <b>l r</b> means flip direction of the lizards which have indices between l and r, inclusive. E.g., if the arrangement was LRRL then after query <b>1 3</b> it becomes LLLR. </p>
<p> After each query, print the number of <i>afraid pairs</i> in the arrangement.</p>
<h3>Input Description</h3>
<p>First line contains single integer N<br />Next line contains N characters, each being either L or R. L means lizard facing left, R means facing right<br />Next line has a single integer Q, the number of queries<br />Next Q lines each has 2 space separated integers l and r<br /></p>
<h3>Output Description</h3>
<p>For each query print the number of <i>afraid pairs</i> in the arrangement of lizards.<br /></p>
<h3>Constraints</h3>
<p>1≤N≤80000,<br /><br />
1≤Q≤80000<br /></p>
<h3>Example</h3>
<p><b>Input:</b> <br /><br />
4<br />LRRL<br />1<br />2 3<br /></p>
<p><b>Output:</b> <br /><br />
1<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-08-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>