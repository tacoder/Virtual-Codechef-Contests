<?php require("../../includes/header.php"); ?><h1>Rectangle Query</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/QRECT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/QRECT.pdf">Russian</a>.</h3>
<p>You are given a Cartesian plane, and you are asked to support the following three kinds of operations:</p>
<p><ul>
<li><strong>I x1 y1 x2 y2</strong>: add an axes-parallel rectangle on the plane. The bottom-left corner has coordinates <b>(x1, y1)</b>, the top-right one has coordinates <b>(x2, y2)</b> </li>
<li><strong>D index</strong>: remove the retangle that was added during the <strong>index</strong>-th addition operation</li>
<li><strong>Q x1 y1 x2 y2</strong>: output the number of rectangles on the plane that have the common area with the rectangle with a bottom-left corner coordinates <b>(x1, y1)</b> and a top-right corner coordinates <b>(x2, y2)</b>.<br />
Please notice that, even if the two rectangles only share a common point, they are still regarded as sharing common area</li>
</ul>
</p>
<p>Also, there can be a few same rectangles on the plane, they should be regarded as a few different rectangles.</p>
<p>There are <strong>Q</strong> operations in all, can you fulfill them?</p>
<h3>Input</h3>
<p>The first line contains an integer <strong>Q</strong>.</p>
<p>The next <strong>Q</strong> lines represent the operations you are to deal with. Each of them contains an operation in one of the three forms above.</p>
<h3>Output</h3>
<p>For each <strong>Q</strong>-type operation, output the result on the separate line of the output.</p>
<h3>Constraints</h3>
<ul>
<li><span>1 &lt;= <strong>Q </strong>&lt;= 100000</span></li>
<li><span>1 &lt;= <strong>x1</strong> &lt;= <strong>x2</strong> &lt;= 10<sup>9</sup></span></li>
<li><span>1 &lt;= <strong>y1</strong> &lt;= <strong>y2</strong> &lt;= 10<sup>9</sup></span></li>
</ul>
<div>
<h3>Example</h3>
<h3>
<pre><strong>Input:</strong>
5
I 1 1 2 2
I 2 2 3 3
Q 3 3 4 4 
D 2
Q 3 3 4 4

<strong>Output:</strong>
1
0  </pre></h3>
<h3>Explanation</h3>
</div>
<pre>In the third operation, the rectangle (2, 2)-(3, 3) has a common point with the given rectangle.
But in the fifth operation, as the rectangle (2, 2)-(3, 3) has been removed, so there are no rectangles that has the common area with the given rectangle.</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xiaodao">xiaodao</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-07-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>