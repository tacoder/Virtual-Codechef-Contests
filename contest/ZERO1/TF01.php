<?php require("../../includes/header.php"); ?><h1>Subset Sum</h1><div class="content">

<p> An established group of scientists are working on finding solution to NP hard problems. They claim <b>Subset Sum </b> as an NP-hard problem. The problem is to determine whether there exists a subset of a given set S whose sum is a given number K.  <br/><br />
You are a computer engineer and you claim to solve this problem given that all numbers in the set are non-negative. Given a set S of size N of non-negative integers, find whether there exists a subset whose sum is K.</br/></p>
<h3>Input</h3>
<p>First line of input contains T, the number of test cases. T test cases follow. <br/><br />
Each test case contains 2 lines. First line contains two integers N and K. Next line contains N space separated non-negative integers (each less than 100000).<br/><br />
0 &lt; T &lt; 1000<br/><br />
0 &lt; N &lt; 1000<br/><br />
0 &lt; K &lt; 1000</br/></br/></br/></br/></p>
<h3>Output</h3>
<p>Output T lines, one for each test case. Every line should be either 0 or 1 depending on whether such a subset exists or not.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 10
3 4 6 1 9
3 2
1 3 4

<b>Output:</b>
1
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivamagarwal">shivamagarwal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 10 sec</td>
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