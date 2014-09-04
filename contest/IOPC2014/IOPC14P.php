<?php require("../../includes/header.php"); ?><h1>Power Tower</h1><div class="content">
<p>There are multiple parallel universe and one can traverse from one to another using the method of <a href="http://en.wikipedia.org/wiki/Inception">inception</a>. A universe is reachable from another only if they are connected by an "inception line", and for two universe not connected by a direct "inception line", one might have to traverse multiple intermediate universe before reaching the destination universe. You are assured there will be exactly one <a href="http://en.wikipedia.org/wiki/Path_(graph_theory)">path</a> from any universe to any other.<br /><br /></p>
<p>However there's another catch for the people planning to traverse between different universe. Every universe has a time factor associated with it. Given two universe <strong>A</strong> and <strong>B</strong> with a direct "inception line" between them, assume <strong>A</strong> has a time factor <strong>S</strong> and <strong>B</strong> has a time factor <strong>T</strong>, then a job J in <strong>A</strong> will be slowed by a <strong>S <sup> T </sup></strong> factor in <strong>B</strong>. Similarly if from <strong>B</strong>, one moves to another universe <strong>C</strong>, directly connected to it, having time factor <strong>V</strong>, then the job will be slowed down by a factor of <strong>S <sup> ( T <sup> V </sup>) </sup>   </strong> in <strong>C</strong>, and so on. Note that it may appear contradictory to common sense, but thats how things in parallel universe are.<br /><br /></p>
<p>You will be given the data of all universe with the connectivity information between them. Your task is, given two universe <strong>P</strong> and <strong>Q</strong>, to report the factor by which the job will be slowed down, when one traverses from <strong>P</strong> to <strong>Q</strong>. Since this factor can be very large, you will have to report it modulus some value, which will be given in the input. Also the time factor may have to updated and such an operation will also have to be supported. <strong>However, there will be atmost 5 update operations.</strong><br /></p>
<h3>Input Format</h3>
<p>First line contains two space separated integers, <strong>N</strong> and <strong>K</strong>.<br /><br />The next <strong>N-1</strong> lines contain the connectivity information. Each line contains two space separated integers <strong>P</strong> and <strong>R</strong>, representing there is an "inception line" between <strong>P</strong> and <strong>R</strong>.<br /><br /><br />
Next line contains <strong>N</strong> space separated integers, where the <strong>i</strong>-th integer is the value of the time factor for the <strong>i</strong>-th universe. <br /><br /><br />
Following <strong>K</strong> lines contains the operations to be performed, each line representing an operation.<br /><br />
For a query operation, the first character is <strong>Q</strong>, followed by three space separated integers <strong>A</strong>, <strong>B</strong> and <strong>C</strong>.<br /><br />
For an update operation, the first character is <strong>U</strong>, followed by two space separated integer <strong>D</strong> and <strong>E</strong>, such the the time factor of universe <strong>D</strong> is to be changed to <strong>E</strong>.<br /></p>
<h3>Output Format</h3>
<p>For each of the query operations, output the factor <strong>(mod C)</strong> by which a job will be slowed down on traversing from universe <strong>A </strong>to universe <strong>B</strong>.</p>
<h3>Constraints</h3>
<ul>
<li>1≤N ≤ 1e5 </li>
<li>1≤K ≤ 1e5 </li>
<li>1≤C ≤ 1e5 </li>
<li>1≤ value of a universe ≤ 1e9 </li>
</ul>
<h3>Sample Input</h3>
<p>5 5<br /><br />
1 2<br /><br />
2 3<br /><br />
2 4<br /><br />
5 1<br /><br />
2 3 2 2 3<br /><br />
Q 3 4 10000<br /><br />
Q 2 5 10000<br /><br />
U 2 2 <br /><br />
Q 3 4 10000<br /><br />
Q 2 5 10000<br /></p>
<h3>Sample Output</h3>
<p>512<br /><br />
6561<br /><br />
16<br /><br />
256<br /></p>
<h3>Explanation</h3>
<p>First query operation represents (2<sup>3<sup>2</sup></sup>) mod 10000 = 512<br /><br />
Second query operation represents (3<sup>2<sup>3</sup></sup>) mod 10000 = 6561<br /><br />
After the update operation, time factor of universe 2 is changed to 2.<br /><br />
Third query operation represents (2<sup>2<sup>2</sup></sup>) mod 10000 = 16<br /><br />
Fourth query operation represents (2<sup>2<sup>3</sup></sup>) mod 10000 = 256<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>3 sec</td>
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