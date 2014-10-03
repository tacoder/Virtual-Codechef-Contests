<?php require("../../includes/header.php"); ?><h1>Subarray GCD</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/english/SUBGCD.pdf">English</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/mandarin/SUBGCD.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/russian/SUBGCD.pdf">Russian</a> as well.</h3>
<p>Given an array <b>A<sub>1</sub>,A<sub>2</sub>...A<sub>N</sub></b>, you have to print the size of the largest contiguous subarray such that<br />
<a href="http://en.wikipedia.org/wiki/Greatest_common_divisor">GCD</a> of all integers in that subarray is <b>1</b>.<br /><br />
Formally,<br /> For a subarray <b>A<sub>i</sub>,A<sub>i+1</sub>...A<sub>j</sub></b> where <b>1 ≤ i &lt; j ≤ N</b> to be valid: <b>GCD(A<sub>i</sub>,A<sub>i+1</sub>...A<sub>j</sub>)</b> should be <b>1</b>. You have to print the size of the largest valid subarray.</p>
<p>If no valid subarray exists, output <b>-1</b>.</p>
<p><b>Note:</b>A single element is not considered as a subarray according to the definition of this problem.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of testcases. Each testcase consists of <b>N</b> in one line followed by <b>N</b> integers in the next line.</p>
<h3>Output</h3>
<p>For each testcase, print the required answer in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
7 2
3
2 2 4

<b>Output:</b>
2
-1
</pre><h3>Explanation</h3>
<p>
<b>Example case 1.</b>GCD(2,7)=1. So the subarray <b>[A<sub>1</sub>,A<sub>2</sub>]</b> is valid.<br /><br />
<b>Example case 2.</b>No subarray satisfies.<br />
</p>
<p><b>Note: Use scanf/print instead of cin/cout. Large input files.</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-06-2014</td>
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