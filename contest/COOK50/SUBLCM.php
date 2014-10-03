<?php require("../../includes/header.php"); ?><h1>Subarray LCM</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/english/SUBLCM.pdf">English</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/mandarin/SUBLCM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/russian/SUBLCM.pdf">Russian</a> as well.</h3>
<p>Given an array <b>A<sub>1</sub>,A<sub>2</sub>...A<sub>N</sub></b>, you have to print the size of the largest contiguous subarray such that<br />
<a href="http://en.wikipedia.org/wiki/Least_common_multiple">LCM</a> of all integers in that subarray is equal to the product of all integers in that subarray.<br /><br />
Formally,<br /> For a subarray <b>A<sub>i</sub>,A<sub>i+1</sub>...A<sub>j</sub></b> where <b>1 ≤ i &lt; j ≤ N</b> to be valid: <b>LCM(A<sub>i</sub>,A<sub>i+1</sub>...A<sub>j</sub>)</b> should be equal to <b>A<sub>i</sub>*A<sub>i+1</sub>*...*A<sub>j</sub></b>. You have to print the size of the largest valid subarray.</p>
<p>If no subarray satisfies output <b>-1</b>.</p>
<p><b>Note:</b>A single element is not considered a subarray according to definition in this problem.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of testcases. Each testcase consists of <b>N</b> in one line followed by <b>N</b> integers in next line.</p>
<h3>Output</h3>
<p>For each testcase, print the required answer in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
7 2
4
2 2 3 4
3
2 2 4

<b>Output:</b>
2
2
-1
</pre><h3>Explanation</h3>
<p>
<b>Example case 1.</b>LCM(2,7)=2*7. Therefore, subarray A<sub>1</sub> to A<sub>2</sub> satisfies.<br /><br />
<b>Example case 2.</b>The subarrays A<sub>2</sub> to A<sub>3</sub> and A<sub>3</sub> to A<sub>4</sub> are the maximum size possible.<br /><br />
<b>Example case 3.</b>No subarray will satisfy.<br />
</p>
<p><b>Warning: Use fast input/output. Large input files. Solutions may not pass in slower languages.</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-06-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2.5 sec</td>
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