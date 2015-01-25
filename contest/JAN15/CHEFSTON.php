<?php require_once("../../includes/header.php"); ?><h1>Chef and Stones</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/CHEFSTON.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/CHEFSTON.pdf">Russian</a>.</h3>
<p>Chef is playing a game. Currently in the game, he is at a field full of stones. There are total <b>N</b> kinds of<br />
stones. There is unlimited supply of each kind of stone.
</p>
<p>Chef knows that one stone of kind <b>i</b> needs <b>A<sub>i</sub></b> minutes to pick it from the ground and it will give Chef a profit of<br />
<b>B<sub>i</sub></b> Rs. </p>
<p>Chef has <b>K</b> minutes of free time. During this free time, Chef want to pick stones so as to maximize his profit.<br />
But he can not pick stones of different kinds, he has to pick stones of a single kind.</p>
<p>Please help Chef to find the maximal possible profit. </p>
<h3>Input</h3>
<ul>
<li>First line contains single integer <b>T</b> denoting the number of test cases. </li>
<li>First line of each test case contains two integers <b>N</b> and <b>K</b>. </li>
<li>Next line contains <b>N</b> integers <b>A<sub>i</sub></b> denoting the time needed to pick one stone of kind <b>i</b>. </li>
<li>Next line contains <b>N</b> integers <b>B<sub>i</sub></b> denoting the profit due to picking <b>i</b><sup>th</sup>th stone. </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, print a single line containing maximal possible profit. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10<sup>9</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask <b>N</b> ≤ <b>5</b>, <b>T</b> ≤ <b>2</b> Points: 30 </li>
<li>Subtask <b>N</b> ≤ <b>10<sup>5</sup></b>, <b>T</b> ≤ <b>5</b> Points: 70 </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
1
3 10
3 4 5
4 4 5

<b>Output:</b>
12
</pre><h3>Explanation</h3>
<p>
If Chef picks stones of first kind he can pick <b>3</b> stones, he will get a profit of <b>3*4 = 12</b> Rs. <br />
If Chef picks stones of second kind he can pick <b>2</b> stones, he will get a profit of <b>2*4 = 8</b> Rs. <br />
If Chef picks stones of third kind he can pick <b>2</b> stones, he will get a profit of <b>2*5 = 10</b> Rs.
</p>
<p>
So the maximum possible profit is 12.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-11-2014</td>
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