<?php require("../../includes/header.php"); ?><h1>Scouts on Ranging</h1><div class="content">

<p>
During the summer, the boy-scouts group decides to go out for a ranging. The teacher-in-charge Mr. Anderson is faced with the tough job of forming groups for this ranging. Every student in the boy-scouts group has a <b>rank</b>. Now Mr. Anderson has to ensure that every group has a group leader whose rank is greater than or equal to the other group members rank, and his age should not differ from the other members in the group by more than <b>K</b> years. <br /> Now many students are friends and they want their group to be as large as possible.<br />
So they approach Mr. Anderson in pairs to ask the largest group size in which that pair can be accommodated.</p>
<p> Since the scouts are large in number, Mr. Anderson is finding it difficult to answer the students and hence comes to you to solve his problem.</p>
<h3>Input</h3>
<p>First line contains two integers <b>N </b>(1 &le; N &le; 100000) and <b>K</b>(1 &le; K &le; 10<sup>7</sup>), number of scouts and the age difference limit in a group. Each scout has a unique serial number from 1 to N.<br />
Next line contains N space separated integers r<sub>1</sub>,r<sub>2</sub>,...,r<sub>N</sub> (1 ≤ r<sub>i</sub> ≤ 10<sup>9</sup>), representing the ranks of scouts in order of their serial number. Ranks may be same for two scout.</p>
<p>Then next line again contains N integers a<sub>1</sub>,a<sub>2</sub>,...,a<sub>N</sub> (1 ≤ a<sub>i</sub> ≤ 10<sup>9</sup>), representing the age of scouts in order of their serial number.<br />
Next line contain number of queries, q (1 ≤ q ≤ 10<sup>5</sup>). Then q lines follow.<br />
i<sup>th</sup> line contains two integers each X<sub>i</sub> and Y<sub>i</sub> separated by a space, the serial number of the scouts who need be accommodated to largest group.</p>
<h3>Output</h3>
<p>Output q lines, each containing an integer, maximum group size in which the two scouts queried X<sub>i</sub> and Y<sub>i</sub> can be accommodated. The scouts may or may not be the leader of the group.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6 1
2 5 3 4 3 4
2 4 3 2 1 3
3
2 6 
3 6
2 4

<b>Output:</b>
3
5
-1

<b>Explanation:</b>
For the first query, Serial number are 2 and 6, the largest group size is 3 (serial 2,3,6), group leader is 2.<br /><br />
For the second query, Serial number are 3 and 6, the largest group size is 5 (serial 1,3,4,5,6),<br /> group leader is 4.<br /><br />
In third query, scout 2 has maximum rank, so he is leader, but his age difference with scout 4 is 2,<br /> violating the age restriction. Hence no group can be formed.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitpandeykgp">amitpandeykgp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2013</td>
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