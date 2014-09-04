<?php require("../../includes/header.php"); ?><h1>Sweets Problem</h1><div class="content">
<p>Sam visits the most famous sweet shop in his city. The shop has an assortment of sweets of different variety. It contains a<sub>1</sub> sweets of 1st kind, a<sub>2</sub> sweets of 2nd kind, and so on, upto <strong>N</strong>.<br /><br /></p>
<p>Now Sam has been restricted by his mother, to select exactly <strong>S</strong> number of sweets from the shop to eat. You have to help him find out the number of ways in which he can select <strong>S</strong> sweets. Sam may have multiple queries for you and you are expected to answer them all.<br /></p>
<h3>Input Format</h3>
<p>First line contains integer <strong>N</strong>, such that there are <strong>N</strong> different kinds of sweets.<br /><br /><br />
The following <strong>N</strong> lines represent the amount of sweets of each kind, i.e., the integer on <strong>i</strong>-th line represents the number of sweets of <strong>i</strong>-th kind.<br /><br /><br />
Next line contains an integer <strong>Q</strong>, the number of queries to follow.<br /><br /><br />
The following <strong>Q</strong> lines contain an integer <strong>S</strong> each, such that you have to report the number of ways in which <strong>S</strong> sweets can be selected modulo (10^9 + 7).<br /><br /></p>
<h3>Output Format</h3>
<p>The output consists of <strong>Q</strong> lines, such that each line consists of the output of the corresponding query, i.e., the number of ways in which <strong>S</strong> sweets can be selected.<br /><br /></p>
<h3>Constraints</h3>
<ul>
<li>N ≤ 10<sup>6</sup></li>
<li>1 ≤ Amount of sweets of each kind ≤ 10<sup>3</sup></li>
<li>1 ≤ Q ≤ 10<sup>4</sup></li>
<li>1 ≤ S ≤ 2000</li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>2<br /><br />
2<br /><br />
3<br /><br />
6<br /><br />
1<br /><br />
2<br /><br />
3<br /><br />
4<br /><br />
5<br /><br />
6<br /><br /></p>
<h3>Sample Output</h3>
<p>2<br /><br />
3<br /><br />
3<br /><br />
2<br /><br />
1<br /><br />
0<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
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
            <td>ADA, C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>