<?php require("../../includes/header.php"); ?><h1>Sereja and Bubble Sort</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/SEABUB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/SEABUB.pdf">Russian</a>.</h3>
<p> </p>
<p>Sereja has an array <b>A</b> that contains <b>n</b> integers, namely <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>n</sub></b>. A single action consists of performing one of two following operations:</p>
<ul>
<li>To swap two consecutive elements;</li>
<li>To make a random and uniform shuffle of all the elements of the array <b>A</b>.
</li></ul>

<p>Now Sereja's goal is to make the expected value of the function <b>f(A)</b> as minimal as possible, by doing no more than <b>k</b> actions.</p>
<p>The function <b>f(A)</b> is the minimal number of consecutive elements' swaps you need in order to sort the array <b>A</b> in the increasing order.</p>
<p>What is the expected value of <b>f(A)</b> in case Sereja uses no more than <b>k</b> actions in the optimal way?</p>
<h3>Input</h3>
<p>
The first line contains an integer <b>T</b>, denoting the number of testcases. Then, <b>T</b> testcase descriptions follow.</p>
<p>The first line of each desription contains the integers <b>n</b> and <b>k</b> from the statement, respectively. The following line contains <b>n</b> space separated integers - <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>n</sub></b>. All the values of <b>A<sub>i</sub></b> will form a permutation of the first <b>N</b> natural numbers.</p>
<h3>Output</h3>
<p>For each test case output the minimal possible expected value of <b>f(A)</b>. Your answer will be considered correct in case it differs by no more than <b>10<sup>-6</sup></b> from the official one.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>100</b></li>
<li><b>0</b> ≤ <b>k</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>n</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 1
2 1
3 1
3 2 1

<b>Output:</b>
0.0000
1.5000

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-03-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>