<?php require("../../includes/header.php"); ?><h1>Irrigating Farms</h1><div class="content">
<p>In the district of Jalshunyapur, the earth board has put restrictions on the usage of water in any farm to C litres per hour. Jalshunyapur has many farmers each having a farm of size <b>K</b> meter &times; <b>K</b> meter, divided into <b>K<sup>2</sup></b> square plots each having a side of 1 meter. The plots are numbered from 1 to <b>K<sup>2</sup></b> from left-to-right, top-to-bottom (see picture below).</p>
<p>To irrigate the plots, the farmer has put <b>S</b> sprinklers (numbered from 1 to <b>S</b> ) at the bottom right corners of some of the plots. Each sprinkler, j, has a maximum possible flow, m[j] (positive integer); it can be programmed to work at any current integer flow between 0 and m[j]. If the current flow is set to c[j], then the sprinkler will be able to reach the adjacent plots up to a distance of c[j] on all sides. For example, for c[j] = 1, 4 plots will be watered; for c[j] = 2 and 3, the numbers will be 16 and 36 respectively. You can assume that a sprinkler can irrigate a plot if the flow of water from that sprinkler reaches the plot. Note that a sprinkler can be placed such that some of the plots it reaches fall outside the farm, in which case it irrigates only the plots falling inside the farm. In total, the sum of all c[j] can never be greater than <b>C</b>.</p>
<p>The picture below shows a 10 &times; 10 farm, with the plots numbered from 1 to 100 as shown. The sprinkler placed at the bottom right corner of plot 16 has c[j] =1 and irrigates 4 plots, and the sprinkler placed at the bottom right corner of plot 24 has c[j]=2 and irrigates 16 plots. Note that a plot may receive water from more than one sprinkler (plots 16 and 26 here). The sprinkler placed at the bottom of plot 89 has c[j]=2, but only irrigates the plots shaded as some of the plots it can reach are outside the farm.</p>
<p><img src="http://www.codechef.com/download/irrigation_farms.png" alt="Irrigation Farms" height="400" width="400" /></p>
<h3>Input</h3>
<p>The first line contains the number of test cases, <b>N</b> (0 &lt; <b>N</b> ≤ 3).</p>
<p>For each test case, the first line contains three positive integers for <b>K</b> (0 &lt; <b>K</b> &le; 10), <b>S</b> (0 &lt; <b>S</b> &le; 10), and <b>C</b> (0 &lt; <b>C</b> &le; 20). The second line contains <b>S</b> integers separated by one or more spaces, with each integer representing the maximum flow m[j] of the corresponding sprinkler (0 &lt; m[j] &le; 4 for all j). The third line contains S integers, with each integer giving a plot number at whose bottom right corner the corresponding sprinkler is put. The fourth line contain K2 integers, with the j-th integer giving the profitability value of plot j.</p>
<h3>Output</h3>
<p>For each test case, print the case number, followed by a colon, followed by a single space, followed by a single integer representing the maximum profit of the farmer.</p>
<h3>Sample Input</h3>
<pre>
2 
3 2 2
2 2 
3 7 
1 1 9 1 1 1 8 1 5 
4 2 2 
2 2 
2 12 
1 1 1 1 1 1 1 1 1 1 1 1 1 1 8 1
</pre><h3>Sample Output</h3>
<pre>
Case 1: 19
Case 2: 13
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>