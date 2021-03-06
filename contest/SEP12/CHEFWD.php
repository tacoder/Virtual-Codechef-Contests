<?php require("../../includes/header.php"); ?><h1>Chef World</h1><div class="content">

<p>
Chef Ciel lives in a long street which can be thought as of x-axis of coordinate system.<br />
Her house is at coordinate 0 whereas her restaurant is situated at coordinate <b>N</b>.<br />
Usually Ciel goes from home to restaurant taking a step of size 1 or 2 in forward direction.<br />
We all know how much Chef loves Fibonacci numbers.
</p>
<p>
But today, Ciel being little casual stepped in wrong direction on her way to her restaurant exactly once and of course she did not set her foot wrong at home.<br />
Now she wonders how many ways she can reach her restaurant provided that she stepped wrong once but not at home.<br />
<br /> She does not go past her restaurant because it is altogether different world and once she reaches her restaurant she stops.
</p>

<p>
For example, if <b>N</b> is <b>3</b> then<br /><br />
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>-1</b> <span style="color:gray">-></span> <b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>3</b>,<br /><br />
<b>0</b> <span style="color:gray">-></span> <b>2</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>3</b><br /><br />
are some possible ways where as<br /><br />
<b>0</b> <span style="color:gray">-></span> <b>-1</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>3</b>, (She did not set her foot wrong at her home)<br /><br />
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>3</b>, (She sets her foot wrong direction exactly once)<br /><br />
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>0</b> <span style="color:gray">-></span> <b>3</b>, (Her steps are always size 1 or 2)<br /><br />
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>2</b> <span style="color:gray">-></span> <b>4</b> <span style="color:gray">-></span> <b>3</b>, (She does not go past her restaurant)<br /><br />
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>2</b> <span style="color:gray">-></span> <b>3</b> <span style="color:gray">-></span> <b>2</b> <span style="color:gray">-></span> <b>3</b> (Once she reaches her restaurant, she stops)<br /><br />
are not.<br /> </p>
<h3>Input</h3>
<p>
First line of input contains <b>T</b>, number of test cases which is at most 10000.<br />
Then <b>T</b> lines follows each containing a positive integer <b>N</b> which is at most 1000000000000000 (10<sup>15</sup>).
</p>
<h3>Output</h3>
<p>
Number of ways Ciel can reach her restaurant modulo 1000000007 (10<sup>9</sup>+7).
</p>
<pre>
<b>Sample Input:</b>
2
3
4

<b>Sample Output:</b>
18
44
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/div_adm">div_adm</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-05-2012</td>
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
    </table> <?php require("../../includes/footer.php"); ?>