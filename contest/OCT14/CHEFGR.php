<?php require("../../includes/header.php"); ?><h1>Chef and Ground</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/mandarin/CHEFGR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/OCT14/russian/CHEFGR.pdf">Russian</a>.</h3>
<p>Today Chef wants to clean his garden. Chef has <b>N</b> columns of ground. Each column has it's height . Chef can choose any column and increase its height by <b>1</b> using <b>1</b> cube of ground. </p>
<p>Chef wants to spend <b>exactly</b> <b>M</b> cubes. Can he make this in such way that the heights of all columns will become equal? </p>
<h3>Input</h3>
<ul>
<li> First line of input contains an integer T denoting number of test cases.
</li><li>Then for each test case, The first line contains two integers <b>N</b> and <b>M</b>. </li>
<li>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the initial heights of the columns". </li>
</ul>
<h3>Output</h3>
<ul>
<li>If Chef can spend all cubes and make the columns equal print <b>Yes</b> else print <b>No</b>. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10^2</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^2</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10^2</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>10^4</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
5 7
3 3 4 2 1
5 6
3 3 4 2 1
5 8
3 3 4 2 1

<b>Output:</b>
Yes
No
No
</pre><h3>Explanation</h3>
<p>In the first case we can put cubes on columns in such count: <b>1, 1, 0, 2, 3</b>. The sum equals <b>M</b>.</p>
<p>In the second case we can't make the columns equal as we will receive something like <b>44443</b>.</p>
<p>In the third case we can make all columns equal but we will still have one cube extra, By using that cube, our heights of columns will  become <b>44445</b>. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2014</td>
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