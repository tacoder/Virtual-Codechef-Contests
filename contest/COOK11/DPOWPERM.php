<?php require("../../includes/header.php"); ?><h1>D-Power Permutations</h1><div class="content">

<p>
Let <b>N</b> be a positive integer and <b>S = {1, 2, 3, ..., N}</b>. For a given positive integer <b>d</b> the function <b>f : S --&gt; S</b> is called <b>d</b>-power permutation if there exists a bijection <b>g : S --&gt; S</b> such that <b>g ( g ( ... g ( x ) ... ) ) = f(x)</b> for each <b>x</b> from <b>S</b> , where <b>g</b> is repeated exactly <b>d</b> times.
</p>

<p>
You are given some bijection <b>f : S --&gt; S</b> and a positive integer <b>D</b>. You need to find the number of those <b>d &lt;= D</b> such that <b>f</b> is <b>d</b>-power permutation.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 10</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains two positive integers <b>N</b> and <b>D</b>, where <b>N &lt;= 700</b> and <b>D &lt;= 10<sup>18</sup></b>. The second line contains <b>N</b> space-separated integers. <b>i</b><sup>th</sup> number in the second line is the value <b>f(i)</b>. It is guaranteed that <b>f</b> is bijection from <b>S</b> onto <b>S</b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the answer for the corresponding test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 6
1 2 3
5 10
2 1 4 5 3

<b>Output:</b>
6
3
</pre><h3>Explanation</h3>
<p>In the second case the appropriate values of <b>d</b> is 1, 5 and 7.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-06-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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