<?php require("../../includes/header.php"); ?><h1>Coloring Trees</h1><div class="content">

<p>Nivash and Bhoopathi play a game of memory, which goes as follows: There is a tree containing 'N' nodes, all of which are initially uncoloured.</p>
<p>In the game, Nivash has 2 moves: </p>
<p>1) Command: Color a particular node with a given color.</p>
<p><br/>2) Query: Ask Bhoopathi if the path from node 'a' to node 'b' (both inclusive), is monochromatic or not.(i.e Whether all nodes on the path have the same color).</br/></p>
<p>Nivash can do these steps in any order he wishes and he colors each node atmost once. Whenever Nivash puts forth a 'Query' at Bhoopathi, Bhoopathi has to recollect the colouring of the tree and reply either "YES" or "NO". Can your help Bhoopathi answer these queries?</p>
<h3>Input</h3>
<p>The first line of input contains an integer 'N', denoting the number of nodes in the tree.</p>
<p>The next 'N-1' lines contain 2 space separated integers 'u' and 'v', denoting an edge between vertex 'u' and vertex 'v'.<br />
<br/>The next line contains an integer 'Q', denoting the number of inputs (commands and queries) which Nivash wants to give. The next 'Q' lines contain 3 space separated integers 'x', 'a', 'b'. If 'x' is 1, it denotes a command to color node 'a' with a color 'b'. If 'x' is 2, it denotes a query and Bhoopathi should answer if the path from node 'a' to node 'b' (both inclusive), is monochromatic or not.</br/></p>
<p>All vertices of the tree are 0 based.</p>
<h3>Output</h3>
<p>For each query, output "YES" or "NO" (quotes for clarity), denoting whether the path from node 'a' to node 'b' (both inclusive), is monochromatic or not.</p>
<p>Output "NO", even if all nodes on the path from node 'a' to node 'b' (both inclusive) are uncolored.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
0 1
1 2
7
1 0 11
2 0 1
2 0 2
1 2 12
1 1 11
2 0 1
2 0 2

<b>Output:</b>
NO
NO
YES
NO

<b>Constraints:</b>
1 &lt;= N &lt;= 100000 
1 &lt;= Q &lt;= 200000
1 &lt;= color value &lt;= 30.

</pre><p><b>Explanation:</b></p>
<p>Initially node '0' is colored with color '11', so path between node '0' and node '1' is not monochromatic. Hence, the answer is "NO". The same explanation holds for the path between node '0' and  node '2'. Then node '2' is colored with color '12' and node '1' with color '11'. Now, all nodes on the path between node '0' and node '1' are colored with only one color ('11'), so the answer is "YES". The path between node '0' and node '2' has 2 colors ('11' and '12'), hence the answer is "NO".</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>