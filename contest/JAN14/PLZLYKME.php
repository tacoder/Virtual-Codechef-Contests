<?php require("../../includes/header.php"); ?><h1>Please like me</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/PLZLYKME.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/PLZLYKME.pdf">Russian</a>.</h3>
<p>
    In a far away dystopian world, the measure of the quality of a person’s life is the numbers of likes he gets for an article about their life. For a person to stay alive, he has to acquire at least <strong>L</strong> number of likes before <strong>D</strong> days pass.
</p>
<p>
    People in this world employ various techniques to increase the number of likes. One of the famous ones is to dis-like and re-like their own article once per day. On doing so you can assume that the number of likes for the post increase by a constant factor <strong>C</strong>.
</p>
<p>
So if one starts with <strong>S</strong> likes on Day-1, he would have <strong>D2</strong> = <strong>S + C * S </strong>likes on Day-2,    <strong>D3 = D2 + D2 * C</strong> on Day-3 etc. You are to answer if the person would survive at the end of Day-D or not.
</p>
<p>
    <strong>Input</strong>
</p>
<p>
    <strong> </strong>
</p>
<p>
    First line contains a single positive integer <strong>T</strong> denoting the number of test cases. The following <strong>T</strong> lines represent a test case each. Each test case contains 4 space-separated integers <strong>L, D, S and C</strong>.<strong></strong>
</p>
<p>
    <strong>Output</strong>
</p>
<p>
    <strong> </strong>
</p>
<p>
For each test case, print a single line containing “<strong>ALIVE AND KICKING</strong>” if the person would live, otherwise print, “<strong>DEAD AND ROTTING</strong>”.
</p>
<p>
    <strong>Constraints</strong>
</p>
<p>
<strong>1 &lt;= T &lt;= 1000</strong><br /><br />
<strong>1 &lt;= L &lt;= 1000000000</strong><br /><br />
<strong>1 &lt;= D &lt;= 1000000000</strong><br /><br />
<strong>1 &lt;= S &lt;= 1000000000</strong><br /><br />
<strong>1 &lt;= C &lt;= 1000000000</strong><br />
</p>
<p>
<b>Sample cases:</b><br /></p>
<pre>
<b>Input</b>
2
5 1 5 1
10 2 2 2

<b>Output</b>
ALIVE AND KICKING
DEAD AND ROTTING
</pre>
<p>
<b>Explanation</b><br /><br />
In the first case by the end of Day-1 we would be having <b>S</b> that is <b>5</b> number of likes, as it is ≥ <b>L</b>, the answer is <b>ALIVE AND KICKING</b>.<br /><br />
In the second case, <b>D2 =S + C*S</b>, therefore <b>D2 = 2 + 2 * 2 = 6</b>, as 6 is less than 10, the answer is <b>DEAD AND ROTTING</b>.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-12-2013</td>
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