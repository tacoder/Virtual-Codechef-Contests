<?php require("../../includes/header.php"); ?><h1>Sum Of Binomial Coefficent</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/mandarin/TASUMOBC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/russian/TASUMOBC.pdf">Russian</a>.</h3>
<p> As we all know, <a href="http://en.wikipedia.org/wiki/Binomial_coefficient">Binomial Coefficient</a> <b>C(n, r)</b> is defined by the<br />
following formula. <br /></p>
<p><img src="https://codechef_shared.s3.amazonaws.com/download/TASUMOBC2.png" />
</p>
<p>
Also define S(<b>n</b>) as follows. <br /></p>
<p><img src="https://codechef_shared.s3.amazonaws.com/download/TASUMOBC1.png" /> <br /></p>
<p>Note that <b>n</b> will be provided to you as an input parameter.
</p><p>Since S(<b>n</b>) can be very large, please print it modulo <b>(10<sup>9</sup> + 7)</b>.
</p>
<h3>Input</h3>
<ul>
<li>The first line contains a single integer <b>T</b> representing the number of test cases.</li>
<li>Each of the next <b>T</b> lines contains an integer <b>n</b>.</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the value of <b>S(n) modulo (10<sup>9</sup> + 7)</b>.
</li></ul>
<h3>Constraints</h3>
<p>
<b>10 points:</b></p>
<li><b>1</b> ≤ <b>T</b> ≤ <b>300</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>300</b></li>
<p>
<b>30 points:</b></p>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>5000</b></li>
<p>
<b>60 points:</b></p>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10<sup>18</sup></b></li>
<h3>Example</h3>
<pre><b>Input:</b>
5
1
2
3
4
5

<b>Output:</b>
2
4
2
4
8

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tuananh93">tuananh93</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>