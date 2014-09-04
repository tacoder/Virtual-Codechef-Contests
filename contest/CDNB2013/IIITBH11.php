<?php require("../../includes/header.php"); ?><h1>Problem 2</h1><div class="content">

<p> </p>
<p>You are given two vectors v1=(x1,x2,...,xn) and v2=(y1,y2,...,yn). The scalar product of these vectors is a single number, calculated as x1y1+x2y2+...+xnyn.</p>
<p>
Suppose you are allowed to permute the coordinates of each vector as you wish. Choose two permutations such that the scalar product of your two new vectors is the smallest possible, and output that minimum scalar product.</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input file contains integer number T - the number of test cases. For each test case, the first line contains integer number n. The next two lines contain n integers each, giving the coordinates of v1 and v2 respectively.</p>
<h3>Output</h3>
<ul>For each test case, output a line
<li>Case #X: Y
<p>where X is the test case number, starting from 1, and Y is the minimum scalar product of all permutations of the two given vectors.</p></li>
</ul>
<h3>Small dataset</h3>
<ul>
<li>T = 1000</li>
<li>1 = n = 8</li>
<li>-1000 = xi, yi = 1000</li>
</ul>
<h3>Sample</h3>
<ul>
<li>Input </li>
<li>2 </li>
<li>3 </li>
<li>1 3 -5 </li>
<li>-2 4 1 </li>
<li>5 </li>
<li>1 2 3 4 5 </li>
<li>1 0 1 0 1</li>
<li>Output </li>
<li>Case #1: -25</li>
<li>Case #2: 6</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rggroups">rggroups</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2013</td>
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