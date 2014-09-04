<?php require("../../includes/header.php"); ?><h1>Mountain Engineering</h1><div class="content">
<p> </p>
<p>A sequence in which the value of elements first increase and then decrease is called Mountain- Sequence. In a valid Mountain-Sequence there should be at least one element in the increasing and at least one element in the decreasing arm.<br />
<br /><br />
For example, "1 3 5 9 17 12" is a valid Mountain-Sequence having five elements in the increasing arm namely 1, 3, 5, 9 and 17, and 1 element in the decreasing arm namely 12 . But none of the sequence "1 4 6" or "9 8 6" are Mountain-Sequence since "1 4 6" has no element in the decreasing part while "9 8 6" has no element in the increasing part.<br />
<br /><br />
A sub-sequence of a sequence is obtained by deleting zero or more elements from the sequence. For example definition "7", "2 10", "8 2 7 6", "8 2 7 10 6" etc are valid sub-sequences of "8 2 7 10 6" </p>
<p>Given a sequence of N numbers finding its longest sub-sequence which is a Mountain-Sequence is the main problem here. The bigger problem is to find, how many such sequences exist. <br /><br />
To make it clearer, assume that the longest mountain-sequence in a given sequence is of length l. Then you have to find all subsequences which are mountain sequences of length l. Hence, you have to find NUMBER of these maximum length Mountain Sequences that can be extracted from the given sequence.
</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line contains the no of test cases(T).
</li><li>First line of each test case contains an integer  <b>N</b> , the number of element in the given sequnce.</li>
<li>
Then follows N integers A1, A2.... An,  Ai is ith element of the given sequence. These numbers will be newline separated.
</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Print the NUMBER of longest-length Mountain Sequences in the given sequence.<br />
<br /><br />
Note:- A sequence with only one element is not a mountain-Sequence and no two adjacent elements in a Mountain-Sequence are of same value. Assume that two different elements of a sequence, which have the same value, represent different entities. E.g., if a sequence contains the element 7 at two places, then you have to consider two different sub-sequences having element 7 ONLY.<br />
.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>Ai</b> ≤ <b>10000</b>
</li></ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
12
5 4 7 89 10 23 29 56 8 5 30 70

<b>Output:</b>
2
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br />
The longest Mountain Sequences have length 8. The mountain sequences in this sequence are:<br />
<br /></p>
<pre>
4 7 10 23 29 56 8 5
5 7 10 23 29 56 8 5
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gothicprakhar">gothicprakhar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-04-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>