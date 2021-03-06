<?php require("../../includes/header.php"); ?><h1>Chef and Swaps</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/CHEFINV.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/CHEFINV.pdf">Russian</a>.</h3>
<p> </p>
<p>This time, Chef has given you an array <b>A</b> containing <b>N</b> elements.</p>
<p>He had also asked you to answer <b>M</b> of his questions. Each question sounds like: "How many inversions will the array <b>A</b> contain, if we swap the elements at the <b>i</b>-th and the <b>j</b>-th positions?". </p>
<p>The inversion is such a pair of integers (<b>i</b>, <b>j</b>) that <b>i &lt; j</b> and <b>A<sub>i</sub> &gt; A<sub>j</sub></b>. </p>
<p> </p>
<h3>Input</h3>
<p>The first line contains two integers <b>N</b> and <b>M</b> - the number of integers in the array <b>A</b> and the number of questions respectively. </p>
<p>The second line contains <b>N</b> space-separated integers - <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>, respectively. </p>
<p>Each of next <b>M</b> lines describes a question by two integers <b>i</b> and <b>j</b> - the 1-based indices of the numbers we'd like to swap in this question. 

</p><p> </p>
<h3>Output</h3>
<p>Output <b>M</b> lines. Output the answer to the <b>i</b>-th question of the <b>i</b>-th line.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>2 * 10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>i, j</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>Mind that we don't actually swap the elements, we only answer "what if" questions, so the array doesn't change after the question.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6 3
1 4 3 3 2 5
1 1
1 3
2 5

<b>Output:</b>
5
6
0

</pre><p> </p>
<h3>Explanation</h3>
<p>Inversions for the first case: <b>(2, 3), (2, 4), (2, 5), (3, 5), (4, 5)</b>. </p>
<p>Inversions for the second case: <b>(1, 3), (1, 5), (2, 3), (2, 4), (2,5), (4, 5)</b>. </p>
<p>In the third case the array looks like <b>1 2 3 3 4 5</b> and there are no inversions. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>24-03-2014</td>
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