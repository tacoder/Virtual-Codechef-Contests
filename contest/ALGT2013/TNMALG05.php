<?php require("../../includes/header.php"); ?><h1>SWEET THEFT</h1><div class="content">

<p>In the honey bee hive of flora land our chef bee was a bit lazy. So instead of going out, she decided to steal honey from its neighbors. This continued for a while but then this laziness made her fat. Now she can fly only for unit d distance. </p>
<p>The honey bee hive, just like a regular hive is made up of MxN regular hexagonal compartments where the length of edge of hexagonal is k unit distance. You have to calculate from how many compartments she can potentially steal honey in single flight if the co-ordinate of center of leftmost and bottom most compartment is (0,0) and bee is currently at (x,y). </p>
<p>
Note: Assume that the honey is stored at the center of the hexagonal compartments and bee has to come back to its original position every time after stealing honey from a compartment.
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer T denoting the number of test cases, for each test case enter</p>
<p>Maximum distance travelled by bee, current position of bee i.e. (x,y), size of hive (MxN), length of edge of hexagon.. All seperated by a single space.</p>
<h3>Output</h3>
<p>For each test case, output a single line with number of compartments accessible to bee.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>D</b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<p>2</p><p>5 0 0 100 100 1</p><p>6 2 3 15 20 1</p>
<b>Output:</b>
<p></p><p>2</p><p>6</p>
</pre><h3>Explanation</h3>
<p><b>Case 1 : Since bee is at position (0,0) she can reach out to the compartment centered to at </b></p>
<p>(1.73,0), (0.86),1.5)</p>
<p><b>Case 2 : Since bee is at position (2,3) she can reach out to the compartment centered to at</b></p>
<p> (2.59,1.5), (0,3), (0.88,1.5), (3.46,3), (0.88,4.5), (2.59,4.5)</p>
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
            <td>0.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, JS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PYTH, PYTH 3.1.2, RUBY, SCALA, ST</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>