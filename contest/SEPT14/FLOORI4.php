<?php require("../../includes/header.php"); ?><h1>Flooring</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/FLOORI4.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/FLOORI4.pdf">Russian</a>.</h3>
<p>
Your task is simple. <br /><br /><br />
You need to find the value of <br /><img src="https://codechef_shared.s3.amazonaws.com/download/floori4.gif" />.<br /><br /><br />
As the value could be too large, output it modulo <b>M</b>.
</p>
<h3>Input</h3>
<p>
The first contains an integer <b>T</b>, denoting the number of the test cases. </p>
<p>Then there are <b>T</b> lines, each describing a single test case and contains two space separated integers <b>N</b> and <b>M</b> respectively. </p>
<h3>Output</h3>
<p>For each test case, output the value of summation modulo <b>M</b> on a separate line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b> M </b> ≤ <b>100000</b> </li>
</ul>
<p>There are two types of datasets:</p>
<ul>
<li> <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b> , <b>1</b> ≤ <b>T</b> ≤ <b>3000</b> </li>
<li> <b>10<sup>6</sup></b> ≤ <b>N</b> ≤ <b>10<sup>10</sup></b> , <b>1</b> ≤ <b>T</b> ≤ <b>30</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 1000

<b>Output:</b>
373
</pre><h3>Explanation</h3>
<p>1<sup>4</sup>*4 + 2<sup>4</sup>*2 + 3<sup>4</sup>*1 + 4<sup>4</sup>*1 = 373 </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>1.5 sec</td>
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