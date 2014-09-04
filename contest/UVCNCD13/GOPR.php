<?php require("../../includes/header.php"); ?><h1>Runner</h1><div class="content">
<h3>Problem statement</h3>
<p>
	Gopal is running in the 400m track, which is oval in shape and first 100 (0-99)meter is straight, next 100(100-199) meter is curved in a semicircular form, next 100(200-299) meter is again a straight and next 100(300-399) meter is curved and reaches the start point. Now Gopal starts running from the start point with 1 meter/second speed at time <strong>T1</strong>.
</p>
<p>
	Now his coach comes to the track at time <strong>T2</strong>. You have to determine whether Gopal is running is a straight track or in curved track, when his coach visits the track.
</p>

<h3>INPUT</h3>
<p>
First line of the input contains the <strong>T</strong>, number of testcases.<br />
Each test case contains two lines. <br />
First line contains 3 space seperated integers <strong>HT1</strong>, <strong>MT1</strong>, <strong>ST1</strong>, representing hour, minute and second of <strong>T1</strong> respectively.<br />
Second line contains same information as in previous line, <strong>HT2</strong>, <strong>MT2</strong>, <strong>ST2</strong> about <strong>T2</strong>.
</p>
<h3>OUTPUT</h3>
<p>
For each testcase output <strong>"S"</strong> (without quotes) if Gopal is running in a straight line, otherwise output <strong>"C"</strong> (without quotes), when his coach visits.
</p>
<h3>
CONSTRAINTS</h3>
<ul>
<li>1 ≤ T ≤ 10000</li>
<li>0 ≤ MT1,MT1,ST1,ST2 ≤ 59</li>
<li>0 ≤ HT1,HT2 ≤ 23</li>
</ul>
<h3>EXAMPLE</h3>
<p><b>Input</b></p>
<p>
2<br />
10 0 0<br />
10 2 0<br />
11 25 0<br />
11 26 30
</p>
<p><b>Output</b></p>
<p>
C<br />
S
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/hkbharath">hkbharath</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-10-2013</td>
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