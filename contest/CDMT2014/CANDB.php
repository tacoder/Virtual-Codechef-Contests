<?php require("../../includes/header.php"); ?><h1>Cups and Balls</h1><div class="content">
<p>Ram is playing a game where there are exactly N cups numbered 1 to N in a row in front of him and he has balls numbered from 1 to N with him. In this game his opponent gives him a number K(0 &lt;= K &lt;= N), and Ram has to arrange the the balls in the cup (1 ball per cup) such that he gets exactly k good cups.</p>
<p>If the balls arranged in the row are numbered a<sub>1</sub>, a<sub>2</sub>, a<sub>3</sub>, .... a<sub>n</sub> then a cup is good if |a<sub>i</sub> - i| = 1. </p>
<p>Ram is a mathematician so, he is thinking the total number of ways he can arrange the balls in the cups such that he get K good positions. Help ram in the problem. As the result might be large, output the ans mod 10^9 + 7.</p>
<h3>Input:</h3>
<p>The first line would contain the number of test cases T.<br />
Every test case consist of two space separated values N and K. </p>
<h3>Output:</h3>
<p>For every test case output the single Integer, the number of ways Ram can arrange exactly N balls in the cups such that he gets K good positions mod 10^9 + 7 (1000000007)</p>
<h3>Constraints</h3>
<p>1 &lt;= T &lt;= 201 &lt;= N &lt;= 1000 0 &lt;= K &lt;= N</p>
<h3>Examples</h3>
<p><strong>INPUT</strong><br />
5<br />
1 0<br />
2 1<br />
3 2<br />
4 1<br />
7 4<br />
<strong>OUTPUT</strong><br />
1<br />
0<br />
4<br />
6<br />
328</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/a_g2009">a_g2009</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-02-2014</td>
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