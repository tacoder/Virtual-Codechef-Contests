<?php require("../../includes/header.php"); ?><h1>Travelling Chef Problem</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/mandarin/TCP.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/russian/TCP.pdf">Russian</a> as well.</h3>
<p></p><p>When Chef is travelling - that's the problem. No one knows when he will change his velocity. But mathematicians are certain that Chef's velocity depends on the current time, and can be described as a cubic polynomial. A cubic polynomial can be defined as:</p>
<p><b>v(t) = A×t<sup>3</sup> + B×t<sup>2</sup> + C×t + D</b>, where <b>A, B, C, D</b> are rational numbers (<b>A</b> is non zero), and <b>t</b> is the current time.</p>
<p>As for us, all we know is: Chef's velocity at 4 time instances. And we are interested in finding the total distance covered by Chef at time <b>T</b>. We can assume that Chef has started his travel at zero time moment.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>N</b> denoting the number of test cases. The first line of each testcase contains an integer <b>T</b>, the time up to which we want to know the distance covered by Chef from time <b>0</b>. Then <b>4</b> lines follow, each containing two integers: <b>ct</b> and <b>cv</b>. Here <b>ct</b> is the time instant and <b>cv</b> is the velocity at time <b>ct</b>.</p>
<p><b>Please note</b>, that we pick <b>ct</b> in such a way that <b>cv</b> comes out to be integer. In general the velocity of Chef is real number.</p>
<h3>Output</h3>
<p>For each test case output a single line containing a real number – the distance covered by the Chef in time interval <b>0</b> to <b>T</b>. Your answer will be considered as correct if it has <b>relative error less than 10<sup>-10</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>T</b> ≤ <b>3600</b></li>
<li><b>1</b> ≤ <b>ct</b> ≤ <b>3600</b></li>
<li><b>-1000000</b> ≤ <b>cv</b> ≤ <b>1000000</b></li>
<li>For each testcase values of <b>ct</b> are distinct.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
2 11
3 31
4 69
5 131
8
12 -480
13 -693
14 -960
15 -1287

<b>Output:</b>
173.750000
80.000000
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-07-2013</td>
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