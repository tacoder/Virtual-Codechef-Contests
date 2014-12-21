<?php require("../../includes/header.php"); ?><h1>EXPECTED VALUE</h1><div class="content">

<p>
<br />Reeti has just started learning how to code. As is the case with many programmers, one begins understanding algorithms with the help of<br />
<br />pseudocode. Reeti has just started looking at some basic algorithms such as Bubble Sort, Binary Search etc. However, being a person with<br />
<br />AOCD (Algorithmic Obsessive Compulsive Disorder), she does not rest until she has rigorously analysed the algorithm she is learning.
</p>
<p>
<br />Now, she is looking at an algorithm to find the minimum element in an array. This is the pseudocode she is dealing with :<br />
<br />1.   int N;<br />
<br />2.   input N<br />
<br />3.   int arr[1:N];<br />
<br />4.   for i=1...N:<br />
<br />5.       input arr[i]<br />
<br />6.   int min = INFINITY;<br />
<br />7.   for i=1...N:<br />
<br />8.       if(arr[i]&lt;min)<br />
<br />9.           min = arr[i];
</p>
<p>
<br />Reeti has just completed a course on Probability and Statistics, and being curious she decides to analyse the algorithm from a probabilistic<br />
<br />point of view. She decides to ensure that the array arr is a randomly picked from the set of permutations of numbers 1,N.<br />
<br />Her question is, what is the expected value of the number of reassignments to variable min i.e the number of times line 9 is executed.
</p>

<h2>Input</h2>
<p> The first line of input is the number of test cases T.<br />
<br /> The next T lines consist of a single integer N, i.e the size of the array for that test case.
</p>
<h2>Output</h2>
<p> For each test case, print the expected value of the number of reassignments to min, with exactly 3 digits after the decimal point(rounded).<br />
<br /> i.e Even if the answer is a whole number, print it as 5.000 </p>

<h2>Example</h2>
<p> <b>Input:</b></p>
<p>
<br />2<br />
<br />1<br />
<br />3<br />
<br />
</p>
<p> <b>Output:</b></p>
<p>1.000<br />
<br />1.833<br />
<br />
</p>
<h2>Explanation</h2>
<p><b>Example case 1.</b> In the first test case, there is only 1 possible array. And we get one reassignment. So expected value is 1/1 = 1.<br />
<br /> In the second test case, there are 6 possible arrays. In sorted order of arrays (descending), number of reassignments are 3,2,2,2,1,1. So expected value = 11/6 = 1.833 (3 decimal places)
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/srujanjha">srujanjha</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-10-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>