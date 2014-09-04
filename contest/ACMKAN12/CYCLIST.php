<?php require("../../includes/header.php"); ?><h1>The Adventure of the Solitary Cyclist, II</h1><div class="content">

<p style="text-align:justify">A cyclist, bored of congested roads, decides that she no longer wants to go the shortest route from her hostel to the college. She has decided that it is safer to follow routes with bicycle lanes. Roads have cycle lanes in both directions - however, they have gaps in their cycle-lane coverage.</p>
<p style="text-align:justify">For this question, you are given a network of roads. With each road, there is a score, of the percentage of its length supporting a bicycle lane. You can assume that the percentages are unique floating-point values. </p>
<p style="text-align:justify">The "safety-factor" of a path from hostel to college is the least score of a road on that path. You have to compute the path from hostel to college, with the <b>largest</b> safety-factor.</p>
<h3>Input</h3>
<p style="text-align:justify">The input consists of several lines. The first line is a number saying how many networks are present in the input. This is followed by lines describing each network. </p>
<p style="text-align:justify">The first line of each network has a single number (let’s call it v) -- the number of vertices in the network. This is followed by a number of lines, each describing a road. Each road is  given as three numbers separated by spaces - the first two being the nodes connected by the edge, and the third a floating-point number representing the percentage of cycle-lane coverage (between 0 and 100, inclusive). The end of the list of roads for a network is denoted by three "-1"s in a line. The college is always assumed to be node 1 and the hostel is always assumed to be the node with the highest index. There is at most one road between any pair of vertices. There is certainly at least one path that connects the hostel and the college.</p>
<h3>Output</h3>
<p style="text-align:justify">The output should have several lines. The i-th line describes the safety factor of the i-th network in the input. The output should be within 10<sup>-6</sup> of the answer.</p>
<h3>Sample Input</h3>
<pre>
2
4
1 2 4.0
1 3 7.0
1 4 1.0
2 3 5.0
2 4 3.0
3 4 2.0
-1 -1 -1
4
1 2 40.0
1 3 8.0
1 4 11.0
2 3 21.0
3 4 30.0
-1 -1 -1

</pre><h3>Sample Output</h3>
<pre>
3
21

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shilp_adm">shilp_adm</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-11-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>