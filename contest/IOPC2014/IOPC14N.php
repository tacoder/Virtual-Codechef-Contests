<?php require("../../includes/header.php"); ?><h1>Swap and Explore</h1><div class="content">
<p>Rob likes to explore but is lazy.<br /><br />
He has many cubes arranged before him in a line. Each cube has either the letter 'A' or 'B' inscribed on it.<br /><br /></p>
<p>Now Rob wants to swap any two positions of cubes placed on the line, such that the there exists a sequence of continuous cubes with letter 'A' inscribed on them, whose number is greater than or equal to M.<br /><br /></p>
<p>However, mechanically swapping cubes is a tedious task. Therefore he wishes to know the minimum number of swap operations he has to perform to get such an arrangement of cubes.<br /></p>
<h3>Input Format</h3>
<p>First line consists of T test cases.<br /><br />
For each test case, first line consists of the string S, composed of A's and B's, representing the initial configuration of cubes, and second line an integer M.<br /><br /></p>
<h3>Output Format</h3>
<p>The output consists of T lines corresponding to T test cases, such that it is the minimum number of operations required to create a consecutive segment of greater than M A’s from S. <br /><br /></p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ Sum of lengths of S over all test cases ≤ 10<sup>6</sup><br />
</li><li>1 ≤ Length(S) ≤ 10<sup>5</sup></li>
<li> It is ensured that number of A's are &gt;= M.
</li></ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>1<br /><br />
ABA<br /><br />
2<br /><br /></p>
<h3>Sample Output</h3>
<p>1<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>