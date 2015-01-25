<?php require_once("../../includes/header.php"); ?><h1>Sereja and Votes</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/SEAVOTE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/SEAVOTE.pdf">Russian</a>.</h3>
<p>
Sereja conducted a voting about <b>N</b> of his opinions. <b>A<sub>i</sub></b> percent of people voted for opinion number <b>i</b>.<br />
This statistics is called valid if sum of all <b>A<sub>i</sub></b> is equal to <b>100</b>.
</p>
<p>
Now let us define rounding up of a statistics <b>A</b>. </p>
<ul>
<li> If <b>A<sub>i</sub></b> is not an integer, it will be rounded up to next integer. </li>
<li> Otherwise it will be left as it is. </li>
</ul>
<p>e.g. <b>4.1</b> became <b>5</b>, <b>4.9</b> became <b>5</b> but <b>6</b> will still be <b>6</b>.
</p>
<p>
Now let us consider a statistics <b>B</b> of size <b>N</b> in which each of <b>B<sub>i</sub></b> is an integer. Now he wants to know whether there exists some valid statistic <b>A</b> of size <b>N</b>  (may contain real numbers) such that after rounding it up, it becomes same as <b>B</b>?
</p>
<h3>Input</h3>
<ul>
<li>First line of input contain integer <b>T</b> - number of test cases. </li>
<li>For each test, case first line contains integer <b>N</b> - number of opinions. </li>
<li>Next line contains <b>N</b> integers <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>N</sub></b> as defined in the problem.</li>
</ul>
<h3>Output</h3>
<p>For each test case, output <b>YES</b> or <b>NO</b> denoting the answer of the problem, i.e. if there exists some statistics <b>A</b> which could be rounded to make it <b>B</b>, print <b>YES</b> otherwise <b>NO</b>. </p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
<li><b>0</b> ≤ <b>B<sub>i</sub></b> ≤ <b>1000</b></li>
</ul>
</p>
<h3>Sub tasks</h3>
<ul>
<li>Subtask #1: <b>N ≤ 100</b> (50 points)</li>
<li>Subtask #2: <b>original</b> (50 points)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3
30 30 30
4
25 25 25 25
2
50 51
<b>Output:</b>
NO
YES
YES
</pre><h3>Explanation</h3>
<p><ul>
<li>In test case 1, There can not be any <b>A</b> which could be rounded up to get <b>B</b>. Hence answer is NO.</li>
<li>In test case 2, In this case <b>A</b> = {25, 25, 25, 25}. After rounding we get {25, 25, 25, 25} which is equal to <b>B</b>. Hence answer is YES.</li>
<li> In test case 3, <b>A</b> = {49.5, 50.5}. After rounding up we get {50, 51} which is equal to <b>B</b>. Hence answer is YES.
</li></ul>
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-12-2014</td>
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