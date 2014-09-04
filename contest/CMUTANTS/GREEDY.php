<?php require("../../includes/header.php"); ?><h1>Greedy Government</h1><div class="content">

<p>
The Government of Greedistan has just found out that there is a lot of gold beneath some land area in their country. They quickly surveyed the land area and found that some people are living there, and surprisingly the houses are organized in a <b>M</b> x <b>N</b> grid, each cell having exactly one house.</p>
<p>To acquire all the gold beneath this area, the government has planned to make up a rumor ( a volcano is about to erupt near by ) and let the people vacate their houses themselves. They start the rumor at only one house on day 1. It takes exactly one day for the rumor to spread from a house to any of its neighbors ( top, left, bottom, right ). They all vacate their houses as soon as they know about the volcano. </p>
<p> The government wants to choose the starting house for the rumor in such a way that it takes minimum number of days for all the people to vacate their houses. Find this minimum time. </p>
<h3>Input</h3>
<p>The first line contains <b>T</b>, the number of test cases. Each of the next <b>T</b> lines contain two integers <b>M</b> and <b>N</b>. If one of M or N is zero, other one will also be zero, and this means, there are no houses at all.</p>
<p><b>T</b> &lt;= 1,000</p>
<p>0 &lt;= <b>M</b> &lt;= 1,000,000</p>
<p>0 &lt;= <b>N</b> &lt;= 1,000,000</p>
<h3>Output</h3>
<p> The minimum number of days it takes to spread the rumor to all houses.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 5
3 4

<b>Output:</b>
3
4

<b>Explanation:</b>
Case 1 : Starting cell (1,3)
Case 2 : See the following table with a possible answer, each cell has the first day in which they hear the rumor.
<table>
<tr> <td>3</td><td>2</td><td>3</td><td>4</td></tr>
<tr> <td>2</td><td>1</td><td>2</td><td>3</td></tr>
<tr> <td>3</td><td>2</td><td>3</td><td>4</td></tr>
</table>
</pre>    </div><table>
<tr> <td>3</td><td>2</td><td>3</td><td>4</td></tr>
<tr> <td>2</td><td>1</td><td>2</td><td>3</td></tr>
<tr> <td>3</td><td>2</td><td>3</td><td>4</td></tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rosyish">rosyish</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2011</td>
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