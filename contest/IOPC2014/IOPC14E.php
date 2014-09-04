<?php require("../../includes/header.php"); ?><h1>Easy Airthmetic Geometric Progression</h1><div class="content">
<p>In planet Krypton, the people use concalls to communicate with each other. The concall network is composed of concall devices connected to each other. The network is such that from each concall device, there is a unique path through the network to reach every other concall device. <br /><strong>An Edit: Note that, the connection between any two concall devices, if connected, is two way.</strong><br />
<br />The network has a parameter <strong>R</strong>, constant for it throughout its use. Every concall device has some value associated with it, which is initially zero. <br /><br /></p>
<p>General Zod, a militant leader, knows that the concall network is the lifeline of the society in the planet and so wishes to slowly poison it. To do this, he introduces nanomites in the network, through a state-of-the-art program.<br /><br />
Whenever he runs the program on devices <strong>A</strong> and <strong>B</strong>, then all devices in the shortest path from <strong>A</strong> to <strong>B</strong> have their value incremented by a certain amount by the nanomites. The amount incremented of nodes in the path is in <a href="http://en.wikipedia.org/wiki/Arithmetico-geometric_sequence">arithmetic geometric series</a>, i.e., if the shortest path is <strong>A, V<sub>1</sub>, V<sub>2</sub>,.....,B</strong>, then value of <strong>A</strong> is incremented by <strong>XR<sup>1</sup></strong>, value of <strong>V<sub>1</sub></strong> is incremented by <strong>2XR<sup>2</sup></strong>, value of <strong>V<sub>2</sub></strong> is incremented by <strong>3XR<sup>3</sup></strong> and so on. The value of <strong>X</strong> can be different for every program run by Zod while the value of <strong>R</strong> is fixed for the network, as specified earlier.<br /><br /></p>
<p>After having run the program to change the values in the specified way of multiple devices in the network, General Zod wishes to make some queries of the values of the network to assess the correctness of his program. He wants to know that, given two devices <strong>C</strong> and <strong>D</strong>, what is now the sum of values of devices in the shortest path from <strong>C</strong> to <strong>D</strong>. Since this value may be very large, you have to report it modulo 100711433.<br /><br /></p>
<h3>Input Format</h3>
<p>First line contains two integers (<strong>N</strong> and <strong>R</strong> respectively) separated by space. <br /><br />
In the next <strong>N-1</strong> lines, each line contains two integers <strong>A</strong> and <strong>B</strong>, such that there is a direct connection between <strong>A</strong> and <strong>B</strong>.<br /><br /><br />
Next line contains two space separated Integers (<strong>U</strong> and <strong>Q</strong> respectively) representing the total number of Update and Query operations to follow.<br /><br />
Next <strong>U</strong> lines follow each line asking to increment the value of certain nodes in the above specified way. Each line contains 3 space specified integers, <strong>X, A</strong> and <strong>B</strong>, where  <strong>X</strong> is the parameter for the program and <strong>A</strong> and <strong>B</strong> are the devices, such that values of all devices between <strong>A</strong> and <strong>B</strong> are to be updated.<br /><br />
Next <strong>Q</strong> lines, each line containing two integers <strong>C</strong> and <strong>D</strong>.<br /><br /></p>
<h3>Output Format</h3>
<p>Output the answer to each query as explained.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ R ≤ 10<sup>9</sup></li>
<li>1 ≤ N ≤ 10<sup>5</sup></li>
<li>1 ≤ U ≤ 10<sup>5</sup></li>
<li>1 ≤ Q ≤ 10<sup>5</sup></li>
<li>1 ≤ X ≤ 10<sup>9</sup></li>
</ul>
<p><br /></p>
<h3>Sample Input</h3>
<p>5 2<br /><br />
1 2<br /><br />
2 3<br /><br />
2 4<br /><br />
1 5<br /><br />
2 2<br /><br />
3 3 4<br /><br />
3 2 5<br /><br />
3 4<br /><br />
2 5<br /><br /></p>
<h3>Sample Output</h3>
<p>108<br /><br />
126<br /><br /></p>
<h3>Explanation</h3>
<p>Value of R is 2.<br /><br />
After first update the values of device 3 becomes 6, device 2 becomes 24, device 4 becomes 72.<br /><br />
After second update values of device 2 becomes 24+6=30, device 1 becomes 24, device 5 becomes 72.<br /><br />
<br /><br />
For first query operation, Value[3] + Value[2] + Value[4] = 108<br /><br />
For second query operation, Value[2] + Value[1] + Value[5] = 126<br /><br />
<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>