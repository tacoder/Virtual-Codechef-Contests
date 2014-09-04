<?php require("../../includes/header.php"); ?><h1>Robot Game</h1><div class="content">

<p>
Byteland is a kingdom of islands. Alice has N maps of the different islands constituting Byteland. Map of each island consists of cities, connected by roads. Being Byteland, the road layout of each island has a binary tree structure. Each island has a capital, which is the root of the binary tree of its map.
</p>
<p>
Alice is bored and plays the following game:<br />
She chooses k out of these N maps and places a robot on the capital city of each map. Every robot is controlled by a common control string. If the present character of the control string is L(R), then all the robots move to the left(right) subtree on their map. All the robots follow the same control string and move on their respective maps.
</p>
<p>
A control string is valid with respect to a given map if it corresponds to a valid path on that map. A control string is considered valid for a given set of k maps if it is valid for each of the k chosen maps.
</p>
<p>
For example in a complete binary tree of 3 nodes, control strings "L" and "R" are valid and "LL" is an example of an invalid control string.
</p>
<p>
Alice is interested in knowing the longest control<br />
string which is valid for at least k maps, for each value of k. Can you find this for her?
</p>
<h3>Input</h3>
<p>
First line of input contains an integer t (t&lt;=5), the number of test cases. Each test case starts with an integer M (1&lt;=M&lt;=100), the number of maps. Then M maps description follow.<br />
The ith map description starts with an integer N (2&lt;=N&lt;=1000), the number of cities on the island. Each of the following N-1 lines contain two space separated integers u c v (1&lt;=u,v&lt;=N , c=L or R) which means a road between city u and city v on the ith island and if c is L(R) then v is in the left(right) subtree of u. The capital city of each island is the city with number 1.
</p>
<h3>Output</h3>
<p>
For each test case output M space separated integers, where the ith integer denotes the length of the longest valid control string she can obtain assuming she can choose i maps.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
5
1 L 2
1 R 3
3 L 4
3 R 5
4
1 R 2
1 L 3
2 L 4
3
1 L 2
1 R 3
2
5
1 L 2
2 L 3
3 L 4
4 L 5
6
1 L 2
2 R 3
3 L 4
4 R 5
5 L 6


<b>Output:</b>
2 2 1
5 1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/akhilravidas">akhilravidas</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-04-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>