<?php require_once("../../includes/header.php"); ?><h1>Sereja and Number Division 2</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/SEAND2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/SEAND2.pdf">Russian</a>.</h3>
<p>
Sereja has an integer number <b>A</b> that doesn't contain zeroes in its decimal form.<br />
Also he has <b>N</b> integers <b>B[1], B[2], ..., B[N]</b>.
</p>
<p>
Let us first define function <b>f</b> for a number <b>A</b> as follows. <br />
<img src="https://codechef_shared.s3.amazonaws.com/download/JAN15/SEAND2.equation.png" />.
</p>
<p>
Now he has to reorder the digits of <b>A</b> such that <b>f(A)</b> is minimum.<br />
Please help him in finding most optimal <b>A</b>.
 </p>
<h3>Input</h3>
<ul>
<li>First line contain a single integer <b>T</b> denoting number of test cases. Then <b>T</b> tests follow.  </li>
<li>First line of each test case contains an integer <b>A</b>. </li>
<li>Next line contains an integer <b>N</b>. </li>
<li>Next line contains <b>N</b> integers <b>B[1], B[2], ..., B[N]</b>.  </li>
</ul>
<h3>Output</h3>
<p>For each test case, output optimal value of <b>A</b> after reordering digits in a single line.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>A</b> ≤ <b>10<sup>1000</sup></b></li>
<li><b>N</b> = <b>100</b></li>
<li><b>1</b> ≤ <b>B[i]</b> ≤ <b>10<sup>6</sup></b></li>

<h3>Example</h3>
<pre><b>Input:</b>
2
123
2
2 3
123457
1
10

<b>Output:</b>
312
754312

</pre><h3>Scoring</h3>
<p>
Let <b>Y</b> denotes your score for the problem. <b>Y</b> is defined as sum of <b>f(optimal A))</b> for all test cases.<br />
You objective is to make <b>Y</b> as small as possible.
</p>
<h3>Tests generation Plan</h3>
<p>
Test set contains <b>five</b> official test cases.<br />
During the contest, your solution will be tested only on the first test. After the end of contest, it will be re-judged on the full test set.
</p>
<p>
Length of number <b>A</b> is generated randomly. All digits of it are also chosen randomly.
</p>
<p>
In all test cases <b>N</b> is equal to <b>100</b>.
</p>
<p>
To generate array <b>B</b>, first we chose an integer <b>R</b> between <b>1</b> and <b>10<sup>6</sup></b> inclusive. Note that <b>R</b> is<br />
not randomly generated, it will be manually selected. </p>
<p>Then all elements of array <b>B</b> are chosen in range <b>1..R</b> randomly.
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
            <td>10-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYPY, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM chicken, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>