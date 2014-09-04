<?php require("../../includes/header.php"); ?><h1>Prime Distance On Tree</h1><div class="content">
<h3>Problem description.</h3>
<p>You are given a tree. If we select 2 distinct nodes uniformly at random, what's the probability that the distance between these 2 nodes is a prime number?</p>
<h3>Input</h3>
<p>The first line contains a number <b>N</b>: the number of nodes in this tree.<br />
The following <b>N</b>-1 lines contain pairs a[i] and b[i], which means there is an edge with length 1 between a[i] and b[i].</p>
<h3>Output</h3>
<p>Output a real number denote the probability we want.<br />
You'll get accept if the difference between your answer and standard answer is no more than 10^-6.</p>
<h3>Constraints</h3>
<p><b>2</b> ≤ <b>N</b> ≤ <b>50,000</b><br /><br />
The input must be a tree.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2
2 3
3 4
4 5

<b>Output:</b>
0.5
</pre><h3>Explanation</h3>
<p>We have C(5, 2) = 10 choices, and these 5 of them have a prime distance:<br /><br />
1-3, 2-4, 3-5: 2<br /><br />
1-4, 2-5: 3<br /><br />
Note that 1 is not a prime number.<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cgy4ever">cgy4ever</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-06-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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