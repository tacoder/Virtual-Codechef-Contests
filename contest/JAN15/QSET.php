<?php require_once("../../includes/header.php"); ?><h1>Queries on the String</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/QSET.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/QSET.pdf">Russian</a>.</h3>
<p>You have a string of <b>N</b> decimal digits, denoted by numbers <b>A<sub>1</sub>,A<sub>2</sub>, ..., A<sub>N</sub></b>.
</p>
<p>Now you are given <b>M</b> queries, each of whom is of following two types.<br /></p>
<ul>
<li>Type 1: <b>1 X Y</b>: Replace <b>A<sub>X</sub></b> by <b>Y</b>.</li>
<li>Type 2: <b>2 C D</b>: Print the number of sub-strings divisible by 3 of the string denoted by <b>A<sub>C</sub>,A<sub>C+1</sub> ...<br />
A<sub>D</sub></b>.<br />
<br /><br />
Formally, you have to print the number of pairs <b>(i,j)</b> such that the string <b>A<sub>i</sub>,A<sub>i+1</sub>...A<sub>j</sub></b>,<br />
<b>(C ≤ i ≤ j ≤ D)</b>, when considered as a decimal number, is divisible by 3.
</li>
</ul>

<h3>Input</h3>
<ul>
<li>There is only one test case.</li>
<li>First line of input contains two space separated integers <b>N, M</b>.</li>
<li>Next line contains a string of <b>N</b> digits, denoting string <b>A</b>.</li>
<li>For next <b>M</b> lines, each line contains a query.</li>
<li>Each query is given by three space separated integers.</li>
<li>The first integer denotes type of the query. For each query of type 1, next two integers denote <b>X<sub>i</sub>, Y<sub>i</sub></b>.<br />
For each query of type 2, next two integers denote <b>C<sub>i</sub>, D<sub>i</sub></b>.
</li>
</ul>
<h3>Output</h3>
<p>For each query of type 2, print the required answer in a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>0 ≤ A<sub>i</sub> ≤ 9</b></li>
<li><b>1</b> ≤ <b>X<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>0</b> ≤ <b>Y<sub>i</sub></b> ≤ <b>9</b></li>
<li><b>1</b> ≤ <b>C<sub>i</sub></b> ≤ <b>D<sub>i</sub></b> ≤ <b>N</b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (10 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>3</sup></b> and only type 2 queries.</li>
<li>Subtask #2 (15 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>3</sup></b></li>
<li>Subtask #3 (20 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b> and only type 2 queries</li>
<li>Subtask #4 (55 points): <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 3
01245
2 1 3
1 4 5
2 3 5

<b>Output:</b>
3
1
</pre><h3>Explanation</h3>
<p>
For first query, the sub-strings S[1,1]="0", S[1,3]="012" and S[2,3]="12" are divisible by 3.<br />
After second query, the string A becomes "01255".<br />
For third query, only sub-string S[3,5]="255" is divisible by 3.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-05-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYPY, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM chicken, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>