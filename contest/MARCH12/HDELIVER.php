<?php require("../../includes/header.php"); ?><h1>Home Delivery</h1><div class="content">

<p>Chef has decided to start home delivery from his restaurant. He hopes that he will get a lot of orders for delivery, however there is a concern. He doesn't have enough work forces for all the deliveries.  For this he has came up with an idea - he will group together all those orders which have to be delivered in nearby areas.<br />
In particular, he has identified certain bidirectional roads which he calls as fast roads. They are short and usually traffic free, so the fast travel is possible along these roads. His plan is that he will send orders to locations <b>A</b> and <b>B</b> together if and only if it is possible to travel between <b>A</b> and <b>B</b> using only fast roads. Your task is, given the configuration of fast roads, identify which orders are to be sent together.</p>
<h3>Input</h3>

<p>First line of input contains an integer <b>T</b>, the number of test cases. Then <b>T</b> test cases follow. First line of each test case contains two space separated integers <b>N</b> and <b>M</b>, denoting number of locations and the number of fast roads. Then <b>M</b> lines follow each containing two space separated integers <b>A</b> and <b>B</b>, denoting that there is a fast road between locations <b>A</b> and <b>B</b>. Assume that locations are indexed by numbers from 0 to <b>N-1</b>. </p>
<p>Next line contains an integer <b>Q</b> denoting the number of queries. Each of the next <b>Q</b> lines contain two integers <b>X</b> and <b>Y</b>. For each query you have to find out if orders meant for locations <b>X</b> and <b>Y</b> are to be sent together or not.</p>
<p>Note that there might be multiple fast roads between same pair of locations, also there might be a fast road that links a location to itself.</p>
<h3>Output</h3>

<p>For each test case print <b>Q</b> lines - one for each query. Output "YO" if the orders are to be<br />
delivered together and "NO" otherwise (quotes for clarity).</p>
<h3>Constraints</h3>
<pre>
1 ≤ <b>T</b> ≤ 100
1 ≤ <b>N</b> ≤ 100
1 ≤ <b>M</b> ≤ 1000
0 ≤ <b>A, B, X, Y</b> ≤ <b>N-1</b>
1 ≤ <b>Q</b> ≤ 3000
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
1
4 2
0 1
1 2
3
0 2
0 3
2 1

<b>Output:</b>
YO
NO
YO
</pre><h3>Warning!</h3>

<p><b>There are large input and output files in this problem. Make sure you use fast enough I/O methods.</b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/yellow_agony">yellow_agony</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-01-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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