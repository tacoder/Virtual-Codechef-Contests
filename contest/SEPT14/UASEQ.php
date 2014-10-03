<?php require("../../includes/header.php"); ?><h1>Chef and sequence</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/UASEQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/UASEQ.pdf">Russian</a>.</h3>
<p>        You are given an array that consists of <b>n</b> integer numbers. You have to change at most <b>K</b> elements of this array, so that the resulting array will be a arithmetic progression. From all the possible arithmetic progressions, you should choose most <i>beautiful</i>. </p>
<p>You can uniquely define the arithmetic progression by two numbers <b>a<sub>0</sub></b> and <b>d</b> - the first element of the given progression and the step that defines next element. (<b>a<sub>i</sub> = a<sub>0</sub>+i * d</b>). The progression <b>A(a<sub>0</sub> , d<sub>0</sub>)</b> is more <i>beautiful</i> than the progression <b>B(b<sub>0</sub>, d<sub>1</sub>)</b> iff <b>(a<sub>0</sub> &lt; b<sub>0</sub> or (a<sub>0</sub> = b<sub>0</sub> and d<sub>0</sub> &lt; d<sub>1</sub>))</b>  </p>
<h3>Input</h3>
<p>  The first line contains two integers <b>N</b> and <b>K</b> denoting the number of elements in the given array and the number of elements that you can change</p>
<p>The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array.</p>
<h3>Output</h3>
<p>Output a single line containing the resulting array with at most <b>K</b> changes. Mind that among all the arithmetic sequences you have to choose the most <i>beautiful</i>.
</p>
<p>In the given test data, it is always possible to recover at least one arithmetic progression under the constraints of the problem.</p>
<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>min(10, N-2)</b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 2 1 4

<b>Output:</b>
-5 -2 1 4 
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-06-2014</td>
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