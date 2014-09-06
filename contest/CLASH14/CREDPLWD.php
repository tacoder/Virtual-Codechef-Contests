<?php require("../../includes/header.php"); ?><h1>Plywood</h1><div class="content">
<p> </p>
<p>The <a href="http://credenz.info/Events/roboliga/roboliga.html">Roboliga</a> team of Credenz '14 have bought a plywood. The plywood is a flat plane represented as a 2D matrix. Each element of a 2D matrix represents the weight of that particular part of the plywood.</p>
<p>Now the Roboliga team wants to cut a rectangular hollow piece of outer rectangle of size <b>AxB</b> and inner rectangle of size <b>((A-2)x(B-2))</b> from the plywood which satisfies the following conditions:<br /></p>
<li>All the blocks on the hollow rectangular piece have equal weight.</li>
<li>The area covered by the outer rectangle is maximum i.e. product of A and B is maximum.</li>
<p>Note that pieces of dimensions less than or equal to 2 are allowed. Such pieces would not be hollow.</p>
<p> </p>
<h3>Input</h3>
<p>First line contains two integers <b>M</b> and <b>N</b><br /><br />
Next <b>M</b> lines contain <b>N</b> space-separated integers: the description of the matrix</p>
<p> </p>
<h3>Output</h3>
<p>Output the maximum area of the hollow rectangle.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 &lt;= <b>M</b> &lt;= 100<br /><br />
1 &lt;= <b>N</b> &lt;= 100<br /><br />
1 &lt;= <b>a<sub>i</sub></b> &lt;= 10^9</p>
<p><br /></p>
<h3>Example</h3>
<pre><b>Input:</b>
7 7
1 2 3 4 5 6 7
7 9 9 9 9 2 4
1 9 3 4 9 6 7
7 9 9 9 9 2 4
1 2 3 4 5 6 7
7 6 5 1 3 2 4
1 2 3 4 5 6 7

<b>Output:</b>
12
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1</td>
        </tr>
    </table><a href="http://www.codechef.com/submit/CREDPLWD" target="_BLANK"><div id="submitButton">Submit</div></a><?php require("../../includes/footer.php"); ?>