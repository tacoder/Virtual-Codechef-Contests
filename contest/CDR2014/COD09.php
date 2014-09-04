<?php require("../../includes/header.php"); ?><h1>Catch me if you can</h1><div class="content">
<h2>Catch Me If You Can </h2>
<p>There are N people playing a game called "Catch me if You Can". The game is like some pair of persons tied together by ropes. They have to run from each other as much far as they can. But since not all the persons are tied, some are free.</p>
<p>Input is given in form on N x N matrix, such that element(i,j) show length of rope between ith and jth person zero index. Distance can be digits or character.</p>
<pre>
	'0'-'9' : Distances 0 to 9 feet, in order
	'a'-'z':  Distances 10 to 35 feet, in order.
	'A'-'Z':  Distances 36 to 61 feet, in order.
	'-'    :  Hyphen means the pair is not tied.
	</pre><p>Given the two persons, tell the maximum distance that any pair can achieve. If there is no limit to distance, it should give -1.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b>&lt;=<b>t</b>&lt;=<b>10</b>
</li><li> <b>2</b>&lt;=<b>N</b> &lt;= <b>50</b>
</li><li> <b>i,j will vary from 0 to N-1</b>
</li><li> <b>Element (i,j) and (j,i) of matrix will be equal</b>
</li><li> <b>Element (i,i) will be 0
<li> <b>Each element of matrix will be a digit ('0'-'9'), an uppercase letter ('A'-'Z'), a lowercase letter ('a'-'z') or a hyphen '-'</b></li>
</b></li></ul>
<h3>Input</h3>
<p>First line taking t - test cases. t test cases follows. Every test case has an integer N , followed by N lines, each line having string of length N </p>
<h3>Output</h3>
<p>Prints the maximum distance that can be achieved by two persons.If no limit, print -1
<h3>Sample Tests </h3>
<h5>Input</h5>
<pre>
	4
	0568
	5094
	6903
	8430
	</pre><h5>Output</h5>
</p><p>8</p>
<h5>Explanation</h5>
<p>Person 1 and Person 2 are tied with rope of length 9 but since they both are tied to person 3 with rope length 3 and 4 respectively.So they cant stay more than 7 feet apart. Person 0 and 3, on the other hand, can stand 8 feet apart.</p>
<h5>Input</h5>
<pre>
	2
	0- 
	-0
	</pre><h5>Output</h5>
<p>-1</p>
<h5>Explanation</h5>
<p>Both persons are not tied</p>
<h5>Input</h5>
<pre>
	8
	0AxHH190
 	A00f3AAA
        x00-----     
 	Hf-0---x 
 	H3--0---   
 	1A---0--  
 	9A-x--0Z
 	0A----Z0
	</pre><h5>Output</h5>
<p>43</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arvchamp">arvchamp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2014</td>
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