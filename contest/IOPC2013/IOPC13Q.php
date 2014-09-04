<?php require("../../includes/header.php"); ?><h1>Corrupt Horse Racing</h1><div class="content">

<p>Students’ Gymkhana, IIT Kanpur has started horse-racing games as a refreshment activity in the campus where the students can take part in horse racing on evenings and weekends. But since everyone is very busy with their academics and upcoming Techkriti, they have decided to outsource the organisational responsibilities of the races to a company.</p>
<p>But unfortunately, the company people are very corrupt. The take bribes from people to place their horses already ahead of the starting line before the start of the race.</p>
<p>As a neutral observer, you are given the task to find out which of the <b>N</b> horses<br />
taking part in the race would be leading at a given time in the contest. The horses are indexed  from <b>0</b> to <b>N-1</b>.</p>
<h3>Input</h3>
<p>The first of the input contains <b>T</b>, the number of test cases.</p>
<p>The description of each test case begins on a new line and is as follows: </p>
<ul>
<li>two space separated integers <b>N</b>, the number of horses and <b>Q</b>, the number of queries. </li>
<li><b>N</b> lines for the horses indexed from <b>0</b> to <b>N-1</b> in order, each containing 2 space separated integers <b>D</b> and <b>S</b>; where, <b>D</b> is the initial distance of the horse from the starting line and <b>S</b> is its speed. All the horses run uniformly at their individual speeds.</li>
<li><b>Q</b> lines each containing an integer <b>t</b>, which is the query time.</li>
</ul>
<h3>Output</h3>
<p>For each query time <b>t</b>, output a line containing a single integer which is the index of the horse leading at that instant of time. If two horses are leading together at that time, print the index of the horse which will be ahead a split second later.</p>
<h3>Constraints</h3>
<ul>
<li><b>T</b> ≤ <b>5 </b> </li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b> </li>
<li><b>1</b> ≤ <b>Q</b> ≤  <b>5*10<sup>5</sup></b></li>
<li><b>0</b> ≤ <b>D</b> ≤  <b>10<sup>12</sup></b></li>
<li><b>1</b> ≤ <b>S</b> ≤  <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>t</b> ≤  <b>5*10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 3
0 2
0 1
1 2
5
1
2

<b>Output:</b>
2
2
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>