<?php require("../../includes/header.php"); ?><h1>Squirrel and chestnut</h1><div class="content">

<p>There are n squirrel(s) waiting below the feet of m chestnut tree(s). The first chestnut of the i-th tree will fall right after T<sub>i</sub> second(s), and one more every P<sub>i</sub> second(s) after that. The “big mama” of squirrels wants them to bring their nest no less than k chestnuts to avoid the big storm coming, as fast as possible! So they are discussing to wait below which trees to take enough chestnuts in the shortest time. Time to move to the positions is zero, and the squirrels move nowhere after that.</p>
<h3>Request</h3>
<p>Calculate the shortest time (how many seconds more) the squirrels can take enough chestnuts.</p>
<h3>Input</h3>
<p><ul>
<li>The first line contains an integer t, the number of test cases, for each:
<ul>
<li>The first line contains the integers m,n,k, respectively.</li>
<li>The second line contains the integers T<sub>i</sub>  (i=1..m), respectively.</li>
<li>The third line contains the integers P<sub>i</sub>  (i=1..m), respectively.</li>
</ul>
</li>
<p><b><em>(Each integer on a same line is separated by at least one space character, there is no added line between test cases)</em></b>
</p></ul>
</p>
<h3>Output</h3>
<p>For each test cases, output in a single line an integer which is the shortest time calculated.</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
2
3 2 5
5 1 2
1 2 1
3 2 5
5 1 2
1 1 1
</pre><p>
<b>Output:</b></p>
<pre>
4
3
</pre><p><em>* Explain (case #1): 2 squirrels waiting below the trees 2 and 3.</em></p>
<h3>Limitations</h3>
<ul>
<li>0&lt;t≤20</li>
<li>0&lt;m,n≤10,000</li>
<li>0&lt;k≤10<sup>7</sup></li>
<li>0&lt;T<sub>i</sub>,P<sub>i</sub>≤100</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-05-2010</td>
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