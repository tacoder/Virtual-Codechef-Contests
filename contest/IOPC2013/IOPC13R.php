<?php require("../../includes/header.php"); ?><h1>Internet Dating</h1><div class="content">

<p> 21st century is the internet century. Most part of our life revolves around the internet which keeps people so busy with their work, that they don’t have enough time to find suitable dates for themselves. To help people with this, there is a startup which takes the preferences of people and arranges suitable dates for them.</p>
<p> To avail this service, girls and boys need to register on their website. Girls give their preferences for their dates among the boys registered on the site. The site then randomly generates pairs of a boy and a girl and sets them on a date. The website chooses a match such that everyone has a date while ensuring that every girl has exactly one boy as her date and every boy has exactly one girl as his date.</p>
<p> There may be a few girl-boy pairs who may never be matched together by the startup while trying to find <b>exactly one</b> match for everybody. You are asked to output all such girl-boy pairs.</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, the number of test cases.<br />
The first line of each test case contains three space separated integers, <b>N<sub>1</sub></b> <b>N<sub>2</sub></b> <b>M</b> where</p>
<ul>
<li><b>N<sub>1</sub></b>: The number of girls</li>
<li><b>N<sub>2</sub></b>: The number of boys</li>
<li><b>M</b>: The total number of preferences the girls give</li>
</ul>
<p>The next <b>M</b> lines are such that each contains two space separated integers <b>A</b> <b>B</b> which means that the girl <b>A</b> would like to date boy <b>B</b>.</p>
<h3>Output</h3>
<p>For each test case, in the first line print <b>P</b> the number of girl-boy pairs who will never be able to date, followed by all the pairs, each in one line. Each pair will be output as two space separated integers, <b>i</b> <b>j</b>, where the <b>i<sup>th</sup></b> girl would never be able to date the <b>j<sup>th</sup></b> boy. All the pairs must be reported in the lexicographic order; i.e. report pair <b>i</b> <b>j</b> before <b>k</b> <b>l</b>, when <b>i</b> &lt; <b>k</b> or when <b>i</b> = <b>k</b> and <b>j</b> &lt; <b>l</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N<sub>1</sub></b>, <b>N<sub>2</sub></b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>250000</b></li>
<li><b>1</b> ≤ <b>A</b> ≤ <b>N<sub>1</sub></b></li>
<li><b>1</b> ≤ <b>B</b> ≤ <b>N<sub>2</sub></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1 1
1 1
3 3 4
1 1
1 2
2 3
3 3

<b>Output:</b>
0
4
1 1
1 2
2 3
3 3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>