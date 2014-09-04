<?php require("../../includes/header.php"); ?><h1>Tracy and Charlie</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/mandarin/TANDC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME11/russian/TANDC.pdf">Russian</a>.</h3>
<p>Tracy is teaching Charlie maths via a game called N-Cube, which involves three sections involving N. <br /></p>
<p>Tracy gives Charlie a number N, and Charlie makes a list of N<sup>th</sup> powers of integers in increasing order (1<sup>N</sup>, 2<sup>N</sup>, 3<sup>N</sup>.. so on). This teaches him exponentiation. <br /><br />
Then Charlie performs the following subtraction game N times : Take all pairs of consecutive numbers in the list and take their difference. These differences then form the new list for the next iteration of the game. Eg, if N was 6, the list proceeds as [1, 64, 729, 4096 ... ] to [63, 685, 3367 ...], and so on 5 more times.<br /><br />
After the subtraction game, Charlie has to correctly tell Tracy the Nth element of the list. This number is the <i>value of the game</i>. <br /><br />
<br /><br />
After practice Charlie became an expert in the game. To challenge him more, Tracy will give two numbers <b>M</b> (where M is a prime) and <b>R</b> instead of just a single number N, and the game must start from <b>M<sup>R</sup> - 1</b> instead of N. Since the <i>value of the game</i> can now become large, Charlie just have to tell the largest integer K such that M<sup> K </sup> divides this number. Since even K can be large, output K modulo 1000000007 (10<sup>9</sup>+7).<br /><br />
<br /><br />
<b>INPUT:</b><br /><br />
First line will contain <b>T</b>, number of testcases. Then the testcases follow<br /><br />
Each testcase contains of a single line of input, two integers <b>M R</b><br /><br />
<br /><br />
<b>OUTPUT:</b><br /><br />
For each testcase, output in a single line answer given by Charlie to Tracy modulo 1000000007.<br /><br />
<br /><br />
<b>CONSTRAINTS:</b><br /><br />
1&lt;=T&lt;=1000<br /><br />
2&lt;=M&lt;=10<sup>9</sup><br /><br />
30 points : 1&lt;=R&lt;=10000<br /><br />
70 points : 1&lt;=R&lt;=10<sup>9</sup><br /><br />
M is a prime number<br /><br />
<br /><br />
<b>SAMPLE INPUT:</b><br /><br />
1<br /><br />
2 2<br /><br />
<br /><br />
<b>SAMPLE OUTPUT:</b><br /><br />
1<br /><br />
<br /><br />
<b>EXPLANATION:</b><br /><br />
This list is :<br />
[1,8,27,64,125..] -&gt; [7,19,37,61..] -&gt; [12,18,24..] -&gt; [6,6,6..]. Number of times 2 divides 6 is 1. Hence the answer is 1.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/piyushkumar">piyushkumar</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2014</td>
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