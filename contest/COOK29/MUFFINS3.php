<?php require("../../includes/header.php"); ?><h1>Packaging Cupcakes</h1><div class="content">

<p>
Now that Chef has finished baking and frosting his cupcakes, it's time to package them. Chef has <b>N</b> cupcakes, and needs to decide how many cupcakes to place in each package. Each package must contain the same number of cupcakes. Chef will choose an integer <b>A</b> between 1 and <b>N</b>, inclusive, and place exactly <b>A</b> cupcakes into each package.  Chef makes as many packages as possible. Chef then gets to eat the remaining cupcakes. Chef enjoys eating cupcakes very much. Help Chef choose the package size <b>A</b> that will let him eat as many cupcakes as possible.
</p>
<h3>Input</h3>
<p>
Input begins with an integer <b>T</b>, the number of test cases. Each test case consists of a single integer <b>N</b>, the number of cupcakes.
</p>
<h3>Output</h3>
<p>
For each test case, output the package size that will maximize the number of leftover cupcakes. If multiple package sizes will result in the same number of leftover cupcakes, print the largest such size.
</p>
<h3>Constraints</h3>
<ul>
<li>1 &le; <b>T</b> &le; 1000</li>
<li>2 &le; <b>N</b> &le; 100000000 (10<sup>8</sup>)</li>
</ul>
<h3>Sample Input</h3>
<pre>2
2
5
</pre><h3>Sample Output</h3>
<pre>2
3
</pre><h3>Explanation</h3>
<p>
In the first test case, there will be no leftover cupcakes regardless of the size Chef chooses, so he chooses the largest possible size.  In the second test case, there will be 2 leftover cupcakes.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-11-2012</td>
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