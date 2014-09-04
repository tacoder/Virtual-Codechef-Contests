<?php require("../../includes/header.php"); ?><h1>Gathering of the Great</h1><div class="content">

<p>
<h2>Points:10</h2>
</p>
<p>
Evading the agents of the church was of prime importance for the Brotherhood of Brom, for if caught they would hanged, or burnt at the stake, or worse... Instead of having just a single meeting place they had multiple spots so that if one location was somehow compromised, they could use the other. Hence they needed to chose their meeting spots very carefully in the city. They chose them in such a manner that each meeting place was always connected to all the other alternate meeting spots.<br />
Last night as you were going through the junk in your attic, you came across an ancient manuscript. Turns out that it is actually a map drawn by your greatest grandfather himself of the whole city as it was at that time. You could probably track down their meeting locations by finding sets of spots on the map that were always completely interconnected. It would be easier to visualise the map as a graph with the roads as the edges and the possible meeting locations as the nodes.<br />
<br/><br />
Consider a graph  G formed from a large number of nodes connected by edges.<br />
G is said to be connected if a path can be found in 0 or more steps between any pair of nodes in G. For example, the graph below is not connected because there is no path from A to C.<br />
<br/><br />
This graph contains, however, a number of subgraphs that are connected, one for each of the following sets of nodes: {A}, {B}, {C}, {D}, {E},<br />
{A,B}, {B,D}, {C,E}, {A,B,D}<br />
<br/><br />
A connected subgraph is  maximal if there are no nodes and edges in the original graph that could be added to the subgraph and still leave it connected. There are two maximal connected subgraphs above, one associated<br />
with the nodes {A, B, D} and the other with the nodes {C,  E}.<br />
<br/><br />
Write a program to find the number of maximal connected subsections(subgraphs) of the city(graph).
</br/></br/></br/></br/></p>
<p><h3>
Input:</h3>
</p><p>
The first line contains the number of test cases T. T&lt;=100<br />
The first line of each input set contains a single uppercase alphabetic character. This character represents the largest node name in the graph. Each successive line contains a pair of uppercase alphabetic characters denoting an edge in the graph.<br />
Input is terminated by #.</p>
<h3>
<p>Output:<br />
</p></h3>
<p>For each test case, the output the number of maximal connected subgraphs.
</p>
<p>
<h3>
Example:</h3></p>

<p><b>Input:</b></p>
<pre>
1
E
AB
CE
DB
EC
</pre><p><b><br />
Output:</b></p>
<pre>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ankitbabbar">ankitbabbar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>