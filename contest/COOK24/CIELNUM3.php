<?php require("../../includes/header.php"); ?><h1>Ciel Numbers III</h1><div class="content">

<p>
Tomya is a girl. She loves Chef Ciel very much.
</p>
<p>
Tomya also loves <i>Ciel numbers</i>.<br />
The definition of Ciel numbers are following.
</p>
<p>
Ciel numbers are defined as the positive integers <b>k</b><br />
such that <b>d</b>(<b>k</b>, 8) ≥ <b>d</b>(<b>k</b>, 5) ≥ <b>d</b>(<b>k</b>, 3) and <b>d</b>(<b>k</b>, <b>i</b>) = 0 for all <b>i</b> = 0, 1, 2, 4, 6, 7, 9,<br />
where <b>d</b>(<b>k</b>, <b>i</b>) denotes the number of the digit <b>i</b> in the decimal representation of the integer <b>k</b>.<br />
For example, the first few Ciel numbers are 8, 58, 85, 88, 358, 385, 538, 583, 588, 835, 853, 858, 885, 888, ....
</p>
<p>
Now Tomya defines the <i><b>x</b>-pseudo Ciel numbers</i> as follows for non-negative integers <b>x</b>:
</p>
<ul>
<li>
A positive integer <b>k</b> is a 0-pseudo Ciel numbers if and only if <b>k</b> is a Ciel number.
</li>
<li>
For <b>x</b> ≥ 1, a positive integer <b>k</b> is a <b>x</b>-pseudo Ciel numbers if and only if<br />
<b>k</b> is not a <b>y</b>-pseudo Ciel number for all 0 ≤ <b>y</b> &lt; <b>x</b><br />
and, there exists a (<b>x</b>-1)-pseudo Ciel number <b>s</b> such that <b>s</b> have the same number of digits as <b>k</b><br />
and exactly one digit differ from <b>k</b> in their decimal notations.
</li>
</ul>
<p>
For example,<br />
583, 58588, 355388, and 5358388 are 0-pseudo Ciel numbers, and<br />
523, 58558, 355308, and 5354388 are 1-pseudo Ciel numbers, and<br />
123, 55558, 353308, and 5314388 are 2-pseudo Ciel numbers, and<br />
124, 55555, 333308, and 1314388 are 3-pseudo Ciel numbers.
</p>
<p>
In this problem, your task is to find the largest <b>x</b>-pseudo Ciel number less than or equal to <b>N</b>.
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
Each test case contains 2 integers <b>x</b> and <b>N</b> in one line.
</p>
<h3>Output</h3>
<p>
For each test case, print the largest <b>x</b>-pseudo Ciel number less than or equal to <b>N</b>.<br />
If there are no such numbers, print "-1" (excluding quotes).
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 10000 (10<sup>4</sup>)<br />
0 ≤ <b>x</b> ≤ 1000000000 (10<sup>9</sup>)<br />
1 ≤ <b>N</b> &lt; 10<sup>100000</sup><br />
The sum of the length of <b>N</b> in one judge input file does not exceed 1000000 (10<sup>6</sup>).
</p>
<h3>Sample Input</h3>
<pre>5
0 58600
2 128
1 5354389
1 1
2 1</pre><h3>Sample Output</h3>
<pre>58588
128
5354388
1
-1</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-07-2012</td>
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