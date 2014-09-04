<?php require("../../includes/header.php"); ?><h1>Counting Matrices</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/CNPIIM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/CNPIIM.pdf">Russian</a>.</h3>
<p> </p>
<p>Lira loves Linear Algebra and she is especially keen about matrix :).</p>
<p>Today, she learnt some properties about matrices, namely, she learnt about what the trace of a matrix is, as her teacher gave her many exercises for her to practice.</p>
<p>As we know she is pretty clever, she rapidly came up with some definitions of her own and devised a somewhat harder version of the problem initially proposed by her teacher.
</p><p>Namely, she defines a <b>Positive Invertible Integer Matrix</b> as being an invertible 2x2 matrix composed only of positive (i.e. greater than 0) integer elements and whose determinant is greater than 0.</p>
<p>Now, she is interested in counting how many such matrices are there, such that their trace is equal to <b>N</b> .</p>
<p>It's your turn to solve Lira's problem :D</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. <br /><br />
Each test case consist of single integer <b>N</b>, the trace of the matrix.
</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the number of <b>Positive Invertible Integer Matrices</b> such that their trace is equal to <b>N</b> and determinant is positive.</p>
<p>Read here for additional info:</p>
<p><a href="http://en.wikipedia.org/wiki/Trace_(linear_algebra)">http://en.wikipedia.org/wiki/Trace_(linear_algebra)</a></p>
<p><a href="http://en.wikipedia.org/wiki/Determinant">http://en.wikipedia.org/wiki/Determinant</a> </p>
<h3>Constraints:</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>2500</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3

<b>Output:</b>
2	
</pre><h3>Explanation</h3>
<p>The only two matrices that exist with trace equal to 3 and that satisfy all the given conditions are:</p>
<p><img src="http://s27.postimg.org/d9sfm7ndb/mats.gif" alt="Matrices" width="91" height="42" /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuruma">kuruma</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-12-2013</td>
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