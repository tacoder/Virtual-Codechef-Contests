<?php require("../../includes/header.php"); ?><h1>And Operation</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME14/mandarin/TAAND1.pdf">Mandarin Chinese </a>.</h3>
<p> </p>
<p>Given an array of <b>n</b> non-negative integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, …, <b>A<sub>N</sub></b>. Your mission is finding a pair of integers <b>A<sub>u</sub></b>, <b>A<sub>v</sub></b> (1 ≤ <b> u</b> &lt; <b>v</b> ≤ <b>N</b>) such that (<b>A<sub>u</sub></b> and <b>A<sub>v</sub></b>) is as large as possible.<br />
<b>And</b> is a bit-wise operation which is corresponding to <b>&amp;</b> in C++ and Java.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b>. The <b>i</b>th line in the next <b>N</b> lines contains the <b>A<sub>i</sub></b>.</p>
<p> </p>
<h3>Output</h3>
<p>Contains a single integer which is the largest value of <b>A<sub>u</sub></b> and <b>A<sub>v</sub></b> where 1 ≤ <b> u</b> &lt; <b>v</b> ≤ <b>N</b>.</p>
<p> </p>
<h3>Constraints</h3>
<p>50 points:</p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>5000</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p>50 points:</p>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>3 × 10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
2
4
8
10

<b>Output:</b>
8

</pre><p> </p>
<h3>Explanation</h3>
<ul>
<li>2 and 4 = 0</li>
<li>2 and 8 = 0</li>
<li>2 and 10 = 2</li>
<li>4 and 8 = 0</li>
<li>4 and 10 = 0</li>
<li>8 and 10 = 8</li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-07-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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