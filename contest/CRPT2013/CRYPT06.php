<?php require("../../includes/header.php"); ?><h1>Blue Diamond</h1><div class="content">
<h2>Problem Statement  </h2>
<p>Mr. Jackson acquires a rare blue diamond worth $9.6 million. Its perfect quality, its large size, and its rare color makes it strikingly unique and beautiful. And this is exactly why his sole aim is to keep it under lock and key. So he buys a safe that has a 6-number combination. Mr. Jackson is a very forgetful man so help him come up with a combination that he won’t forget. For this reason he chooses k(k&gt;6) of his favorite numbers from the set {1,2,...,49}. Write a program to generate all the possibilities of sequences of 6 numbers from the set of his favorite numbers for Mr. Jackson to choose from. And to make it easy for him to remember it must be in ascending order with no repetitions. </p>
<h3>Input</h3>
<p>The input file will contain test cases – 1 or more.<br />
Each test case consists of one line containing integers separated from each other by spaces. The first integer indicates k, followed by k integers, specifying the set S, in ascending order.<br />
Input will be terminated by a value of zero (0) for k.
</p>
<h3>Output</h3>
<p>For each test case, print all possible combinations, each combination on one line.<br />
The numbers of each combination in ascending order is separated from each other by exactly one space. The combinations have to be sorted lexicographically (lowest to highest).<br />
The test cases have to be separated from each other by exactly one blank line. Do not put a blank line after the last test case.
</p>
<h3>Constraints</h3>
<ul>
<li><b>6</b> &lt; <b>k</b> &lt; <b>21</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
7 1 2 3 4 5 6 7
0

<b>Output:</b>
1 2 3 4 5 6
1 2 3 4 5 7
1 2 3 4 6 7
1 2 3 5 6 7
1 2 4 5 6 7
1 3 4 5 6 7
2 3 4 5 6 7
</pre><p>
<br />
<br />
<b>Note : The reference for this problem has been taken from : UVa online Judge </b>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/himanshuk123">himanshuk123</a></td>
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