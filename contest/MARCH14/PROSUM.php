<?php require("../../includes/header.php"); ?><h1>Little Chef and Numbers</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/MARCH14/mandarin/PROSUM.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/MARCH14/russian/PROSUM.pdf" target="_blank">Russian</a>.</h3>
<p>Little chef has just been introduced to the world of numbers! While experimenting with addition and multiplication operations, the little chef came up with the following problem:</p>
<p> </p>
<p>Given an array <b>A</b> of non-negative integers, how many pairs of indices <b>i</b> and <b>j</b> exist such that <b> A[i]*A[j] &gt; A[i]+A[j] </b> where <b> i &lt; j </b>.</p>
<p>Now being a learner, little chef isn't able to solve this problem efficiently and hence turns to you for help.</p>
<h3>Input</h3>
<p>First line of input contains an integer <b>T</b> denoting the number of test cases. For each test case, the first line contains an integer <b>N</b> denoting the number of integers in the array. The next line contains <b>N</b> space separated integers where the <b>i<sup>th</sup></b> integer represents <b>A[i]</b>.</p>
<p><b> Note : There may be trailing spaces on each line of input. </b></p>
<h3>Output</h3>
<p>For each test, print the required number of pairs in a single line.</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>10</b> </li>
<li> <b>2</b> ≤ <b>N</b> ≤ <b>100000 (10<sup>5</sup>)</b> </li>
<li> <b>0</b> ≤ <b>A[i]</b> ≤ <b>1000000 (10<sup>6</sup>)</b> </li>
</ul>
<p><br /><br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
3 4 5
4
1 1 1 1

<b>Output:</b>
3
0
</pre>
<h3>Explanation</h3>
<p> </p>
<p> </p>
<p><b>Example case 1.</b><br /><br /> All pairs of numbers satisfy the criteria. Total number of pairs equals <b>3</b>.</p>
<p><b>Example case 2.</b><br /><br /> No pair of numbers satisfy the criteria.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/viv001">viv001</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/whiteking">whiteking</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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