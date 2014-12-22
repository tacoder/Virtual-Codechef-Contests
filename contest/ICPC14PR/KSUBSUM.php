<?php require("../../includes/header.php"); ?><h1>Makx Sum</h1><div class="content">

<p align="justify">
Did you know that the Hindus believe there are 330 million deities ? Lets discuss about them in long contests. The three main forces of god Brahma, Vishnu and Mahesh, also called Trimurti ( 3 forms ), want to decide when to end the world. Given an array A, which contains the 'Good' ( or 'Evil' ) score of each place on earth, they can easily find the maximum sum of the scores of a (contiguous) sub-array of places. But this is not much useful to them. So, <i>each</i> of them gives a value K and want to know the Kth maximum sum of scores of a contiguous sub-array. In other words, find the value of S[K] (1-based index), where the array S contains the sums of all possible contiguous sub-arrays in non-increasing order.</p>
<h3>Input</h3>

<p align="justify">
First line contains T, number of test cases. T cases follow. In each test case, first line contains N K1 K2 K3. Next line contains N space separated integers.<br />
</p>
<h3>Output</h3>

<p align="justify">
For each test case, output the K1<sup>th</sup>, K2<sup>th</sup> and K3<sup>th</sup> maximum sum in a single line, separated by a single space. See sample cases and explanation for more clarity.</p>
<h3>Constraints</h3>

<p align="justify">
1 ≤ T ≤ 3<br />
2 ≤ N ≤ 10000<br />
1 ≤ K1 &lt; K2 &lt; K3 ≤ 2012<br />
K3 ≤ N*(N+1)/2<br />
-10000 ≤ A[i] ≤ 10000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3 1 2 3
10 20 30
3 3 4 6
10 20 30
4 2 6 10
20 -15 10 -15

<b>Output:</b>
60 50 30
30 30 10
15 -5 -20
</pre><p>
<b>Explanation:</b><br />
Case 1 &amp; 2 : A = { 10, 20, 30 }. All possible sums of sub-arrays in non-increasing order, S[1..6] = { 60, 50, 30, 30, 20, 10 }</p>
<p>
<i><b>Warning : </b>"Large input / output. Be careful with certain languages. Eg: Prefer using scanf/printf to cin/cout for C++"</i></p>
<p><i><b>Note : </b>There are multiple test sets, and the judge shows the sum of the time taken over all test sets of your submission, if Accepted.</i></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro  ">masked_zorro  </a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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