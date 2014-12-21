<?php require("../../includes/header.php"); ?><h1>Marks Discrepency</h1><div class="content">

<p>Tanu was going through exam marks of his class when he observed that some marks values occur frequently, whereas some of them do not occur at all. He suspects that teachers might be giving grace marks to uplift grade of those near the grade-cutoff, or maybe skipping partial marking.</p>
<p>There are 5 subjects in the school, labelled A to E. Each student gets marks out of 100 (i.e., integer marks in the inclusive range [0,100]). A mark is said to be <i>over-given</i> for a subject if that mark is obtained by strictly more than 10% of the class in that subject. For each of the subjects (A to E), list the marks that are <i>over-given</i> in that subject.</p>
<h3>Input</h3>
<p>First line contains <b>N</b>, the number of marks in the list. Then N lines follow.<br />Each of the next N lines contains one character from the set {A,B,C,D,E} followed by a space, then a number in inclusive range[0,100].</p>
<h3>Output</h3>
<p>Print 5 lines, one for each subject A,B,C,D, and E respectively. In each line print in ascending order the marks that are <i>over-given</i> for that subject. If for a subject none of the marks are <i>over-given</i> then print "Nothing Unusual" (without quotes) in that line.</p>
<h3>Constraints</h3>
<p>1≤N≤100000</p>
<h3>Example</h3>
<pre><b>Input:</b>
6
A 100
B 100
A 100
C 50
D 49
D 51

<b>Output:</b>
100
100
50
49 51
Nothing Unusual
</pre>
<h3>Explanation</h3>
<p>Note that no student gave exam E, so nothing unusual in this case.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>