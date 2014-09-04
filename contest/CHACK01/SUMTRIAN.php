<?php require("../../includes/header.php"); ?><h1>Sums in a Triangle</h1><div class="content">

<p>
Let's consider a triangle of numbers in which a number appears in the first line, two numbers appear in the second line, three in the third line, etc. Develop a program which will compute the largest of the sums of numbers that appear on the paths starting from the top towards the base, so that:</p>
<ul>
<li> on each path the next number is located on the row below, more precisely either directly below or below and one place to the right;</li>
<li> the number of rows is strictly positive, but less than 100 </li>
<li> all numbers are positive integers between O and 99.</li>
</ul>
<h3>Input</h3>
<p>
In the first line integer n - the number of test cases (equal to about 1000).<br />
Then n test cases follow. Each test case starts with the number of lines which is followed by their content.</p>
<h3>Output</h3>
<p>
For each test case write the determined value in a separate line. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
1
2 1
1 2 3
4 
1 
1 2 
4 1 2
2 3 1 1 

<b>Output:</b>
5
9
</pre><p><br/><br />
<b>Warning: large Input/Output data, be careful with certain languages</b> </br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2008</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>5000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>