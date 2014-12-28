<?php require("../../includes/header.php"); ?><h1>Delivery Man</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/mandarin/TADELIVE.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME19/russian/TADELIVE.pdf">Russian</a>.</h3>
<p>Andy and Bob are the only two delivery men of Pizza-chef store. Today, the store received <b>N</b> orders.<br />
It's known that the amount of tips may be different when handled by different delivery man.<br />
More specifically, if Andy takes the <b>i</b><sup>th</sup> order, he would be tipped <b>A<sub>i</sub></b> dollars and if Bob takes this order,<br />
the tip would be <b>B<sub>i</sub></b> dollars.
</p>
<p>
They decided that they would distribute the orders among themselves to maximize the total tip money. One order will be handled by only<br />
one person. Also, due to time constraints Andy cannot take more than <b>X</b> orders and Bob cannot take more than<br />
<b>Y</b> orders. It is guaranteed that <b>X</b> + <b>Y</b> is greater than or equal to <b>N</b>, which means that all the orders can be handled<br />
by either Andy or Bob.
</p>
<p>
Please find out the maximum possible amount of total tip money after processing all the orders.
</p>
<h3>Input</h3>
<ul>
<li>The first line contains three integers <b>N</b>, <b>X</b>, <b>Y</b>.</li>
<li>The second line contains <b>N</b> integers. The <b>i</b><sup>th</sup> integer represents <b>A<sub>i</sub></b>.</li>
<li>The third line contains <b>N</b> integers. The <b>i</b><sup>th</sup> integer represents <b>B<sub>i</sub></b>.</li>
</ul>
<h3>Output</h3>
<ul>
<li>Print a single integer representing the maximum tip money they would receive.</li>
</ul>
<h3>Constraints</h3>
<p><b>All test:</b></p>
<p><ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>X</b>, <b>Y</b> ≤ <b>N</b>; <b>X</b> + <b>Y</b> ≥ <b>N</b> </li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b> ≤ <b>10<sup>4</sup></b></li>
</ul>
</p>
<p>
<b>10 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>20</b></li>
</ul>

<p>
<b>30 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5000</b></li>
</ul>

<p><b>60 points:</b></p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
5 3 3
1 2 3 4 5
5 4 3 2 1

<b>Output:</b>
21
</pre><h3>Explanation</h3>
<p>Bob will take the first three orders (or the first two) and Andy will take the rest (of course).</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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