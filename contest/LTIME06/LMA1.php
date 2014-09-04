<?php require("../../includes/header.php"); ?><h1>Lucy and the Math Analysis</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME06/russian/LMA1.pdf">here</a></h3>
<p>Lucy is taking math analysis classes in her school. She always has a lot of homework and she always spends a considerable amount of time in order to do it, but today she had completely forgotten about it for some reason. So, please, help her!</p>
<p>Lucy asks you to solve to following problem: calculate the following:<br /> <img src="http://www.codechef.com/download/CodeCogsEqn-7.gif" /><br /> Output the result till the <b>D-th</b> digit after the decimal point. We're asking you to output truncated result, but not rounded!</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
Each test is described by a line of four numbers - <b>a</b>, <b>p</b>, <b>q</b> and <b>D</b> respectively. <b>a</b>, <b>p</b>, <b>q</b> will be given with exactly two digits after the decimal point.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponding test case (with <b>D</b> digits after the decimal point).</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
0.62 2.71 3.14 42
0.91 4.70 6.67 18
0.01 9.81 8.63 66

<b>Output:</b>
17.903573407202216066481994459833795013850415
796.867901234567901234
0.187143148658300173451688603203754718906234057749209264360779512294
</pre><h3>Scoring</h3>
<p>In all the test cases, 0.01 &lt;= <b>a</b> &lt; 1.00, 0.00 &lt;= <b>p</b> &lt;= 10.00, 0.00 &lt;= <b>q</b> &lt;= 10.00<br /><br />
Output will not exceed 1 MB<br /><br />
Subtask 1 (31 point): <b>T</b> = 100000, 5 &lt;= <b>D</b> &lt;= 7, 0.01 &lt;= <b>a</b> &lt;= 0.50<br /><br />
Subtask 2 (29 points): <b>T</b> = 100, 50 &lt;= <b>D</b> &lt;= 100<br /><br />
Subtask 3 (15 points): <b>T</b> = 10000, 50 &lt;= <b>D</b> &lt;= 100<br /><br />
Subtask 4 (25 points): 10 &lt;= <b>T</b> &lt;= 100, 1 &lt;= <b>D</b> &lt;= 100000<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
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