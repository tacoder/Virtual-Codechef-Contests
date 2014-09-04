<?php require("../../includes/header.php"); ?><h1>Exploding Search</h1><div class="content">

<p>Magazines and newspapers often have letter matrices in which certain words need to be located. Umesh, a puzzle fanatic at IIT Roorkee, had an idea for a new kind of searching puzzle. In the letter matrix provided, words can be located along any set of diagonals, with repetition of past selected letters.</p>
<p>For example, in the letter matrix:</p>
<p> </p>
<pre>B X A X X<br />X A X X X<br />X B B X X<br />X A X A X<br />X X B X X<br /><br /><br /></pre><p> </p>
<p>The string ABA can be found in 14 different ways – corresponding to the following locations:</p>
<p> </p>
<pre>A	        B	        A<br />(1,1)	(0,0)	(1,1)<br />(1,1)	(2,2)	(3,1)<br />(1,1)	(2,2)	(3,3)<br />(1,1)	(2,2)	(1,1)<br />(3,1)	(2,2)	(3,1)<br />(3,1)	(2,2)	(3,3)<br />(3,1)	(4,2)	(3,1)<br />(3,1)	(4,2)	(3,3)<br />(3,1)	(2,2)	(1,1)<br />(3,3)	(2,2)	(3,3)<br />(3,3)	(2,2)	(1,1)<br />(3,3)	(2,2)	(3,1)<br />(3,3)	(4,2)	(3,1)<br />(3,3)	(4,2)	(3,3)<br /></pre><p> </p>
<p> So, given a matrix of size NxN, you need to find out the total number of locations of a particular string. The input and output formats are as follows:</p>
<h3>Input</h3>
<p>Line 1: N. 1 &lt;= N &lt;= 1000<br /> Line 2 to N+1: Elements of the NxN matrix in row major order (separated by a space)<br /> Line N+2: The string to search. Maximum length of this string will be N2.</p>
<h3>Output</h3>
<p>Line 1: The number of ways in which the string can be found in the matrix.</p>
<h3>Example</h3>
<pre><b>Input:</b><br />5<br />B X A X X<br />X A X X X<br />X B B X X<br />X A X A X<br />X X B X X<br />ABA<br /><br /><b>Output:</b><br />14<br /></pre><p>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-03-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50001 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLPS, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>