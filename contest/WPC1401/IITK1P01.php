<?php require("../../includes/header.php"); ?><h1>Clash of Kings</h1><div class="content">
<p>
A country has V cities. Certain pairs of cities are connected by undirected transport roads between them. There are E such transport roads. There exists a sequence of roads connecting every city in the the country to every other city.<br />
Among the V cities, K of the cities are good cities.
</p>
<p>
Initially all the cities are free. The country is ruled by two kings. The first king wants no friendship with the second king, while the other king wants friendship with the first king. They now play a game of conquering cities.
</p>
<p>
The first king selects a good city, then the second king selects a good city and so on; until all the good cities are over.<br />
Suppose at the end some good cities belong to kingdom A and others to B. Distance value between the two kingdoms is defined as the sum of shortest distances between each pair of good cities X and Y such that X belongs to A and Y belongs to B.
</p>
<p>
The first king wants to maximize the distance value and other king wants to minimize this. Assuming that both play optimally, find out the distance value after the end of the game.
</p>
<h3>Input</h3>
<p>
First line contain three space separated integers denoting V, E, and  K respectively.
</p>
<p>
For next E lines, each line contain 3 space separated integers, u v w, denoting that there is an edge from u to v of length w.
</p>
<p>
The following line contains K space separated integers denoting the indices of the good cities. Indices are given by using 1 based indexation.
</p>
<h3>Output</h3>
<p>
A single integer, the maximum possible distance that can be achieved if both kings play optimally.</p>
<h3>Constraints</h3>
<ul>
<li>2 ≤ V ≤  200</li>
<li>No constraint on E</li>
<li>2 ≤ K ≤  12</li>
<li>0 ≤ w ≤  100</li>
<li>1 ≤ u, v ≤  V</li>
<li>No two u, v pairs repeat in input.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 5 3
1 2 5
1 3 2
1 4 3
2 4 2
3 4 2
1 2 4


<b>Output:</b>
7
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
								
		        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>