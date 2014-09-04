<?php require("../../includes/header.php"); ?><h1>Prime Factor</h1><div class="content">

<p>You start with a sequence of consecutive integers. You want to group them into sets.<br />
You are given the interval, and an integer P. Initially, each number in the interval is in its own set.<br />
Then you consider each pair of integers in the interval. If the two integers share a prime factor which is at least P, then you merge the two sets to which the two integers belong.<br />
How many different sets there will be at the end of this process?</p>
<p> </p>
<h3>Input</h3>
<p>One line containing an integer C, the number of test cases in the input file.<br />
For each test case, there will be one line containing three single-space-separated integers A, B, and P. A and B are the first and last integers in the interval, and P is the number as described above.</p>
<h3>Output</h3>
<p>For each test case, output one line containing the number of sets..</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
10 20 5
10 20 3


<b>Output:</b>
9
7


</pre><p> </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/codecheftsec">codecheftsec</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>50 sec</td>
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