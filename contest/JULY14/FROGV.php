<?php require("../../includes/header.php"); ?><h1>Chef and Frogs</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/FROGV.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/FROGV.pdf">Russian</a>.</h3>
<p>Nobody knows, but <b>N</b> frogs live in Chef's garden.</p>
<p>Now they are siting on the X-axis and want to speak to each other. One frog can send a message to another one if the distance between them is less or equal to <b>K</b>. </p>
<p>Chef knows all <b>P</b> pairs of frogs, which want to send messages. Help him to define can they or not! </p>
<p><b>Note</b> : More than 1 frog can be on the same point on the X-axis.</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line contains three integers <b>N</b>, <b>K</b> and <b>P</b>. </li>
<li> The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the x-coordinates of frogs". </li>
<li> Each of the next <b>P</b> lines contains two integers <b>A</b> and <b>B</b> denoting the numbers of frogs according to the input. </li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each pair print "Yes" without a brackets if frogs can speak and "No" if they cannot. </li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, P</b> ≤ <b>10^5</b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub>, K</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>A, B</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5 3 3
0 3 8 5 12
1 2
1 3
2 5

<b>Output:</b>
Yes
Yes
No

</pre><p> </p>
<pre>
<h3>Explanation</h3>
<p>For pair <b>(1, 2)</b> frog <b>1</b> can directly speak to the frog <b>2</b> as the distance between them is <b>3 - 0 = 3 &lt;= K </b>. </p>
<p>For pair <b>(1, 3)</b> frog <b>1</b> can send a message to frog <b>2</b>, frog <b>2</b> can send it to frog <b>4</b> and it can send it to frog <b>3</b>.
</p><p>For pair <b>(2, 5)</b> frogs can't send a message under current constraints. </p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>