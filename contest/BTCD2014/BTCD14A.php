<?php require("../../includes/header.php"); ?><h1>Game of Pips</h1><div class="content">
<p> </p>
<p>Sherlock is now taking a break from his current case and starts reviewing his famous case of <i>"The N Orange Pips".</i> He slips too deep into the case and gives you a puzzle.  <br /><br />
<br /><br />
Sherlock has <strong>N</strong> boxes consisting of orange pips. The <strong>i</strong>th box contains <strong>Ai</strong> orange pips. He now wants you to take out some pips from each box (you may leave some boxes untouched), such that in all the boxes the remaining number of pips is odd and equal to each other. Also, for each box, the number of pips present after the removal must be a factor of the original number of pips that were present in the box. You need to take as minimum number of pips as possible.<br />
<br /><br /><br />
Now Sherlock asks you to tell the number of pips each box will have. </p>
<h3>Input</h3>
<p>The first line consists of the number of boxes, N. N integers follow, each having a single integer, denoting the number of pips in each box.</p>
<h3>Output</h3>
<p>A single integer denoting the number of pips each box will have.</p>
<h3>Constraints</h3>
<ul>
<li><strong>1</strong> ≤ <strong>N</strong> ≤ <strong>10^5</strong></li>
<li><strong>1</strong> ≤ <strong>Ai</strong><strong> </strong>&lt; <strong>2^63</strong></li>
</ul>
<h3>Example</h3>
<pre><strong>Input:</strong>
4
98
42
14
28 

<strong>Output:</strong>
7
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vshriram93">vshriram93</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-03-2014</td>
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