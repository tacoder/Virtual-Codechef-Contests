<?php require("../../includes/header.php"); ?><h1>Road trip</h1><div class="content">

<p>Phileas Fogg and Passepartout are now going on a road trip in their brand new car. They start at location A<sub>0</sub> and need to go to A<sub>N</sub>. Their car has a capacity to hold only C units of fuel and can travel unit distance on unit amount of fuel. They start by filling some amount of fuel from the filling station at A<sub>0</sub>. On the way, there are several filling stations A<sub>1</sub>, A<sub>2</sub>,... A<sub>N-1</sub>. The cost of fuel is not the same at all filling stations. Find the minimum amount that they have to spend on fuel to make the journey.</p>
<p>Note that it is assured that the journey can be completed with the car of the given capacity.</p>
<h3>Input</h3>

<p>The first line of input contains T (≤10), the number of test cases. Following this are the descriptions of the testcases
</p>
<p>The first line in the description of each test case contains two space integers N (≤50000) and C (≤10<sup>8</sup>). This is followed by N lines, each containing an integer. The integer on the ith line is the distance from A<sub>0</sub> to A<sub>i</sub> and is ≤ 10<sup>8</sup>. The distances are in increasing order. This is followed by N more lines, each containing an integer. The integer on the ith line is the cost of one unit of fuel at the filling station A<sub>i-1</sub> and is  ≤ 10<sup>8</sup>. </p>
<h3>Output</h3>

<p>Output one integer per test case, the minimum total amount that needs to be spent on fuel to complete the journey</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 10
10
20
30
40
50
1
2
1
2
1
5 15
10
20
30
40
50
1
2
1
2
1

<b>Output:</b>
70
60
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2011</td>
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
            <td>C, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>