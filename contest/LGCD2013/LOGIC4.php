<?php require("../../includes/header.php"); ?><h1>Magic Graph</h1><div class="content">
<p>Digo loves graphs. He defines a  super-connected graph as a graph having <b>N</b> nodes, such that for any <b>j</b>, 1&lt;=<b>j</b>&lt;=<b>N</b>-1, it is possible to reach from node 1 to node <b>j</b> without crossing nodes <b>j</b>+1 to <b>N</b>.</p>
<p>The magician Gogo has decided to take over the world. The only man who stands between him and total world annihilation is Digo. Gogo knows that Digo does not stand a chance against his magical skills. He however believes that every great villain needs a great hero. Therefore he decides to give Digo one last chance to save the world. Knowing Digo's love for graphs, magician Gogo hands over Digo his magical scroll and gives him a chance to destroy it. Gogo etches an <b>N-Magic graph</b> on the scroll using his magic wand. The magical scroll can only be destroyed if Digo draws on it, the exact same graph.</p>
<p>An <b>N-Magic Graph</b> is defined as a graph having <b>N</b> nodes, such that for any given <b>j</b>, 1&lt;=<b>j</b>&lt;=<b>N</b>, it is possible to draw the graph remaining after removing all nodes from <b>j</b>+1 to <b>N</b> and all the edges touching these nodes, on the magical scroll without lifting the wand.</p>
<p>Digo however has no idea what an <b>N-Magic Graph</b> means, and being the sly opponent that he is, Gogo has no intentions of telling this to Digo as well. Thus, Digo plays a mathematical gamble and using Gogo's magic wand, draws a <b>Super-Connected Graph</b> having <b>N</b> nodes  on the scroll. </p>
<p>Let the graph drawn by magician Gogo be <b>G1</b> and that drawn by Digo be <b>G2</b>. A graph combination is thus the ordered pair (<b>G1</b>, <b>G2</b>). Two graph combinations (<b>G1</b>, <b>G2</b>) and (<b>G3</b>, <b>G4</b>) are said to be the same if <b>G1</b> is the same as <b>G3</b> and <b>G2</b> is the same as <b>G4</b>.</p>
<p>Clearly the probability of Digo destroying the scroll and saving the world is given by <b>S</b>/<b>M</b>, where <b>M</b> is the number of different Graph combinations and <b>S</b> is the number of different graph combinations (<b>G1</b>,<b>G2</b>) where <b>G1</b> is the same as <b>G2</b>.</p>
<p>Your task is to determine <b>M</b> modulo 1000000007.</p>
<h3>Input</h3>
<p>The first line contains <b>T</b>, the number of test cases.</p>
<p><b>T</b> lines follow, each containing one positive integer <b>N</b>.</p>
<h3>Output</h3>
<p>Output one line per test case, which contains the required answer.</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b> &lt;= 10<sup>5</sup></p>
<p>1 &lt;= <b>N</b> &lt;= 10<sup>6</sup></p>
<h3>Example</h3>
<p><b>Sample Input</b><br />3<br />1<br />2<br />3<br /><br /><b>Sample Output</b><br />1<br />1<br />9<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/adurysk">adurysk</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2013</td>
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