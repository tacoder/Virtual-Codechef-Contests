<?php require("../../includes/header.php"); ?><h1>The FarmLand Ways</h1><div class="content">

<p align="justify">
<b>Note: This is a partial problem.The shortest source code length will receive 1 point and all others will receive relative points. </b></p>
<p>Peepu and Sudu had a fight over coffee for who is going to donate how much land so that Uncle Sam can do farming. Actually, Uncle Sam is facing financial crunch, and so he had to sell his farming land in order to pay his debts. Uncle Sam needs X sq. units of area to do farming. It can either be single big farms of area X sq. units or it can be two disjoint square farms of side P and S such that combined area of these two farms is equal to X. Now Peepu and Sudu are not able to decide because they don’t know what possibilities they have. Can you please help them find the number of ways they can select P (side of Square Farm land taken from Peepu’s Farm land for donation) and S (side of Square Farm land taken from Sudu’s Farm land for donation) such that the farm land they donate have a combined area of X sq. units. Since Peepu is Sudu’s girlfriend, Sudu does not want Peepu’s donation (P) to be greater than Sudu’s donation (S).</p>
<p>Assume that "X" will always be a product of numbers &lt;= 20.</p>
<h3>Input</h3>

<p>First line contains <b>T</b>, the number of test cases.<br />
Next <b>T</b> lines contain <b>T</b> integers, one per line, and each representing the requirement of Uncle Sam <b>X</b>.</p>
<h3>Output</h3>

<p>Output T lines each containing the number of pairs of (P,S) such that their square adds up to X keeping in mind that Peepu’s donation (P) cannot be greater than Sudu’s donation (S). If they cannot donate square Farm lands, then output 0.<br />
Note that Peepu’s minimum donation can be 0.</p>
<h3>Constraints</h3>

<p>
T&lt;=100<br />
1&lt;=X&lt;=10^30</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5
6
25

<b>Output:</b>
1
0
2
</pre><p></p>
<pre>
<b>Explanation</b>
For TestCase 3:
There are two possible pairs of (P,S) i.e (15,20) and (7,24).

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhidce2013">abhidce2013</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>2000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>