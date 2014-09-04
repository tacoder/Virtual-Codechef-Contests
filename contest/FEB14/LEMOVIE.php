<?php require("../../includes/header.php"); ?><h1>Little Elephant and Movies</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/FEB14/mandarin/LEMOVIE.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/FEB14/russian/LEMOVIE.pdf" target="_blank">Russian</a>.</h3>
<p>Little Elephant from Zoo of Lviv likes to watch movies.</p>
<p>There are <b>N</b> different movies (numbered from <b>0</b> to <b>N − 1</b>) he wants to watch in some order. Of course, he will watch each movie exactly once. The priority of <b>i</b><sup>th</sup> movie is <b>P<sub>i</sub></b>.</p>
<p>A watching of a movie is called <i>exciting</i> if and only if one of the following two conditions holds:</p>
<ul>
<li>This is the first watching.</li>
<li>The priority of this movie is strictly greater than the maximal priority of the movies watched so far.</li>
</ul>
<p>Let us call the number of <i>exciting</i> watchings the <i>excitingness</i> of the order.</p>
<p>Help him to find the number of different watching orders whose <i>excitingness</i> does not exceed <b>K</b>. Since the answer can be large, print it modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p>The first line of each test case contains two space-separated integers <b>N</b> and <b>K</b>. The next line contains <b>N</b> space-separated integers <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, print the number of different watching orders having at most <b>K</b> <i>excitingness</i> modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ K ≤ N ≤ 200</b></li>
<li><b>1 ≤ P<sub>i</sub> ≤ 200</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 1
3 1 2
4 3
1 2 2 3

<b>Output:</b>
2
24
</pre>
<h3>Explanation</h3>
<p>In the first case, there are two boring watching orders whose <i>excitingness</i> not greater than <b>K=1</b>: <b>[3, 1, 2]</b>, <b>[3, 2, 1]</b>. Both watching orders have one <i>exciting</i> watching: the first watching.</p>
<p>In the second case, every watching order has at most <b>3</b> <i>excitingness</i>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2012</td>
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