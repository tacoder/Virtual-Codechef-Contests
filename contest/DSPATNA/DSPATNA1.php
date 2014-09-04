<?php require("../../includes/header.php"); ?><h1>The Modified Fibonacci Series</h1><div class="content">

<p>One of the most fundamental concepts learnt by a novice programmer is generation of Fibonacci Series. The Fibonacci Series is known to be of the form 0 1 1 2 3 5 8 13... etc. Usually a recursive approach to solve the problems is applied. The problem with the usual recursive approach is that multiple calls are made to calculate the same number, which makes it time in-efficient. This algorithm runs in time theta(n). However, if you use either a Dynamic Programming approach or Memoization Technique, we can develop an algorithm that computes the nth Fibonacci number using at most O(log n) arithmetic operations.</p>
<p>Your task is to write a program, using Dynamic Programming or Memoization or otherwise that computes the nth Fibonacci Number in  O(log n). The series need not begin from 0 1.</p>
<p>Problem Setter: <a href= " http://bit.ly/VG_MSP_Interview" >Vishal Gupta</a></p>
<h3>Input</h3>
<p>The input will contain the number of test cases 'T' an integer. The next 'T' line contain 3 unsigned integers A, B and N (in each line) where A and B are respectively the first and the second term of the Modified Fibonacci series and N is the Nth term to be calculated.</p>
<p> Limits are as follows - 0 &lt; A, B, T &lt;100 ad 0&lt; N &lt; 50. </p>
<h3>Output</h3>
<p>You have to print the Nth Fibonacci term for each test case in the new line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
7
0 1 10
2 3 5
67 101 9
23 46 35
45 37 24
45 27 1
45 46 2


<b>Output:</b>
34
13
2992
343398096
1857304
45
46

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-04-2011</td>
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