<?php require("../../includes/header.php"); ?><h1>Annual Parade</h1><div class="content">

<p>
In the magic land, there is an annual parade hold on each spring.<br />
<br /><br />
<br /><br />
There are <b>N</b> cities in magic land, and <b>M</b> directed roads between cities.<br />
<br /><br />
On the parade, there will be some(may be 0) heroes travel in this land, for each hero:<br />
He start at city begin[i], traveling to some cities, and finish at city end[i]. Note that: begin[i] may be equals to end[i], but he must at least moved to another city during this travel. He can go on one road many times, but it will have a cost for each time.<br />
<br /><br />
<br /><br />
The cost of this parade is the sum of these items:<br />
<br /><br />
1. The sum of costs by traveling on roads. (If a road is passed by k heroes, then it must be count k times.)<br />
<br /><br />
2. If for a hero, he ended at a city that not equals to his start city, i.e. begin[i] != end[i], then it will cost <b>C</b> dollars to move him back to his home.<br />
<br /><br />
3. If for a city, there is no heroes visited, then we must pay for the citizen <b>C</b> dollars as compensate.<br />
<br /><br />
<br /><br />
The value of <b>C</b> may change every year, and we can predict this value in the following <b>K</b> years.<br />
Your task is: calculate the minimal cost of each year.<br />
<br /></p>
<h3>Input</h3>
<p>
In the first line, there are 3 integers: <b>N</b>, <b>M</b> and <b>K</b>.<br />
<br /><br />
In the following <b>M</b> lines:<br />
<br /><br />
there will be 3 integers: <b>S[i]</b>, <b>T[i]</b>, and <b>V[i]</b>, describing a directed road from <b>S[i]</b> to <b>T[i]</b>, cost <b>V[i]</b> dollars.<br />
<br /><br />
In the next <b>K</b> lines:<br />
There will be an integer: <b>C[i]</b>, describing the value of <b>C</b> in that year.<br />
<br /></p>
<h3>Output</h3>
<p>
Output <b>K</b> lines:<br />
each line contain an integer, corresponding to the minimal cost of each year.</p>
<h3>Constraints</h3>
<p>2 &lt;= <b>N</b> &lt;= 250<br />
<br /><br />
1 &lt;= <b>M</b> &lt;= 30000<br />
<br /><br />
1 &lt;= <b>K</b> &lt;= 10000<br />
<br /><br />
<b>S</b>[i] != <b>T</b>[i], 1 &lt;= <b>S</b>[i], <b>T</b>[i] &lt;= <b>N</b><br />
<br /><br />
1 &lt;= <b>V</b>[i] &lt;= 10000<br />
<br /><br />
1 &lt;= <b>C</b> &lt;= 10000<br />
<br /><br />
Note that: there may be more than 1 road between a certain pair of cities.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6 5 3
1 3 2
2 3 2
3 4 2
4 5 2
4 6 2
1
5
10

<b>Output:</b>
6
21
32
</pre><p><br /><br />
<b>Explanation</b><br />
<br /><br />
In the first year, since <b>C</b> is very small, an optimal solution is: no hero travel, we pay 1 dollar for each city as compensate.<br />
<br /><br />
In the second year, an optimal solution is: One hero traveling in the path: 1->3->4->5. We pay 2+2+2=6 dollars for the roads, 5 dollars for taking him back to city 1, and pay 5 dollars for city 2 and 6 as compensate.<br />
<br /><br />
In the third year, one optimal solution is: One hero traveling in the path: 1->3->4->5, and another hero traveling in the path: 2->3->4->6.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/cgy4ever">cgy4ever</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-08-2012</td>
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