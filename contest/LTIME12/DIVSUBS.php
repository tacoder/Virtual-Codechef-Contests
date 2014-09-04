<?php require("../../includes/header.php"); ?><h1>Divisible Subset</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/LTIME12/mandarin/DIVSUBS.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/LTIME12/russian/DIVSUBS.pdf" target="_blank">Russian</a>.</h3>
<p>You are given a multiset of <b>N</b> integers. Please find such a nonempty subset of it that the sum of the subset's elements is divisible by <b>N</b>. Otherwise, state that this subset doesn't exist.</p>
<h3>Read problems statements in <a href="/download/translated/LTIME12/mandarin/DIVSUBS.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/LTIME12/russian/DIVSUBS.pdf" target="_blank">Russian</a>.</h3>
<p>You are given a multiset of <b>N</b> integers. Please find such a nonempty subset of it that the sum of the subset's elements is divisible by <b>N</b>. Otherwise, state that this subset doesn't exist.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br /><br /> The first line of each test consists of a single integer <b>N</b> - the size of the multiset.<br /><br /> The second line of each test contains <b>N</b> single space separated integers - the multiset's elements.</p>
<h3>Output</h3>
<p>For each test case output:</p>
<ul>
<li><b>-1</b> if the required subset doesn't exist</li>
<li>If the required subset exists, output two lines. Output the size of the subset on the first line and output the list of indices of the multiset's element that form the required subset. Of course, any number can be taken in the subset no more than once.</li>
</ul>
<p>If there are several such subsets, you can output any.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li>1 &lt;= The sum of <b>N</b> over all the test cases &lt;= 10<sup>5</sup></li>
<li>Each element of the multiset is a positive integer, not exceeding 10<sup>9</sup>.</li>
<li>1 &lt;= <b>N</b> &lt;= 15 : 37 points. </li>
<li>1 &lt;= <b>N</b> &lt;= 1000 : 24 points.</li>
<li>1 &lt;= <b>N</b> &lt;= 10<sup>5</sup> : 39 points. </li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
4 6 10

<b>Output:</b>
1
2

</pre>
<h3>Explanation</h3>
<p>We can pick {6} as the subset, then its sum is 6 and this is divisible by 3 - the size of the initial multiset.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-04-2014</td>
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