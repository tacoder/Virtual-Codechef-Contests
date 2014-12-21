<?php require("../../includes/header.php"); ?><h1>Cascading Style Sheets</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/mandarin/CSS2.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME17/russian/CSS2.pdf">Russian</a>.</h3>
<p>Cascading Style Sheets, or <i>CSS</i> is a style sheet language, most popularly known for styling web pages. Each <i>object</i> on a web page (like a picture, a paragraph, a table) can have various properties (like height, width, size, colour), and these properties can be set using CSS. Each of these <i>objects</i> has a unique identifier called <i>id</i>, using which CSS can identify the object and assign value to its property.</p>
<p>Due to hierarchical nature of the web page, often same property of an object gets assigned different values in different CSS statements. To decide what the final value will be, each statement has a <i>priority</i> assigned to it. The statement with the highest priority will be the one that sets the value of the property. If there are more than one statements with same priority, then the one which was executed last amongst those will set the value.</p>
<p>Given multiple CSS statements in the order they were executed, answer a few queries about the final values of certain objects</p>
<h3>Input</h3>
<p>First line contains two space-separated integers <b>N</b> and <b>M</b>, the number of CSS statements and the number of queries respectively.<br />Following N lines will each have 4 values <b>id, attr, val, priority</b>, which mean that a CSS statement tries to assign value <b>val</b> to the attribute named <b>attr</b> of the object <b>id</b>, and that the priority of this statement is equal to <b>priority</b>.<br />Each of the next M lines will contain two values <b>id</b> and <b>attr</b>, for which you have to print value of the attribute <b>attr</b> of object <b>id</b>. You can assume that there is a statement that assigns value to this attribute <b>attr</b> of object <b>id</b>.</p>
<h3>Output</h3>
<p>Print exactly M lines, i<sup>th</sup> line contains the answer to the i<sup>th</sup> query as described above.</p>
<h3>Constraints</h3>
<ul>
<pre>
<li>1 ≤ value, priority ≤ 10<sup>6</sup>, for all subtasks.
</li><li><b>For 20 points : </b>1 ≤ id, N, M, attr ≤ 10<sup>3</sup>
</li><li><b>For 30 points : </b>1 ≤ N, M ≤ 10<sup>3</sup>, 1 ≤ id, attr ≤ 10<sup>6</sup>
</li><li><b>For 50 points : </b>1 ≤ N, M ≤ 10<sup>5</sup>, 1 ≤ id, attr ≤ 10<sup>6</sup>
</li></pre></ul><h3>Example</h3>
<p><b>Input:</b></p>
<pre>3 1<br />22 1 200 2<br />22 1 300 2<br />22 1 100 1<br />22 1</pre><p><br /><b>Output:</b></p>
<pre>300</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/piyushkumar">piyushkumar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xiaodao">xiaodao</a></td>
				</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-10-2014</td>
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