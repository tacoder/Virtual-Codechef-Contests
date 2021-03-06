<?php require("../../includes/header.php"); ?><h1>Free Shuttle Service</h1><div class="content">

<p>Chef has decided to arrange the free shuttle service for his employees. City of Bhiwani has a strange layout - all of its <b>N</b> shuttle boarding points are arranged in a circle, numbered from 1 to <b>N</b> in clockwise direction. Chef's restaurant is at boarding point number 1. There is a single ring road that runs over the circumference of this circle and connects all the boarding points. There are also <b>N - 1</b> different shuttle agencies available in Bhiwani.</p>
<p>For every different boarding points <b>A</b> and <b>B</b> there is exactly one shuttle that connects these points and it belongs to <b>K</b><sup>th</sup> shuttle agency where <b>K</b> is the distance between <b>A</b> and <b>B</b> in clockwise direction, that is, there are exactly <b>K - 1</b> boarding points between points <b>A</b> and <b>B</b> in clockwise direction. Denote this shuttle as <b>(A, B)</b>. So if <b>N = 4</b>, first agency has shuttles (1,2), (2,3), (3,4), (4,1), second agency has shuttles (1,3), (2,4) and the shuttles of third agency are (1,4), (2,1), (3,2), (4,3). If the shuttle connects points <b>A</b> and <b>B</b>, it is possible to go from <b>A</b> to <b>B</b> as well as from <b>B</b> to <b>A</b> using this shuttle.</p>
<p>Chef is planning to make a contract with one of the agencies so that all of his employees are able to travel in shuttles of that agency for free. He therefore wants to choose such a shuttle agency so that people from any boarding point can reach his restaurant only using shuttles of the chosen agency possibly using some intermediate boarding points. Your task is to find how many such shuttle agencies are there.</p>
<h3>Input</h3>
<p>First line contains an integer <b>T</b> denoting number of test cases. After that <b>T</b> lines follow each containing a single integer <b>N</b> denoting number of shuttle boarding points in Bhiwani. </p>
<h3>Output</h3>

<p>For every test case, output the number of shuttle agencies our chef could choose. </p>
<h3>Constraints</h3>

<p>
1 ≤ <b>T</b> ≤ 100
</p>
<p>
2 ≤ <b>N</b> ≤ 10000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
3
4

<b>Output:</b>
1
2
2

</pre><p><b>Description:</b><br />
In third case, there are 4 shuttle boarding points and there are 4 - 1 = 3 shuttle agencies. Using shuttles of only second agency, one can move between points (1,3) and points (2,4). So a person starting from point 2 can't reach restaurant using these shuttles. Each of the other two agencies connects all the points with the restaurant possibly through intermediate boarding points.</p>
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
            <td>26-12-2011</td>
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