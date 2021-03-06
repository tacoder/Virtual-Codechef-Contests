<?php require("../../includes/header.php"); ?><h1>Just Some Permutations 3</h1><div class="content">

<p>Given two integers <b>N</b> and <b>M</b>, find how many permutations of <b>1, 2, ..., N</b> (first <b>N</b> natural numbers) are there where the sum of <b>every two adjacent</b> numbers is at most <b>M</b>.</p>
<h3>Input</h3>
<p>First line of the input contains an integer <b>T</b> which is the number of test cases. Each of the following <b>T</b> lines contain two integers <b>N</b> and <b>M</b>.</p>
<h3>Output</h3>
<p>For each test case output a single one line containing number of such permutations modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100000(10<sup>5</sup>)</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000000(10<sup>6</sup>)</b></li>
<li><b>N</b> &lt; <b>M</b> &lt; <b>2*N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 5
5 8
<b>Output:</b>
4
72
</pre><h3>Explanation</h3>
<p>For the 1st case all permutations are:  {2,3,1,4},    {3,2,1,4}, {4,1,2,3}  and {4,1,3,2}.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-03-2013</td>
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