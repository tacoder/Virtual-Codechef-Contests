<?php require("../../includes/header.php"); ?><h1>Simple Editor</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME14/mandarin/TAEDITOR.pdf">Mandarin Chinese </a>.</h3>
<p> </p>
<p>In this problem you will have to implement a simple editor. The editor maintains the content of a string <b>S</b> and have two following functions:<br />
<br /><br />
"<b>+ i x</b>": insert a string <b>x</b> into the current string <b>S</b> after the <b>i</b>'th character of the <b>S</b> (we use 1-indexing in this problem). When <b>i</b> equals to <b>0</b> it mean we add <b>x</b> at the beginning of <b>S</b>.<br /><br />
"<b>? i len</b>": Print the sub-string of length <b>len</b> starting at position <b>i</b>'th of <b>S</b>.<br />
<br /><br />
At the beginning, the editor holds an empty string. There will be <b>Q</b> queries of the two types described above.</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains the integer <b>Q</b>.<br />
Each line in the next <b>Q</b> lines contains one query.
</p>
<p> </p>
<h3>Output</h3>
<p>For each query of the second type, print out the answer sub-string in one line.
</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li>For the first type of query: 0 ≤ <b>i</b> ≤ |<b>S</b>|</li>
<li>For the second type of query: 1 ≤ <b>i</b> ≤ |<b>S</b>| - <b>len</b> + 1 </li>
</ul>

<p>20 points</p>
<ul>
<li><b>Q</b> ≤ 1000, |<b>S</b>| ≤ 1000, sum of value of all <b>len</b>s ≤ 1000: </li>
</ul>

<p>30 points</p>
<ul>
<li><b>Q</b> ≤ 10000, |<b>S</b>| ≤ 10000, sum of value of all <b>len</b>s ≤ 10000: </li>
</ul>

<p>50 points</p>
<ul>
<li><b>Q</b> ≤ 3×10<sup>5</sup>, |<b>S</b>| ≤ 3×10<sup>5</sup>, sum of value of all <b>len</b>s ≤ 3×10<sup>5</sup>: </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5
+ 0 ab
+ 1 c
? 1 3
+ 2 dd
? 1 5

<b>Output:</b>
acb
acddb
</pre><p> </p>
<h3>Explanation</h3>
<ul>
<li>"+ 0 ab": S = "ab"</li>
<li>"+ 1 c": S = "acb"</li>
<li>"+ 2 dd": S = "acddb"</li>
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