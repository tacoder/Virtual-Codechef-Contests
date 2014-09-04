<?php require("../../includes/header.php"); ?><h1>The Number Of Solutions</h1><div class="content">
<p>Little Chief loves math. Most of all, he loves equations. He can solve any equation in the whole world. Recently he found one interesting and easy equation</p>
<p><b>x1<sup>d</sup>+x2<sup>d</sup>+x3<sup>d</sup> ≡ m (mod N)</b><br />
Where <b>x1, x2 and x3</b> are non negative integer numbers.</p>
<p>But, as always, this was easy enough for him and he solved it in just a few seconds. Now he wants you to do the same. Of course he understands that nobody is as good as he is, so he wants only the number of solutions of such equation which satisfies <b>0 ≤ x1, x2, x3 ≤ upper</b> for given <b>upper</b>, <b>d</b>,<b>m</b> and <b>N</b>. As the answer might be very large, he asks you to find the answer modulo <b>1000000007</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow. Each test case consists of 4 integers: <b>upper</b>, <b>d</b>, <b>m</b>, <b>N</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing number of solutions for the corresponding equation, modulo <b>1000000007</b>. You may assume that <b>0<sup>0</sup></b> is equal to 1.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ upper ≤ 1,000,000,000</b></li>
<li><b>0 ≤ d ≤ 1,000,000,000</b></li>
<li><b>1 ≤ N ≤ 40</b></li>
<li><b>0 ≤ m &lt; N</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2 2 3 5
1 2013 3 31

<b>Output:</b>
4
1

</pre><h3>Explanation</h3>
<p>The first equation has 4 solutions:</p>
<ul>
<li>(0,2,2)</li>
<li>(2,2,0)</li>
<li>(2,0,2)</li>
<li>(1,1,1)</li>
</ul>

<p>The second has only one:</p>
<ul>
<li>(1,1,1)</li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ballon_ziq">ballon_ziq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-04-2013</td>
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