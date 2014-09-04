<?php require("../../includes/header.php"); ?><h1>Mech Project</h1><div class="content">
<h2>Mech Project</h2>
<p>
	A Team of Mech guys from UVCE are working on a Robot, which can cut the ripen coconut from the tree by controlling the release of<br />
enzymes in the tree. Team somehow manages to get the <b>Size</b> and <b>ripeFactor</b> of each coconut. If <b>Size</b> of the coconut is<br />
strictly greater than <b>minSize</b> or <b>ripeFactor</b> is strictly greater than <b>minRipeFactor</b> then enzymes will be controlled to<br />
cut that coconut, else it will not be cut.
</p>
<p>
	The team wants to analyse the efficiency of their Robot. In a tree if the Robot cuts <b>RCut</b> coconuts but actually it was required to<br />
cut <b>ACut</b> coconuts, then efficiency of the Robot will be <b>RCut ÷ ACut</b>. Write a program to calculate the efficiency of the<br />
Robot.</p>
<h3>Input</h3>
<p>
First line contains <b>T</b>,number of test cases.<br />
In each test case<br />
First line contains 3 space separated integers <b>N</b> (number of coconuts in the tree), <b>minSize</b> and <b>minRipeFactor</b>.<br />
In next <b>N</b> lines <b>i th</b> line contains two space separated integers <b>Size</b> and <b>ripeFactor</b> of <b>i th</b> coconut.<br />
Next line contains single integer <b>ACut</b>.
</p>
<h3>Output</h3>
<p>
For each test case print the simplified fraction of <b>RCut/ACut</b>. For clarity refer to the Sample Inputs and Outputs.
</p>
<h3>Constrains</h3>
<p>1 &lt;= <b>T</b> &lt;= 10<br />
1 &lt;= <b>N</b> &lt;= 10<sup>5</sup><br />
0 &lt;= <b>Size, ripeFactor, minSize, minRipeFactor</b> &lt;= 10<sup>9</sup><br />
1 &lt;= <b>ACut</b> &lt;= <b>N</b></p>
<h3>Sample Input</h3>
<pre>
1
5 5 150
1 120
7 133
3 153
5 100
2 150
4
</pre><h3>Sample Output</h3>
<pre>
1/2
</pre><h3>Explanation</h3>
<p>Robot will cut <b>RCut</b> = 2 coconuts, it was actually required to cut <b>ACut</b> = 4 coconuts, so <b>ACut/RCut</b> is <b>2/4</b>, and simplified ratio is <b>1/2</b>  </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/hkbharath">hkbharath</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-02-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>