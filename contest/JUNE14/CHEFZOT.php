<?php require("../../includes/header.php"); ?><h1>Chef and Subarray</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/CHEFZOT1.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/CHEFZOT.pdf">Russian</a>.</h3>

<p>Chef loves research! Now he is looking for subarray of maximal length with non-zero product.</p>
<p>Chef has an array <b>A</b> with <b>N</b> elements: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>. </p>
<p>Subarray <b>A<sub>ij</sub></b> of array <b>A</b> is elements from index <b>i</b> to index <b>j</b>: <b>A<sub>i</sub></b>, <b>A<sub>i+1</sub></b>, ..., <b>A<sub>j</sub></b>. </p>
<p>Product of subarray <b>A<sub>ij</sub></b> is product of all its elements (from <b>i<sub>th</sub></b> to <b>j<sub>th</sub></b>). </p>

<h3>Input</h3>
<ul>
<li>First line contains sinlge integer <b>N</b> denoting the number of elements.</li>
<li>Second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the elements of array. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>In a single line print single integer - the maximal length of subarray with non-zero product. </li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
6
1 0 2 3 0 4

<b>Output:</b>
2

<b>Input:</b>
1
0

<b>Output:</b>
0

<b>Input:</b>
3
1 0 1

<b>Output:</b>
1
</pre><p> </p>
<h3>Explanation</h3>
<p>For the first sample subarray is: {2, 3}. </p>
<p>For the second sample there are no subbarays with non-zero product. </p>
<p>For the third sample subbarays is {1}, (the first element, or the third one). </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>18-03-2014</td>
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