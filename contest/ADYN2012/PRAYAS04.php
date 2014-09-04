<?php require("../../includes/header.php"); ?><h1>Exclusive Cities</h1><div class="content">

<p>Vicky plans to visit Vickyland. Vickyland is a strange state where a city can be connected either by roads to one or more cities(including itself) or can be completely isolated from other cities. While examining the map of Vickyland a very strange and interesting idea came to his mind. He defines 2 cities <b>A</b> and <b>B</b> to form an exclusive pair of cities if and only if for every other vertex <b>C</b>, either <b>A</b> and <b>B</b> both are connected to <b>C</b> or none of them are connected to <b>C</b>. By connected Vicky means that two cities a and b are connected if there exist a sequence of roads from a to b.  Now Vicky hopes to determine the number of pairs of exclusive cities in Vickyland. Help him calculate the number of such pairs mod <b>10^9 + 7</b>.</p>
<h3>Input</h3>
<p>The first line consists of the number of test cases <b>T</b>, followed by a blank line followed by <b>T</b> test cases. Each test case is separated from the previous one by a blank line.<br />
The first line of each test case contains two space separated integers, <b>n</b> &ndash; the number of cities in Vickyland and <b>m</b> &ndash; the number of roads in Vickyland. Next follows <b>m</b> lines, the <b>i</b>th of these lines containing two space separated integers <b>xi</b> and <b>yi</b>, specifying that the <b>i</b>th road connects <b>xi</b> to <b>yi</b>. The cities are numbered from <b>0</b> to <b>(n &ndash; 1)</b>.<br />
It is guaranteed that each unordered pair of cities <b>(xi, yi)</b> occurs no more than once.</p>
<h3>Output</h3>
<p>For each test case print the single integer - the number of unordered pairs of cities that are exclusive mod 10^9 + 7, on a separate line.</p>
<h3>Constraints</h3>
<pre>
T &lt;= 10
1 &lt;= n &lt;= 500
0 &lt;= m &lt;= n(n-1)/2
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
2

3  0

4 1
1 3

<b>Output:</b>
3
2

</pre><p><b>Explanation:</b></p>
<p>For the second test case, the pairs of cities that are exclusive are (1,3) and (0,2). So a total of 2 pairs.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/the123abhishek">the123abhishek</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>