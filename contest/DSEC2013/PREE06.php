<?php require("../../includes/header.php"); ?><h1>Dexter and his Blood Slides</h1><div class="content">
<h3>Problem Statement</h3>
<p>
Dexter wants to fill a box having compartments in the form of a 3xN grid and he has blood slides of N different types to do that. Each compartment is to be filled with exactly one blood slide. An arrangement of the grid is considered beautiful if no two compartments of the same row or same column have the same type of blood slide.
</p>
<p>The compartments of the first two rows are already filled and they don't violate the beautiful condition (one type of blood slide doesn't appear more than once on the same row or the same column).
</p>
<p>
Find how many different ways he can fill the 3rd row such that the resulting grid is beautiful. Two ways of filling the box are considered different if there is at least one compartment which is filled with a different type of blood slide.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer T denoting the number of test cases.<br /><br />
The first line of each test case contains an integer N.<br /><br />
The next line contains N integers A1, A2, ..., AN, where Ai(1 ≤ i ≤ N) is the type of the blood slide at column i of 1st row.<br /><br />
The next line contains N integers B1, B2, ..., BN, where Bi(1 ≤ i ≤ N) is the type of the blood slide at column i of 2nd row.<br /></p>
<h3>Output</h3>
<p>For each test case, output the number of ways to fill the 3rd row such that the resulting grid is beautiful. Output the result modulo 1000000007.</p>
<h3>Constraints</h3>
<pre>
1 ≤ T ≤ 10
3 ≤ N ≤ 1000
A1, A2, ..., AN is a permutation of the numbers 1, 2, ..., N.
B1, B2, ..., BN is a permutation of the numbers 1, 2, ..., N.
Ai ≠ Bi ( 1 ≤ i ≤ N) 

<h3>Example</h3>
<h4>Input</h4>
2
4
3 1 2 4
2 4 1 3
4
2 4 1 3
1 3 2 4
<h4>Output</h4>
2
4
</pre><h3>Explanation</h3>
<p>For the 1st case the valid ways to fill the 3rd row are: {1,3,4,2} and {4,2,3,1}.<br /><br />
For the 2nd case the valid ways are: {3,1,4,2} , {3,2,4,1} , {4,1,3,2} and {4,2,3,1}.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ratish1992">ratish1992</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-10-2013</td>
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