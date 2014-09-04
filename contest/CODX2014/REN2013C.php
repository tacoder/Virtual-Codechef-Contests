<?php require("../../includes/header.php"); ?><h1>The Kings Idea</h1><div class="content">
<p> </p>
<p>
<h3>Problem description</h3>
</p>
<p>The king of chefville decided to bring the people of the world closer together. He came up with an idea of building underground tunnels to connect major cities of the world. He also wanted to save up on money so he made sure a single tunnel was made between any two cities and there was exactly one path through these tunnels between any two cities.These tunnels are bi-directional.</p>
<p>
Now a few citizens come up to the king and asked him how they can go from city A to city B through these tunnels traversing the least distance possible.The king is good with coming up with ideas but queries like these troubled him, so he turns to you for help.You must answer the citizens' queries for the king.</p>
<p>
It is known that the length of the path between two cities will be the sum of lengths of all the tunnels on the path.Also the index of chefville is always 0.</p>
<h3>Input</h3>
<p>The test file contains several test cases. Each test case starts with a line containing N (2 ≤ N ≤ 10^5).</p>
<p>
Each of the next N-1 lines contains two integers describing a tunnel. The two integers on the line number i ( 1 ≤ i ≤ N-1 ) are x ( 0 ≤ x ≤ i-1 ) and L ( 1 ≤ L ≤ 10^9 )  where x is index of the city connected to city with index i using the tunnel and L is the length of the tunnel.</p>
<p>
The next line contains an integer Q( 1≤ Q ≤ 10^5) the number of queries. The next Q lines contains the description of the queries. Each line contains two integers S                 (0 ≤ S ≤ N-1) and D ( 0 ≤ D ≤ N-1) where S is source city and D is destination city.</p>
<p>
The last test case is followed by a line containing one zero.</p>
<h3>Output</h3>
<p>For each test case output a single line with Q space separated integers such that the ith integer is the length of the shortest path for the ith query.</p>
<h3>Example</h3>
<pre><b>Input:</b>
6
0 8
1 7
1 9
0 3
4 2
4
2 3
5 2
1 4
0 3
2
0 1
2
1 0
0 1
0

<b>Output:</b>
16 20 11 17
1 1
</pre><h3>Explanation</h3>
<p>
For the second case chefville ( index 0 ) is directly connected to city 1 with a tunnel of length 1. So , getting from 1 to 0 or from 0 to 1 is possible only by traveling the single tunnel of length 1.Hence answer to both the queries is 1.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitrc17">amitrc17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-01-2014</td>
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