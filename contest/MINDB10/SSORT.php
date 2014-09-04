<?php require("../../includes/header.php"); ?><h1>Silly Sort</h1><div class="content">

<p>Your younger brother has an assignment and needs some help. His teacher gave him a sequence of numbers to be sorted in ascending order. During the sorting process, the places of two numbers can be interchanged. Each interchange has a cost, which is the sum of the two numbers involved.</p>
<p>You must write a program that determines the minimal cost to sort the sequence of numbers.</p>
<h3>Input</h3>
<p>The input file contains several test cases. Each test case consists of two lines. The first line contains a single integer n (n>1), representing the number of items to be sorted. The second line contains n different integers (each positive and less than 1000), which are the numbers to be sorted.</p>
<p>The input is terminated by a zero on a line by itself.</p>
<h3>Output</h3>
<p>For each test case, the output is a single line containing the test case number and the minimal cost of sorting the numbers in the test case. </p>
<p>Place a blank line after the output of each test case.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2 1
4
8 1 2 4
5
1 8 9 7 6
6
8 4 5 3 2 7
0

<b>Output:</b>
Case 1: 4

Case 2: 17

Case 3: 41

Case 4: 34

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>