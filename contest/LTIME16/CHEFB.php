<?php require("../../includes/header.php"); ?><h1>Chef and easy problem 2</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/russian/CHEFB.pdf">Russian</a>.</h3>

<p>
Roma gave Chef an array of intergers.<br />
Chef wants to make all integers in the array equal to 1.<br />
In a single operation, he can select a prime number <b>p</b> and a subset of the integers, and then divide all of the integers in the subset by <b>p</b>.<br />
Chef can make this operation only if every integer in the selected subset is divisible by <b>p</b>.
</p>
<p>
Please help Chef to make all the integers in the array equal to 1 with minimum number of operations.</p>

<h3>Input</h3>
<p>The first line of input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the length of the array that Roma gave Chef.</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the integers in the array.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing one integer - the minimum number of operations needed to make all numbers equal to 1.</p>

<h3>Constraints</h3>
<ul>
<li>Subtask 1 (10 points): <b>T</b> = 5, 1 ≤ <b>N</b> ≤ 10<sup>5</sup>, 1 ≤ <b>A<sub>i</sub></b> ≤ 3</li>
<li>Subtask 2 (40 points): <b>T</b> = 3, 1 ≤ <b>N</b> ≤ 10, 1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>6</sup></li>
<li>Subtask 3 (50 points): <b>T</b> = 3, 1 ≤ <b>N</b> ≤ 10<sup>5</sup>, 1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3
1 2 4

<b>Output:</b>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>