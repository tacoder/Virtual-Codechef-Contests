<?php require("../../includes/header.php"); ?><h1>THERE IS NO DIRECT WAY</h1><div class="content">

<p>A city of dimension N x N is constructed with grid of lanes. These lanes are fenced by government so that no one can cross any grid diagonally. Although a train </p>
<p>line runs diagonally from (0,0) to (N,N).</p>
<p>Our chef has a weird kind of phobia and is very afraid to cross the railway line. He is at point (0,0) and wants to get to the point (N,N). Calculate number of path </p>
<p>through which it is possible to reach to its destination travelling the minimum distance. .</p>
<p>Note that: </p>
<p>
1. Since he is already at position (0,0) he can go to either part of grid (i.e. left or right part - divided by diagonal) but he will remain in that part for the whole path.</p>
<p>2. He is only afraid to "cross" the line, i.e. during the route he can go to position (m,m) where 0<m&lt;=N but he cannot cross it. </p>
<p>3. You have to calculate the number of path possible. If there is more than one path then you have to print the number of path of minimum distances. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer T denoting the number of test cases, for each test case enter the grid size i.e value of N.</p>
<h3>Output</h3>
<p>For each test case, output a single line with number of such paths possible.</p>
<p>(Note : If no such path possible print 0)</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> &lt;= <b>T</b> &lt;= <b>100</b></li>
<li><b>0</b> &lt;= <b>N</b> &lt;= <b>30</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
5
<b>Output:</b>
4
84
</pre><p></p></m&lt;=n></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/paramjeet">paramjeet</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FORT, GO, JAVA, JS, LUA, PAS fpc, PAS gpc, PERL, PERL6, PHP, PYTH, PYTH 3.1.2, RUBY, SCALA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>