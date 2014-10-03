<?php require("../../includes/header.php"); ?><h1>Fun with Rotation</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/ROTATION.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/ROTATION.pdf">Russian</a>.</h3>
<p>
You are given an array <b>A</b> of <b>N</b> integers. You are to fulfill <b>M</b> queries. Each query has one of the following three types:<br /></p>
<ul>
<li>C <b>d</b> : Rotate the array <b>A</b> clockwise by <b>d</b> units.</li>
<li>A <b>d</b> : Rotate the array <b>A</b> anticlockwise by <b>d</b> units.</li>
<li>R <b>d</b> : Query for the value of the element, currently being the <b>d</b>-th in the array <b>A</b>.</li>
</ul>

<h3>Input</h3>
<p>The first line contains two numbers - <b>N</b> and <b>M</b> respectively.<br /></p>
<p>The next line contains <b>N</b> space separated Integers, denoting the array <b>A</b>.</p>
<p>Each of the following <b>M</b> lines contains a query in the one of the forms described above.</p>
<h3>Output</h3>
<p>For each query of type <b>R</b> output the answer on a separate line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b> </li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100000</b> </li>
<li><b>1</b> ≤ <b>d</b> ≤ <b>N</b>, in all the queries</li>
<li><b>1</b> ≤ elements of <b>A</b> ≤ <b>1000000</b></li>
<li>The array <b>A</b> and the queries of the type <b>R</b> are <b>1-based</b>.
</li></ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 5
5 4 3 3 9
R 1
C 4
R 5
A 3
R 2
<b>Output:</b>
5
3
3
</pre><h3>Explanation</h3>
<p>
The initial array : 5 4 3 3 9<br /><br />
The answer for <b>R 1</b> : 5<br /><br />
The array after <b>C 4</b> :  9 5 4 3 3<br /><br />
The answer for <b>R 5</b> : 3<br /><br />
The array after <b>A 3</b> : 4 3 3 9 5<br /><br />
The answer for <b>R 2</b> : 3 <br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/devuy11">devuy11</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-07-2014</td>
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