<?php require("../../includes/header.php"); ?><h1>Sereja and Subsegment Increasings</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/SEINC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/SEINC.pdf">Russian</a>.</h3>
<p>Sereja has an array <b>A</b> that contains <b>n</b> integers: <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>n</sub></b>.<br />
Sereja also has an array <b>B</b> that contains <b>n</b> integers <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>n</sub></b>.<br />
In a single step Sereja can choose two indexes <b>i</b> and <b>j</b> <b>(1 &lt;= i &lt;= j &lt;= n)</b> , and increase all the elements of <b>A</b> with indices between <b>i</b> and <b>j</b> inclusively by one, modulo 4.<br />
In other words, we make <b>A<sub>p</sub></b> equal to <b>(A<sub>p</sub> + 1) modulo 4</b> if <b>p</b> is an integer from the range [<b>i</b>; <b>j</b>].</p>
<p>Now Sereja is interested in the following question: what is the mininal number of steps necessary in order to make the array <b>A</b> equal to the array <b>B</b>.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> - the number of the testcases. Then, <b>T</b> tests follow. <br /><br />
The first line of each testcase contains the integer <b>n</b>. <br /><br />
The next line conatins <b>n</b> single space separated integers - <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>n</sub></b>. <br /><br />
The next line conatin <b>n</b> single space separated integers - <b>B<sub>1</sub>, B<sub>2</sub>, ..., B<sub>n</sub></b>.</p>
<h3>Output</h3>
<p>For each testcase output an answer - the mininal number of steps necessary.</p>
<h3>Constraints</h3>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>A<sub>i</sub>, B<sub>i</sub></b> ≤ <b>3</b></li>
</ul>
</p>
<p><h3>Example</h3>
<pre><b>Input:</b>
1
5
2 1 3 0 3
2 2 0 1 0

<b>Output:</b>
1

</pre></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-03-2014</td>
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