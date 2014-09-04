<?php require("../../includes/header.php"); ?><h1>City Shortcuts</h1><div class="content">
<h3>Problem statement</h3>
<p>In the Byteland there are <strong>N</strong> cities, numbered 0 through <strong>N-1</strong>. The road network in the country forms an undirected connected graph. In other words: Some pairs of cities are connected by bidirectional roads. And all cities are connected to all other cities directly or indirectly. You are given a matrix <strong>MAP</strong> that describes the road network. For each <b><i>i</i></b> and <b><i>j</i></b>, <strong>MAP[i][j]</strong> is <strong>"Y"</strong> if the cities <b><i>i</i></b> and <b><i>j</i></b> are already connected by a direct road, and it is <strong>"N"</strong> otherwise.</p>
<p>
	The distance between two cities is the smallest number of roads one needs to travel to get from one city to the other. You are given <strong>Q</strong> queries about the map. Each query consists of two space separated integers <strong>A</strong> and <strong>B</strong>, result of each query is  the distance between the city <strong>A</strong> and city <strong>B</strong>.</p>

<h3>INPUT</h3>
<p>	First line of input contains <strong>T</strong>, number of test cases,<br />
	First line of each test case consists of an integer <strong>N</strong>, the number of cities.<br />
	Next <strong>N</strong> line contains the matrix <strong>MAP</strong>, as described in the question.<br />
	Next line contains <strong>Q</strong>, number of queries.<br />
	Next <strong>Q</strong> lines will contain two space separated integers <strong>A<sub>i</sub></strong> and <strong>B<sub>i</sub></strong>.</p>
<p><h3>OUTPUT</h3>
</p><p>
For each test case print <strong>Q</strong> lines containing result of <strong>Q</strong> queries.</p>
<h3>
CONSTRAINTS</h3>
<ul>
<li>1 ≤ T ≤ 10</li>
<li>1 ≤ N ≤ 200</li>
<li>1 ≤ Q ≤ 2000</li>
<li>0 ≤ A<sub>i</sub>,B<sub>j</sub> &lt; N</li>
</ul>
<h3>EXAMPLE</h3>
<p><b>Input</b></p>
<p>1<br />
4<br />
NYNN<br />
YNYN<br />
NYNY<br />
NNYN<br />
2<br />
0 3<br />
1 2
</p>
<p><b>Output</b></p>
<p>
3<br />
1
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/hkbharath">hkbharath</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-10-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>