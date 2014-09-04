<?php require("../../includes/header.php"); ?><h1>As Far As It Takes Me</h1><div class="content">

<p>Vicky has embarked on a tour where he travels only by buses running over small distances. In general there are <b>n</b> buses all going in the same direction, with the <b>i</b>th bus starting at <b>(xi &ndash; 1)</b> km from his starting point and running upto <b>yi</b> km from his starting point covering <b>(yi &ndash; xi + 1)</b> km. The buses do not stop anywhere in between so Vicky cannot switch buses while in the middle of a bus journey. Neither does he go back from where a bus has dropped him to catch another bus whose starting location might have been left behind his current location. He must walk from where the previous bus has dropped him to the location where the next bus he intends to catch starts.<br />
 Vicky wants to travel as much distance as possible through these buses no matter how long does this tour of him takes him. Given the starting and the finishing location of buses, help Vicky choose the buses that will ensure he travels the maximum distance on the chosen set of buses. The starting point is obviously taken as 0 km.</p>
<h3>Input</h3>
<p>The first line consist of number of test cases <b>T</b>, followed by a blank line, followed by <b>T</b> test cases each separated from the previous one by a blank line. The first line of each test case consist of a single number <b>n</b> &ndash; the number of bus services, followed by <b>n</b> lines where the <b>i</b>th line contains two space separated integer <b>xi</b> and <b>yi</b>, such that the <b>i</b>th bus starts at a distance <b>(xi &ndash; 1)</b> km from his starting point and travels upto <b>yi</b> km from his starting point.</p>
<h3>Output</h3>
<p>For each test case print the maximum distance Vickey can travel through these buses on a separate line.</p>
<h3>Constraints</h3>
<p>1 &lt;= T &lt;= 2<br /><br />
1 &lt;= n &lt;= 10000<br /><br />
1 &lt;= xi &lt;= yi &lt;= 100000000<br /></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1

3
1 4
2 6
6 8

<b>Output:</b>
7

<b>Explanation:</b>
<p>Vicky can travel maximum distance by taking buses 1st and 3rd , covering a total of (4 &ndash; 1 + 1) +<br />(8 &ndash; 6 + 1) = 7 km. Had he taken the first 2nd bus he could have travelled (6 &ndash; 2 + 1) = 5km.</p>

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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