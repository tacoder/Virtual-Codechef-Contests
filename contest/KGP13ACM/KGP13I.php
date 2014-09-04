<?php require("../../includes/header.php"); ?><h1>Sequence Alignment</h1><div class="content">
<p>Consider two sequences <b>A</b> and<b> B</b> comprising of digits 0 to 9, of length <b>K</b> and <b>L</b> respectively. The distance from <b>A</b> to <b>B</b> is the total minimum penalty incurred in converting <b>A</b> to <b>B</b> using the following operations, each of which incurs a penalty as described below.</p>
<ol start="1" type="1">
<li>Replacing a digit of <b>A</b> with another digit: incurs a penalty of 1</li>
<li>Inserting a digit in <b>A</b>: incurs a penalty of 1 for each digit inserted. In addition, there is also a fixed penalty of <b>x</b> for every sequence of digits inserted (one-time penalty for starting the sequence, not per-digit). However, the total penalty charged for a sequence of digits inserted never exceeds <b>y</b> (<b>y</b> &gt; <b>x</b>). For example, if <b>x</b> = 2 and <b>y</b> = 5, then inserting a one digit sequence (say “5”) will incur a penalty of 3 (=<b>x</b>+1), a 2-digit sequence (say “24”) will incur a penalty of 4 (=<b>x</b>+2), and inserting any n-digit sequence (n &gt; 2) (say “132”, 2543”, “57241” etc.) will all incur a penalty of 5 (=<b>y</b>).</li>
<li>Deleting a digit from A: incurs a penalty of 1 for each digit deleted. In addition, there is also a fixed penalty of <b>x</b> for every sequence of digits deleted (one-time penalty for starting the sequence, not per-digit).</li>
</ol>
<p>What is the minimum penalty with which <b>A</b> can be converted to <b>B</b>?</p>
<h3>Input</h3>
<p>The first line contains the number of tests cases <b>N</b></p>
<p>For each test case, the first line contains the integers <b>K</b> and <b>L</b>. The second line contains the sequence <b>A</b> (<b>K</b> digits with no space in between). The third line contains the sequence <b>B</b> (<b>L</b> digits with no space in between). The fourth line contains the integers <b>x</b> and <b>y </b>.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer representing the minimum penalty.</p>
<h3>Constraints</h3>
<p>0 &lt; <b>N</b> &#8804; 3</p>
<p>0 &lt; <b>K</b> &#8804; 100</p>
<p>0 &lt; <b>L </b>&#8804; 100</p>
<p><b>x</b> &gt; 0, <b>y</b> &gt; <b>x</b></p>
<h3>Example</h3>
<pre><b>Input:</b>
3
9 1
123456789
1
10 15
1 9
1
123456789
10 15
11 4
12345678912
1212
10 15

<b>Output:</b>
Case 1: 18
Case 2: 15
Case 3: 17

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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