<?php require("../../includes/header.php"); ?><h1>Play with Exponents</h1><div class="content">
<p> </p>
<p>Samuel has n boxes of blue balls to dispatch to his clients. Each of the boxes is numbered from 1 to n, such that the number of blue balls in each box - a(i) is such that a(1), a(2) … a(n) are sorted in non-decreasing order.</p>
<p>In a complex encoding of his records that Samuel follows, he writes integers 2<sup>a(1)</sup>, 2<sup>a(2)</sup>, 2<sup>a(3)</sup> ….. 2<sup>a(n)</sup> on paper. Now in order to represent this set of boxes, he requires to find the minimum number of integers of the type 2<sup>m</sup> (m is non-negative) that must be written on his piece of paper (as described earlier) such that the sum total of all integers present on the paper equals (2<sup>k</sup> - 1) for some integer k (k is non-negative)</p>
<p><br /></p>
<h3>Input</h3>
<p>The input consists of an integer n in first line. The second input line contains n space-separated integers a(1), a(2), ..., a(n).<br />
<br /></p>
<h3>Output</h3>
<p>Consists of a single integer - required answer.
</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ n ≤ 10<sup>5</sup> <br />
0 ≤ a(i) ≤ 2.10<sup>9</sup> <br />
a(1) ≤ a(2) ≤ a(3) ....... ≤ a(n)</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
0 1 2
<b>Output:</b>
0
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2013</td>
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