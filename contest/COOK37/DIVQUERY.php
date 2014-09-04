<?php require("../../includes/header.php"); ?><h1>Chef and The Divisibility Queries</h1><div class="content">
<p>The Chef is given a sequence of <b>N</b> integers <b>A<sub>1</sub>,  A<sub>2</sub>, ..., A<sub>N</sub></b>. He has to process <b>Q</b> queries on the above sequence. Each query is represented by three integers:</p>
<ul>
<li>
<b>L R K</b> =&gt; report cardinality of <b>{ i : K</b> divides <b>A<sub>i</sub></b>, <b>L</b> ≤ <b>i</b> ≤ <b>R }</b>. In other words, how many integers in the subsequence starting at <b>L</b><sup>th</sup> element and ending at <b>R</b><sup>th</sup> element are divisible by <b>K</b>.
</li>
</ul>

<h3>Input</h3>
<p>The first line of the input contains two space separated integer <b>N</b>  and <b>Q</b>.<br />
The following line contains <b>N</b> space separated integers giving the sequence <b>A<sub>1</sub>,  A<sub>2</sub>, ..., A<sub>N</sub></b>.<br />
Then there will be <b>Q</b> lines each containing three space separated integers <b>L R K</b>, representing a query.</p>
<p> </p>
<h3>Output</h3>
<p>For each query output the result in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q </b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub> </b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
<li> <b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>K </b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
8 5
3 5 1 4 6 9 12 6
3 6 2
3 6 4
4 8 3
2 6 7
8 8 6

<b>Output:</b>
2
1
4
0
1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rustinpiece">rustinpiece</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-08-2013</td>
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