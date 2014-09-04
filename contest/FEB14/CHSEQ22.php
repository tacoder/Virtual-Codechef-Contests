<?php require("../../includes/header.php"); ?><h1>Chef and Favourite Sequence</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/FEB14/mandarin/CHSEQ22.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/FEB14/russian/CHSEQ22.pdf" target="_blank">Russian</a>.</h3>
<p>Chef has an integer sequence <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b> of size <b>N</b>, where all the elements of the sequence are <b>0</b> initially. Chef also has <b>M</b> segments, here the <b>i</b><sup>th</sup> one is <b>[L<sub>i</sub>, R<sub>i</sub>]</b>. He wants to create new sequences using the following operation:</p>
<ul>
<li>In a single operation, he picks a segment from the <b>M</b> segments. Let the chosen segment be <b>[s, t]</b>.</li>
<li>Then <i>flip</i> the all elements from <b>s</b><sup>th</sup> to <b>t</b><sup>th</sup> elements, namely, <b>a<sub>i</sub></b> is changed to <b>1 − a<sub>i</sub></b> for all <b>s ≤ i ≤ t</b>.</li>
</ul>
<p>Chef can perform the operation as many times as Chef likes. Chef wants to know how many different sequences Chef can make. Since the answer can be very large, please print it modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Input</h3>
<p>The first line contains two space-separated integers <b>N</b> and <b>M</b>, denoting the size of the sequence and the number of the segments respectively. Then the <b>i</b><sup>th</sup> line of the next <b>M</b> lines contains two space-separated integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b>, denoting the <b>i</b><sup>th</sup> segments.</p>
<h3>Output</h3>
<p>Print a single line containing one integer, denoting the number of the sequences which can be created by Chef, modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ N, M ≤ 100000 (10<sup>5</sup>)</b></li>
<li><b>1 ≤ L<sub>i</sub> ≤ R<sub>i</sub> ≤ N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3 3
1 1
2 2
3 3

<b>Output:</b>
8
</pre>
<h3>Explanation</h3>
<p>In the example case, all the sequences <b>(0,0,0)</b>, <b>(0,0,1)</b>, <b>(0,1,0)</b>, <b>(1,0,0)</b>, <b>(0,1,1)</b>, <b>(1,0,1)</b>, <b>(1,1,0)</b>, <b>(1,1,1)</b> can be created by Chef.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-11-2013</td>
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