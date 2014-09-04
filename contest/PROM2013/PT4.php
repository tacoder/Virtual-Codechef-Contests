<?php require("../../includes/header.php"); ?><h1>Greenland</h1><div class="content">

<p>The country Greenland consists of n cities, some pairs of them are connected with unidirectional roads. Overall there are n - 1 roads in the country. We know that if we don't take the direction of the roads into consideration, we can get from any city to any other one.<br />
The council of business officials  has recently decided to choose the trade centre of Greenland. Of course it should be a city of this country. The council is supposed to meet in the trade centre and regularly move from the trade centre to other cities (at this stage nobody is thinking about getting back to the trade centre from these cities). For that reason if city a is chosen a trade centre, then all roads must be oriented so that if we move along them, we can get from city a to any other city. For that some roads may have to be inversed.<br />
Help the officials to choose the trade centre so that they have to inverse the minimum number of roads in the country.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.The description of <b>T</b> test cases follows.<br />
The first line of each test case contains n — the number of cities in Greenland. Next n - 1 lines contain the descriptions of the roads, one road per line. A road is described by a pair of integers si, ti — the numbers of cities, connected by that road. The i-th road is oriented from city si to city ti. You can consider cities in Greenland indexed from 1 to n.</p>
<h3>Output</h3>
<p>In the first line print the minimum number of roads to be inversed if the trade centre is chosen optimally. In the second line print all possible ways to choose the trade centre — a sequence of indexes of cities in the increasing order.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b>n</b> ≤ <b>2*10^5</b></li>
<li><b>1</b> ≤ <b>si</b> , <b>ti</b>≤ <b>n</b>,  <b>si</b>≠ <b>ti</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
2 1
2 3
4
1 4
2 4
3 4

<b>Output:</b>
0
2 

2
1 2 3 

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abeersethi">abeersethi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-04-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 - 4 sec</td>
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