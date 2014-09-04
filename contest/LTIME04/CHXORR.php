<?php require("../../includes/header.php"); ?><h1>Chef and Pie</h1><div class="content">
<p>Chef loves to cook pies. But more than that, he loves to play with numbers. And this task is one of his favorites. The goal is very simple: you need to select <b>3</b> numbers from an array of <b>N</b> numbers, such that their <b>XOR</b> will be maximal.</p>
<p><b>XOR</b> - exclusive or (<b>xor</b> - in Pascal, <b>^</b> - in C++) </p>
<p> </p>
<h3>Input</h3>
<p> The first line of input contains an integer <b>T</b> denoting the number of test cases. The first line of each test case contains a positive integer <b>N</b> denoting the number of integers in the given array. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> containing the elements of the array. </p>
<h3>Output</h3>
<p> For each test case, output a single line containing the  maximal <b>XOR</b> of <b>3</b> chosen numbers in the array. Note, that you have to choose exactly <b>3</b> numbers.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3</b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>2000</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 3
3
2 2 3

<b>Output:</b>
0
3
</pre><p> </p>
<h3>Scoring</h3>
<p>Subtask 1 (15 points): <b>3 ≤ N ≤ 100</b> <br /><br />
Subtask 2 (10 points): <b>1 ≤ A<sub>i</sub> ≤ 50</b>   <br /><br />
Subtask 3 (75 points):  Look at constraints.   <br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/balajiganapath">balajiganapath</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1.5 sec</td>
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