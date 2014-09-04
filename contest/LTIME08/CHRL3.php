<?php require("../../includes/header.php"); ?><h1>Chef and Numbers</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME08/russian/CHRL3.pdf">Russian</a> also.</h3>
<p>Chef plays with the sequence of <b>N</b> numbers. During a single move Chef is able to choose a non-decreasing subsequence of the sequence and to remove it from the sequence. Help him to remove all the numbers in the minimal number of moves. </p>
<h3>Input</h3>
<p>The first line of each test case contains a single <b>N</b> denoting the number of integers in the given sequence. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given sequence</p>
<h3>Output</h3>
<p>Output a single line containing the minimal number of moves required to remove all the numbers from the sequence.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000.</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>100000.</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3 
1 2 3

<b>Output:</b>
1

</pre><pre><b>Input:</b>
4
4 1 2 3

<b>Output:</b>
2

</pre><h3>Scoring</h3>
<p>Subtask 1 (10 points):  <b> N = 10  </b> <br /><br />
Subtask 2 (40 points):  <b> N = 2000  </b> <br /><br />
Subtask 2 (50 points):  <b> N = 100000  </b> <br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-01-2014</td>
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