<?php require("../../includes/header.php"); ?><h1>Chef and Strange Matrix</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/CHEFBM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/CHEFBM.pdf">Russian</a>.</h3>
<p>Spring is interesting season of year. Chef is thinking about different things, but last time he thinks about interesting game - "Strange Matrix". </p>
<p>Chef has a matrix that consists of <b>n</b> rows, each contains <b>m</b> elements. Initially, the element <b>a<sub>i</sub><sub>j</sub></b> of matrix equals <b>j</b>. <b>(1 ≤ i ≤ n, 1 ≤ j ≤ m)</b>. </p>
<p>Then <b>p</b> times some element <b>a<sub>i</sub><sub>j</sub></b> is increased by <b>1</b>. </p>
<p>Then Chef needs to calculate the following: </p>
<ul>
<li>For each row he tries to move from the last element (with number <b>m</b>) to the first one (with the number <b>1</b>). </li>
<li>While staying in <b>a<sub>i</sub><sub>j</sub></b> Chef can only move to <b>a<sub>i</sub><sub>j - 1</sub></b> only if <b>a<sub>i</sub><sub>j - 1</sub> ≤ <b>a<sub>i</sub><sub>j</sub></b></b>. </li>
<li>The cost of such a movement is <b>a<sub>i</sub><sub>j</sub></b> - <b>a<sub>i</sub><sub>j - 1</sub></b>.</li>
<li>Otherwise Chef can't move and lose (in this row).</li>
<li>If Chef can move from the last element of the row to the first one, then the answer is the total cost of all the movements. </li>
<li>If Chef can't move from the last element of the row to the first one, then the answer is <b>-1</b>. </li>
</ul>

<p> Help Chef to find answers for all the rows after <b>P</b> commands of increasing. </p>
<h3>Input</h3>
<p>
<ul>
<li>The first line contains three integers <b>n</b>, <b>m</b> and <b>p</b> denoting the number of rows, the number of elements a single row and the number of increasing commands. </li>
<li>Each of next <b>p</b> lines contains two integers <b>i</b> and <b>j</b> denoting that the element <b>a<sub>i</sub><sub>j </sub></b> is increased by one. </li>
</ul>
</p>
<h3>Output</h3>
<ul>
<li>For each row in a single line print the answer after the <b>P</b> increasing commands.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n, m, p</b> ≤ <b>10 ^ 5</b></li>
<li><b>1</b> ≤ <b>i</b> ≤ <b>n</b></li>
<li><b>1</b> ≤ <b>j</b> ≤ <b>m</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 4 6
2 2
3 2 
3 2 
4 3
4 4
4 3

<b>Output:</b>
3
3
-1
4

</pre><p> </p>
<h3>Explanation</h3>
<pre>
<p>Here is the whole matrix after <b>P</b> commands:</p>
1 2 3 4
1 3 3 4
1 4 3 4
1 2 5 5
<p> Explanations to the answer: </p>
<ul>
<li>The first line is without changes: 4-3=1, 3-2=1, 2-1=1. answer = 3. </li>
<li>The second line: 4-3=1, 3-3=0, 3-1=2. The answer is 3. </li>
<li>The third line: 4-3=1, 3-4=-1, Chef can't move to the first number here. Therefore, the answer is -1. </li>
<li>The fourth line: 5-5=0, 5-2=3, 2-1=1. The answer is 4. </li>
</ul>

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
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