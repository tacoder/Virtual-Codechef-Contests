<?php require("../../includes/header.php"); ?><h1>Nice Quadrangles</h1><div class="content">

<p>There are n points with integer coordinates. We can form different quadrangles out of them by taking four different points and connecting them with lines. Let’s call a quadrangle ABCD nice if and only if:</p>
<ul>
<li>Ax &gt; 0 and Ay &gt; 0;</li>
<li>Bx &gt; 0 and By &lt; 0;</li>
<li>Cx &lt; 0 and Cy &lt; 0;</li>
<li>Dx &lt; 0 and Dy &gt; 0;</li>
<li>ABCD has an integer area.</li>
</ul>
<p></p>
<p>Your task is to count all different nice quadrangles that can be formed on the given points.</p>
<h3>Input</h3>
<p>The first line of input file contains number t – the number of test cases. Then the description of each test case follows. The first line of each test case contains number n – the number of points. Then n lines follow each consisting of two integers x, y – the coordinates of a point. No two points in the same test case coincide.</p>
<h3>Constraints</h3>

<p>1 &lt;= t &lt;= 10<br />
1 &lt;= n &lt;= 30000<br />
-30000 &lt;= x, y &lt;= 30000</p>
<h3>Output</h3>

<p>For each test case print the number of nice quadrangles that can be formed using given points.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
6
1 1
2 2
-1 -1
-2 2
2 -1
-3 -4

<b>Output:</b>
2

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/spooky ">spooky </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/keshav_57">keshav_57</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-04-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>